<?php

namespace App\Http\Controllers;

use App\User;
use App\admin;
use App\roles;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\loginRequest;
use JWTAuth;
use JWTAuthException;
use App\Course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;
use File;

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
    public function loginAdmin(Request $request){
        $email=$request->email;

        $password=$request->get('password');
        if($email=="admin@admin"){
            if ($password=="admin") {
                return redirect('admin/index');
            }
            else {
                return redirect('login')->with('notice','Sai tên tài khoản hoặc mật khẩu!');
                // return "error";
                // return view('login')->with('notice','Sai tên tài khoản hoặc mật khẩu!');
            }
        }
        else {
            return redirect('login')->with('notice','Sai tên tài khoản hoặc mật khẩu!');
            // return view('login')->with('notice','Sai tên tài khoản hoặc mật khẩu!');
        }
    }
    
    public function login(loginRequest $request){
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
               return response()->json($error);
            // return redirect('login')->with('notice','Sai tên tài khoản hoặc mật khẩu!');
           }
        } catch (JWTAuthException $e) {
            return response()->json(['reason' => 'login error']);
            // return redirect('login')->with('notice','Lỗi đăng nhập!');
        }
        return response()->json(compact('token'));

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
        $course = DB::select("select * from courses inner join user_course  
                                on courses.course_id=user_course.course_id where user_course.user_id=?", [$user->user_id]);
        return response()->json(['user'=>$user, 'course'=>$course]);
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

    public function updateRegisterCourse(Request $request){
        $user = JWTAuth::toUser($request->header('token'));
        try{
            //check if user registered this course
            $check = DB::table('user_course')->where(['user_id'=>$user->user_id],
                                                            ['course_id'=>$request->courseRegister])->exists();
            if($check == true) {
                return response()->json(["message"=>"user already register", "status"=>"200"]);
            }
            
            //update user_course table
            DB::table('user_course')->insert([
                'user_id'=>$user->user_id,
                'course_id'=>$request->courseRegister
            ]);
            //update user credit
            $user->credit -= $request->payPrice;
            $user->save();
            
            return response()->json(["message"=>"update success", "status"=>"200"]);
        }
        catch(Exception $e){
            return response()->json(["message"=>"update fail", "status"=>"422"]);
        }
    }

    public function checkIfUserRegisteredCourse(Request $request, $course_id){
        $user = JWTAuth::toUser($request->header('token'));
            //check if user registered this course
            $check = DB::table('user_course')->where(['user_id'=>$user->user_id],
                                                            ['course_id'=>$course_id])->exists();
            $checkStr = ($check == true) ? 'true' : 'false';
            $message = ($check == true) ? 'user has already registered this course! <br>
            Click Accept to continue!' : 'Click Accept to register this course!';
            return response()->json(['message'=>$message, "status"=>$checkStr]);
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
