<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use JWTAuthException;
use App\Course;


class UserController extends Controller
{
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function viewRegister(){
     
        return view('register');
    }

    public function viewLogin(){
        return view('login');
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
               $res = json(['error' => ['reason' => 'invalid_email_or_password','status' => 422]]);
            // return response()->json(['reason' => 'invalid_email_or_password','status' => 422]);
            return redirect('login');
           }
        } catch (JWTAuthException $e) {
            // return response()->json(['error' => ['reason' => 'error!', 'status' => 500]]);
            return redirect('login');
        }
        // return response()->json(compact('token'));
        return redirect('login');
    }

    public function getUserInfo(Request $request){
        $user = JWTAuth::toUser($request->token);
        return response()->json(['result' => $user]);
    }

    public function cources(){

    //     $cources = cources::paginate(10);

    //     return view('Courses',['courses'=>$courses]);
    }
    public function Courses(){
        return view('Courses');
    }
   

}
