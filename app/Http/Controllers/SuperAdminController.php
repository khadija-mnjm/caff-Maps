<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuperAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
class SuperAdminController extends Controller
{
    
    public function index()
    {
        return view('SuperAdmin.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'emailS' => 'required|email',
            'mot_de_passeS' => 'required',
        ]);

        $superadmin = SuperAdmin::where('emailS', $request->input('emailS'))->first();

        if ($superadmin && Hash::check($request->input('mot_de_passeS'), $superadmin->mot_de_passeS)) {
            // Authentification réussie, enregistrer l'utilisateur en session
            session(['superadmin' => $superadmin]);

            // Rediriger vers le tableau de bord ou une autre page appropriée
            return redirect()->route('dashboard');
        }
        return redirect()->back()->withErrors(['emailS' => 'Eroor de email ou password '])->withInput($request->only('emailS'));
    }
    public function dashboard(){
        return view('SuperAdmin.dashboard');
    }
}
