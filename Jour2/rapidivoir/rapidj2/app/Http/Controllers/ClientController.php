<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function index()
    {
        return view('clients.index', ['clients' => Client::get()]);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        // Définir les règles de validation
        $request->validate([
            'Nom_Société' => 'required|string|unique:clients,Nom_Société',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Telephone' => 'required|string|size:10|unique:clients,Telephone',
            'Cellulaire' => 'required|string|size:10|unique:clients,Cellulaire',
            'Email' => 'nullable|email',
            'Compte_contribuable' => 'required|string|regex:/^\d{7}-[A-Z]$/|unique:clients,Compte_contribuable',
            'RCCM' => 'nullable|string',
            'Direction_1_Nom_et_Prenoms' => 'required|string|unique:clients,Direction_1_Nom_et_Prenoms',
            'Direction_1_Contact' => 'required|string|size:10|unique:clients,Direction_1_Contact',
            'Direction_2_Nom_et_Prenoms' => 'nullable|string|unique:clients,Direction_2_Nom_et_Prenoms',
            'Direction_2_Contact' => 'nullable|string|size:10|unique:clients,Direction_2_Contact',
            'Direction_3_Nom_et_Prenoms' => 'nullable|string',
            'Direction_3_Contact' => 'nullable|string|size:10',
            'Adresse' => 'nullable|string',
            'Ville' => 'required|string',
            'Commune' => 'required|string',
            'Quartier' => 'required|string',
            'Rue' => 'required|string',
            'Zone' => 'required|string',
            'Autre' => 'nullable|string',
        ]);

        //upload image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('clients'), $imageName);
        
        // Création d'un nouveau client
        $client = new Client;
        $client->Nom_Société = $request->Nom_Société;
        $client->image = $imageName; 
        $client->Telephone = $request->Telephone;
        $client->Cellulaire = $request->Cellulaire;
        $client->Email = $request->Email;
        $client->Compte_contribuable = $request->Compte_contribuable;
        $client->RCCM = $request->RCCM;
        $client->Direction_1_Nom_et_Prenoms = $request->Direction_1_Nom_et_Prenoms;
        $client->Direction_1_Contact = $request->Direction_1_Contact;
        $client->Direction_2_Nom_et_Prenoms = $request->Direction_2_Nom_et_Prenoms;
        $client->Direction_2_Contact = $request->Direction_2_Contact;
        $client->Direction_3_Nom_et_Prenoms = $request->Direction_3_Nom_et_Prenoms;
        $client->Direction_3_Contact = $request->Direction_3_Contact;
        $client->Adresse = $request->Adresse;
        $client->Ville = $request->Ville;
        $client->Commune = $request->Commune;
        $client->Quartier = $request->Quartier;
        $client->Rue = $request->Rue;
        $client->Zone = $request->Zone;
        $client->Autre = $request->Autre;
        
        $client->save();
        return back()->withSuccess('success', 'Client ajouter avec succès');
    }

    public function edit($id)
    {
        $client = Client::where('id', $id)->first();
        return view('clients.edit', ['client' => $client]);
    }

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id); // Récupère le client ou renvoie 404
        $request->validate([
        'Nom_Société' => 'required|string|unique:clients,Nom_Société,' . $client->id,
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Changer en nullable si l'image n'est pas obligatoire
        'Telephone' => 'required|string|size:10|unique:clients,Telephone,' . $client->id,
        'Cellulaire' => 'required|string|size:10|unique:clients,Cellulaire,' . $client->id,
        'Email' => 'nullable|email',
        'Compte_contribuable' => 'required|string|regex:/^\d{7}-[A-Z]$/|unique:clients,Compte_contribuable,' . $client->id,
        'RCCM' => 'nullable|string',
        'Direction_1_Nom_et_Prenoms' => 'required|string|unique:clients,Direction_1_Nom_et_Prenoms,' . $client->id,
        'Direction_1_Contact' => 'required|string|size:10|unique:clients,Direction_1_Contact,' . $client->id,
        'Direction_2_Nom_et_Prenoms' => 'nullable|string|unique:clients,Direction_2_Nom_et_Prenoms,' . $client->id,
        'Direction_2_Contact' => 'nullable|string|size:10|unique:clients,Direction_2_Contact,' . $client->id,
        'Direction_3_Nom_et_Prenoms' => 'nullable|string',
        'Direction_3_Contact' => 'nullable|string|size:10',
        'Adresse' => 'nullable|string',
        'Ville' => 'required|string',
        'Commune' => 'required|string',
        'Quartier' => 'required|string',
        'Rue' => 'required|string',
        'Zone' => 'required|string',
        'Autre' => 'nullable|string',
        ]);

        if(isset($request->image)){
            
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('clients'), $imageName);
            $client->image = $imageName; 
        }
        
        // Création d'un nouveau client
        $client->Nom_Société = $request->Nom_Société;
        $client->image = $imageName; 
        $client->Telephone = $request->Telephone;
        $client->Cellulaire = $request->Cellulaire;
        $client->Email = $request->Email;
        $client->Compte_contribuable = $request->Compte_contribuable;
        $client->RCCM = $request->RCCM;
        $client->Direction_1_Nom_et_Prenoms = $request->Direction_1_Nom_et_Prenoms;
        $client->Direction_1_Contact = $request->Direction_1_Contact;
        $client->Direction_2_Nom_et_Prenoms = $request->Direction_2_Nom_et_Prenoms;
        $client->Direction_2_Contact = $request->Direction_2_Contact;
        $client->Direction_3_Nom_et_Prenoms = $request->Direction_3_Nom_et_Prenoms;
        $client->Direction_3_Contact = $request->Direction_3_Contact;
        $client->Adresse = $request->Adresse;
        $client->Ville = $request->Ville;
        $client->Commune = $request->Commune;
        $client->Quartier = $request->Quartier;
        $client->Rue = $request->Rue;
        $client->Zone = $request->Zone;
        $client->Autre = $request->Autre;
        
        $client->save();
        return back()->withSuccess('success', 'Client ajouter avec succès');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        client::truncate();
        return back()->withSuccess('success', 'Client supprimer avec sucees');
    }
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.show', ['client' => $client]);
    }

    public function search()
    {
        // Récupérer les valeurs de recherche à partir des inputs
        $search_text = $_GET['query'] ?? '';
        $zone_text = $_GET['zone'] ?? '';
        $ville_text = $_GET['ville'] ?? '';
        
        // Filtrer les clients en fonction des critères indépendants
        $clients = Client::when($search_text, function ($query) use ($search_text) {
                return $query->where('Compte_contribuable', 'like', '%' . $search_text . '%');
            })
            ->when($zone_text, function ($query) use ($zone_text) {
                return $query->where('Zone', 'like', '%' . $zone_text . '%');
            })
            ->when($ville_text, function ($query) use ($ville_text) {
                return $query->where('Ville', 'like', '%' . $ville_text . '%');
            })
            ->get();
    
        // Vérifie si des clients sont trouvés
        if ($clients->isEmpty()) {
            // Message indiquant qu'aucun client n'a été trouvé
            $message = 'Aucun client trouvé avec les critères fournis.';
            return view('clients.search', compact('clients', 'message'));
        }
    
        // Retourner la vue avec les clients trouvés
        return view('clients.search', compact('clients'))->withQuery($search_text);
    }
    
    
    

    
}