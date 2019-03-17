<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function register(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = bcrypt($request->email);
        $user->password = bcrypt($request->password);
        $user->save();
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $out->writeln($user->email);
        return "success";
    }
		
}
