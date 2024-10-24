<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client; // Assurez-vous que le modèle Client est importé
use Illuminate\Support\Facades\Session;

class ClientAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.client_login'); // Assurez-vous d'avoir cette vue
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'login' => 'required|string', // Champ pour l'e-mail ou le téléphone
            'password' => 'required|string', // Champ pour le numéro de téléphone
        ]);

        // Vérifiez si le client existe avec l'e-mail ou le téléphone
        $client = Client::where('Email', $request->login)
                        ->orWhere('Telephone', $request->login)
                        ->first();

        if (!$client) {
            return back()->withErrors(['login' => 'Ce client n\'existe pas.']);
        }

        // Vérifiez le "mot de passe" qui est le numéro de téléphone ici
        if ($client->Telephone === $request->password) {
            // Authentification réussie - stocker l'ID du client dans la session
            Session::put('client_id', $client->id);

            return redirect('/home')->with('status', 'Connexion réussie en tant que client.');
        }

        return back()->withErrors(['login' => 'Les identifiants fournis ne correspondent pas à nos enregistrements.']);
    }

    public function logout(Request $request)
    {
        // Supprimer l'ID du client de la session
        Session::forget('client_id');
        return redirect('/')->with('message', 'Déconnecté avec succès.');
    }
}
