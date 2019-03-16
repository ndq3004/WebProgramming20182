<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Hash;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    public function postSingin(Request $request)
    {
    $validatedData = $request->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
        'confirmPassword' => 'required|same:password',
    ],[
        'firstname'=>'Vui lòng nhập tên đăng nhập',
        'lastname'=>'Vui lòng nhập tên đăng nhập',
        'email.required'=>'Vui lòng nhập email',
        'email.email'=>'Không đúng định dạng email',
        'email.unique'=>'Email đã có người sử dụng',
        'password.required'=>'Vui lòng nhập mật khẩu',
        'password.min'=>'Mật khẩu ít nhất 6 ký tự',
        'confirmpassword.required'=>'Vui lòng nhập lại mật khẩu',
        'confirmpassword.same'=>'Mật khẩu không giống nhau'

    ]);
    $user = new User();
    $user->firstname=$request->firstname;
    $user->lastname=$request->lastname; 
    $user->email=$request->email;
    $user->password=Hash::make($request->password);
    $user->save();
    return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }
}
