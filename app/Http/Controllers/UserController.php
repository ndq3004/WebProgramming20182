<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use JWTAuthException;


class UserController extends Controller
{
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }
   
    public function register(Request $request){
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
            $out->writeln($request->name);
        $user = $this->user->create([
          'name' => $request->get('name'),
          'email' => $request->get('email'),
          'password' => bcrypt($request->get('password'))
        ]);

        return response()->json([
            'status'=> 200,
            'message'=> 'User created successfully',
            'data'=>$user
        ]);
    }
    
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        $token = null;
        try {
           if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['invalid_email_or_password'], 422);
           }
        } catch (JWTAuthException $e) {
            return response()->json(['failed_to_create_token'], 500);
        }
        return response()->json(compact('token'));
    }

    public function getUserInfo(Request $request){
        $user = JWTAuth::toUser($request->token);
        return response()->json(['result' => $user]);
    }

    public function cources(){

        $cources = cources::paginate(10);

        return view('Courses',['courses'=>$courses]);
    }

}
