<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Events\ClientCreated;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\ClientFormRequest;

class ClientController extends Controller
{
    //
    
    public function index(){
        $clients = Client::all();
        return view('admin.client.index' , compact('clients'));
    }


   


    public function create(){
        return view('admin.client.create');
    }

    public function store(ClientFormRequest $request){
        $data = $request->validated();
        
        try {
            $client = new Client();
            $client->Nom_Société = $data['Nom_Société'];
            $client->abreviation = $data['abreviation'];
            $client->Telephone = $data['Telephone'];
            $client->Cellulaire = $data['Cellulaire'];
            $client->Email = $data['Email'];
            $client->Compte_contribuable = $data['Compte_contribuable'];
            $client->RCCM = $data['RCCM'];
            $client->Direction_1_Nom_et_Prenoms = $data['Direction_1_Nom_et_Prenoms'];
            $client->Direction_1_Contact = $data['Direction_1_Contact'];
            $client->Direction_2_Nom_et_Prenoms = $data['Direction_2_Nom_et_Prenoms'];
            $client->Direction_2_Contact = $data['Direction_2_Contact'];
            $client->Direction_3_Nom_et_Prenoms = $data['Direction_3_Nom_et_Prenoms'];
            $client->Direction_3_Contact = $data['Direction_3_Contact'];
            $client->Adresse = $data['Adresse'];
            $client->Commune = $data['Commune'];
            $client->Quartier = $data['Quartier'];
            $client->Rue = $data['Rue'];
            $client->Zone = $data['Zone'];
            $client->Autre = $data['Autre'];
    
            $client->save();
            // Lancer l'événement pour générer le code unique
            event(new ClientCreated($client));
    

    
            return redirect('admin/client')->with('message', 'Client enregistré avec succès');
        } catch (\Illuminate\Database\QueryException $e) {
            // Gérer les erreurs de duplication ou autres erreurs SQL
            return redirect('admin/add-client')->withErrors(['message' => 'Une erreur est survenue : ' . $e->getMessage()]);
        }
}

    
public function edit($client_id){
    $client = Client::find($client_id);
    return view('admin.client.edit', compact('client'));
}


public function update(ClientFormRequest $request, $client_id){
    $data = $request->validated();
    $client = Client::find($client_id);
    $client->Nom_Société = $data['Nom_Société'];
    $client->abreviation = $data['abreviation'];
    $client->Telephone = $data['Telephone'];
    $client->Cellulaire = $data['Cellulaire'];
    $client->Email = $data['Email'];
    $client->Compte_contribuable = $data['Compte_contribuable'];
    $client->RCCM = $data['RCCM'];
    $client->Direction_1_Nom_et_Prenoms = $data['Direction_1_Nom_et_Prenoms'];
    $client->Direction_1_Contact = $data['Direction_1_Contact'];
    $client->Direction_2_Nom_et_Prenoms = $data['Direction_2_Nom_et_Prenoms'];
    $client->Direction_2_Contact = $data['Direction_2_Contact'];
    $client->Direction_3_Nom_et_Prenoms = $data['Direction_3_Nom_et_Prenoms'];
    $client->Direction_3_Contact = $data['Direction_3_Contact'];
    $client->Adresse = $data['Adresse'];
    $client->Commune = $data['Commune'];
    $client->Quartier = $data['Quartier'];
    $client->Rue = $data['Rue'];
    $client->Zone = $data['Zone'];
    $client->Autre = $data['Autre'];
    $client->update();
    return redirect('admin/client')->with('message', 'Client mis à jour avec Succès');
}  


public function destroy($client_id){
    $client = Client::find($client_id);
    if(!$client){
        return redirect('admin/client')->with('message', 'Client introuvable');
    }
    else{
        $client->delete();
        return redirect('admin/client')->with('message', 'Client supprimé avec Succès');
    }
}

public function importantClients()
{
    $clients = Client::select('code_unique', 'Nom_Société', 'Telephone', 'Email', 'Adresse', 'Compte_contribuable')->get();
    return view('admin.client.important', compact('clients'));
}


public function login(Request $request)
{
    // Récupérer les données du formulaire
    $credentials = $request->only('email', 'Telephone');

    // Trouver le client par email
    $client = Client::where('email', $credentials['email'])->first();

    // Vérifier si le client existe et si le contact correspond
    if ($client && $client->contact === $credentials['Telephone']) {
        Auth::login($client); // Authentification réussie
        return redirect()->intended('client.dashboard'); // Redirigez vers le tableau de bord
    }

    // Authentification échouée
    return back()->withErrors([
        'email' => 'Les identifiants fournis sont incorrects.',
    ]);
}
public function logout()
{
    Auth::logout();
    return redirect('/'); // Redirigez vers la page d'accueil ou une autre page
}


}