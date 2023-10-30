<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    
        
        Auth::login($user);
    
        
        return redirect('/userLogin');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    
        $credentials = $request->only('email', 'password');
    
       
        if (Auth::attempt($credentials)) {
            
            return redirect('/userLogin');
        }
    
        return redirect('/login')->with('loginError', 'Credenciais inválidas.');
    }

    public function logout()
    {
        Auth::logout();

        
        return redirect('/');
    }

    public function userLogin()
    {
        $user = Auth::user();
        if (Auth::check()) {
            $user = Auth::user();
            return view('userLogin', ['user' => $user]);
        }
    
        return redirect('/login');
    }

    public function updateuserLogin(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|string|min:8|confirmed',
        ]);
    
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
    
        
        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }
    
        $user->save();
    
        return redirect('/userLogin')->with('sucesso', 'Perfil atualizado com sucesso.');
    }
}
