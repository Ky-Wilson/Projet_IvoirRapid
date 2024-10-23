<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'abreviation' => ['required', 'string', 'max:255'],
            // 'Telephone' => ['required', 'string', 'unique:users', 'size:10'],
            // 'Cellulaire' => ['required', 'string', 'unique:users', 'size:10'],
            // 'Compte_contribuable' => ['required', 'string', 'unique:users', 'size:9'],
            // 'RCCM' => ['nullable', 'string'],
            // 'Direction_1_Nom_et_Prenoms' => ['required', 'string', 'unique:users'],
            // 'Direction_1_Contact' => ['required', 'string', 'unique:users'],
            // 'Adresse' => ['nullable', 'string'],
            // 'Commune' => ['required', 'string'],
            // 'Quartier' => ['required', 'string'],
            // 'Rue' => ['required', 'string'],
            // 'Zone' => ['nullable', 'string'],
            // 'Autre' => ['nullable', 'string'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            // 'abreviation' => $data['abreviation'],
            // 'Telephone' => $data['Telephone'],
            // 'Cellulaire' => $data['Cellulaire'],
            // 'Compte_contribuable' => $data['Compte_contribuable'],
            // 'RCCM' => $data['RCCM'],
            // 'Direction_1_Nom_et_Prenoms' => $data['Direction_1_Nom_et_Prenoms'],
            // 'Direction_1_Contact' => $data['Direction_1_Contact'],
            // 'Adresse' => $data['Adresse'],
            // 'Commune' => $data['Commune'],
            // 'Quartier' => $data['Quartier'],
            // 'Rue' => $data['Rue'],
            // 'Zone' => $data['Zone'],
            // 'Autre' => $data['Autre'],
        ]);
    }
}
