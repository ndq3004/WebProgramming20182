<?php

namespace App\Http\Controllers;

use App\User;
use App\admin;
use App\roles;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use JWTAuthException;
use App\Course;
use Illuminate\Support\Facades\DB;


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
        //console log==========
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
            $out->writeln($request->email);
        //===================
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
        // return view('Users', ['users'=>$user]);
    }
    
    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:3|max:32'
        ],[
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Email không đúng định dạng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Password không nhỏ hơn 3 kí tự',
            'password.max'=>'Password quá lớn'
        ]);
        //Lấy thông tin so sánh với DB
        $credentials = $request->only('email', 'password');
        $token = null;

        try {
           if (!$token = JWTAuth::attempt($credentials)) {
               $error = ['reason' => 'invalid_email_or_password','status' => 422];
            return redirect('login')->with('notice','Sai tên tài khoản hoặc mật khẩu!');
           }
        } catch (JWTAuthException $e) {
            return redirect('login')->with('notice','Lỗi đăng nhập!');
        }
        return response()->json(compact('token'));
        return redirect('home')->with(['flash_level'=>'success','flash_message'=>'Sửa User thành công']);
    }

    public function getUserInfo(Request $request){
        // return "null"; 
        // return $request->header('token');
        $user = JWTAuth::toUser($request->header('token'));
        // $user = $this->jwt->User();
        return response()->json($user);
    }

    public function getUserProfile(Request $request){
        $user = JWTAuth::toUser($request->header('token'));
        return response()->json(['user'=>$user]);
    }

    public function updateProfile(Request $request)
    {
        $user = JWTAuth::toUser($request->header('token'));
        try{
            $user->phone = $request->phone;
            $user->name = $request->name;
            $user->address = $request->address;
            $user->save();
        }
        catch(Exception $e){
            return "update error";
        }
        return "success"; 
    }

    public function cources(){

    //     $cources = cources::paginate(10);

    //     return view('Courses',['courses'=>$courses]);
    }
    public function Courses(){
        return view('Courses');
    }


    

    public function GetRole(){
        // $role = DB::select('select * from role where role_id=1 ');
        $ro = admin::find('1')->roles()->get();
        return $ro;
    }
   

}
