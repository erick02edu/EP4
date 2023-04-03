<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    protected $redirectTo = '/Inicio';

    public function index(){

        return response()->json([
            "message"=>"show usuarios"
        ]);
    }

    public function store(Request $request){
        $usuario=new Usuario();

        $usuario->nombre=$request->nombre;
        $usuario->apellido=$request->apellido;
        $usuario->email=$request->email;
        $usuario->password=$request->password;

        $usuario->save();


        
        return redirect('index');

    }




    public function update(Request $request,$id){

        $usuario=Usuario::findOrFail($request->id);

        $usuario->nombre=$request->nombre;
        $usuario->apellido=$request->apellido;
        $usuario->email=$request->email;
        $usuario->password=$request->password;


        $usuario->save();

        return redirect('api/Inicio');
    }

    public function destroy($id){
        Usuario::destroy($id);

        $Verproducts=Usuario::all();

        /*
        if (Auth::check()){
            echo 'Autenticado';
        }
        else{
            echo 'No Autenticado';
        }
        */



        return redirect('api/Inicio');

    }

    public function login(Request $request){
        
        $credentials=[
            "email"=>$request->email,
            "password"=>$request->password,
        ];

        

        if(Auth::attempt($credentials)){
            
            $user=Auth::user();
            $token=$user->createToken('token')->plainTextToken;
            $cookie=cookie('cookie_token',$token, 60 * 24 );
            //return response(["token"=>$token],Response::HTTP_OK)->withoutCookie($cookie);
            //return redirect('api/Inicio')->with("token",$token);

            

            $VerUsers=Usuario::all();

            return view('Inicio')->with(
                'datos' , $VerUsers
            );

            //return view('Inicio')->with("datos",$VerUsers);;

            
        }
        else{
            $Fallo=true;
            //return response(["message"=>"credenciales invalidas",Response::HTTP_UNAUTHORIZED]);
            return redirect('index')->with("Fallo",$Fallo);
        }
        
    }

    public function userProfile(){
        return view('Inicio');
    }


    public function logout(Request $request){
        
        Auth::logout();

        $request->session()->invalidate();
        
        return redirect('Index');
        
    }

}
