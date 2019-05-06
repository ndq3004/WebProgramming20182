<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
}

<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\;
use App\LoaiTin;
use App\BaiViet;
use App\User;
use App\Slide;
class PageController extends Controller
{
    //

//   function __construct(){
 
//    $slide =  Slide::all();

//   $theloai = TheLoai::all();
//   view()->share('theloai',$theloai);
//   view()->share('slide',$slide);
//   }
 
// function loaitin($id){
//   $loaitin = LoaiTin::find($id);
//   $baiviet = BaiViet::where('idLoaiTin',$id)->paginate(5);
 
//   if(Auth::check()){
//     $nguoidung = Auth::user();
//   return view('page.giaodien.loaitin',['loaitin'=>$loaitin,'baiviet'=>$baiviet,'nguoidung'=>$nguoidung]);

//   }
//    else{
//      return view('page.giaodien.loaitin',['loaitin'=>$loaitin,'baiviet'=>$baiviet]);
//    }


// }
// function trangchu(){
//   if(Auth::check()){
//     $nguoidung = Auth::user();
//   return view('page.giaodien.trangchu',['nguoidung'=>$nguoidung]);

//   }else{
//     return view('page.giaodien.trangchu');
//   }
 
// }
// function lienhe(){
//     if(Auth::check()){
//     $nguoidung = Auth::user();
//   return view('page.giaodien.lienhe',['nguoidung'=>$nguoidung]);

//   }else{
//     return view('page.giaodien.lienhe');
//   }
// }
// function gioithieu(){
//   if(Auth::check()){
//     $nguoidung = Auth::user();
//   return view('page.giaodien.gioithieu',['nguoidung'=>$nguoidung]);

//   }
//   else{
//     return view('page.giaodien.gioithieu');
//   }
   
// }
//   function getDangky(){
     
//          return view('page.giaodien.dangky');
//      }

//    function postDangky(Request $request){
//            $this->validate($request,
//            	[

//             'name'=>'required|min:3',
//             'email'=>'required|email|unique:users,email',
//             'password'=>'required|min:6|max:32',
//             'passwordAgain'=>'required|same:password'
//            	],
//            	[
//              'name.required'=>'Bạn chưa nhập họ và tên',
//              'name.min'=>'Tên phải có từ 3 kí tự trở nên',
//              'email.required'=>'Bạn chưa nhập email',
//              'email.email'=>'Bạn chưa nhập đúng định dạng email',
//              'email.unique'=>'Email đã tồn tại',
//              'password.required'=>'Bạn chưa nhập mật khẩu',
//              'password.min'=>'Mật khẩu phải từ 6 đến 32 kí tự',
//              'password.max'=>'Mật khẩu có độ dài từ 6 đến 32 kí tự',
//              'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
//              'passwordAgain.same'=>'Nhập lại mật khẩu không trùng khớp'


//            	]);

//             $user = new User;
//             $user->name  = $request->name;
//             $user->email= $request->email;
//             $user->password = bcrypt($request->password);
//             $user->level = 0;
//             $user->save();

//             return redirect('dangky')->with('thongbao','Chúc mừng bạn đã đăng ký thành công! Chào mừng bạn đến với hệ thống');
//     }

//      function getDangnhap(){
//     	return view('page.giaodien.dangnhap');
//     }

//    function postDangnhap(Request $request){

//      $this->validate($request,
//         [
//             'email'=>'required',
//             'password'=>'required|min:6|max:64'

//                 ],
//                 [
//                  'email.required'=>'Bạn chưa nhập email',
//                  'password.required'=>'Bạn chưa nhập mật khẩu',
//                  'password.min'=>'Mật khẩu phải có độ dài từ 6 đến 64 kí tự',
//                  'password.max'=>'Mật khẩu chỉ nằm trong khoảng từ 6 đến 64 kí tự'


//                 ]);
          
//               if(Auth::attempt(['email'=>$request->email,'password'=>$request->password, 'level'=>0])){
              
                   
                         
//                        return redirect('trangchu');

//               }

//               else
//               {

//                 return redirect('dangnhap')->with('thongbao','Đăng nhập không thành công! Tên tài khoản hoặc mật khẩu không đúng!');
                      
                
//               }


// }

//  function getDangxuat(){
//   Auth::logout();
//   return redirect('trangchu');
// }

// function baiviet($id){
//   if(Auth::check()){
//   $nguoidung = Auth::user();
//   $baiviet = BaiViet::find($id);
//   $baivietlienquan = BaiViet::where('idLoaiTin',$baiviet->idLoaiTin)->take(5)->get();

//   return view('page.giaodien.chitiet',['baiviet'=>$baiviet,'baivietlienquan'=>$baivietlienquan,'nguoidung'=>$nguoidung]);
// }else{
//   return redirect('dangnhap');
// }
// }

// function timkiem(Request $request){
//    if(Auth::check()){
//   $nguoidung = Auth::user();
//   $tukhoa = $request ->tukhoa;
//   $baiviet = BaiViet::where('tieude','like',"%$tukhoa%")->orWhere('noidung','like',"%$tukhoa")->take(4)->paginate(5);
//   return view('page.giaodien.timkiem',['baiviet'=>$baiviet, 'tukhoa'=>$tukhoa,'nguoidung'=>$nguoidung]);
// }
// }
function thongtin(){
          if(Auth::check()){
    $user = Auth::user();
    return return File::get(public_path() . '/views/userprofile.html');

}

    }
}