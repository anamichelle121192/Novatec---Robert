<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

// BASE DE DATOS
use App\Models\HecUsuario;

class Auth extends Component
{

    public $user = '';
 
    public $password = '';

    public $successMessage = '';
    public $icon = '';
    public $class = '';
 
    public function save()
    {
        $validated = $this->validate(
            [ 
                'user' => 'required',
                'password' => 'required',
            ],
            $this->messages()
        );

        $clave = '$2b'.hash('md5',hash('crc32',md5(sha1($this->password)))).md5('H2').hash('sha1',crc32($this->password));
        // dd($clave);

        $this->successMessage = 'Iniciando Sesión';
        $this->icon = 'spinner-border spinner-border-sm';
        $this->class = 'alert-info';

        $usu = HecUsuario::where('usua_user',$this->user)->where('usua_clave',$clave)->first();

        if($usu){

            $this->successMessage = 'Acceso permitido';
            $this->icon = '';
            $this->class = 'alert-success';

            $toke = Str::random(15).md5(crc32($usu->id_usua).'/°'.hash('sha1',crc32(Str::random(50)))).Str::random(20); $up = HecUsuario::find($usu->id_usua); $up->usua_tok = $toke; $up->save();

            $dat = [
                'id' => $usu->id_usua, // ID USUARIO
                'nom' => $usu->usua_nomb, // NOMBRE USUARIO
                'usu' => $usu->usua_user, // USUARIO
                'tok' => $toke, // TOKEN DE ACCESO
                'per' => $usu->id_per, // ID DE PERSONAL
                'car' => 'Administrador' // CARGO DEL PERSONAL
            ];

            // dd($dat);

            session(['user' => $dat]);
            return redirect('/home');

        }else{

            $this->successMessage = 'Usuario o clave incorrecta';
            $this->icon = '';
            $this->class = 'alert-danger';

        }
 
        // Post::create($validated);

        
 
        // return redirect()->to('/posts');
    }

    protected function messages()
    {
        return [
            'user.required' => 'El usuario es obligatorio.',
            'password.required' => 'Debe de ingresar la clave de usuario',
        ];
    }

    public function render()
    {
        return view('Login.auth');
    }
    
}
