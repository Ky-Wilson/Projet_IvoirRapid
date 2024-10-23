<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ClientFormRequest;
use App\Events\ClientCreated;
use App\Models\Admin;
use App\Models\Client;
use Illuminate\Http\Request;

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
}