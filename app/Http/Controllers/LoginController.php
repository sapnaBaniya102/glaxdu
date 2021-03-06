<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin_user;

use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{

    public function index()
    {
        $register=Admin_user::paginate(8);
        return view('admin.register.index',compact('register'));
    }

    public function login(){
        return view('auth.login');
    }

     public function register(){

        return view('Admin.register');
    }

      public function save(Request $request){
        $request->validate([
            'name'=>'required',
             'email'=>'required|email',
              'password'=>'required|min:5|max:15',
        ]);

        // inserting data in databse
        $admin= new Admin_user;
        $admin->name= $request->name;
         $admin->email= $request->email;
          $admin->password= Hash::make($request->password) ;

          $save = $admin->save();


          if ($save) {
              return redirect('register/index');

          } else {
              return back()->with('fail', 'Something went wrong');
          }

      }

      public function check(Request $request){
        $request->validate([

             'email'=>'required|email',
              'password'=>'required|min:5|max:15',
        ]);

        // checking data in databse
     $userInfo =Admin_user::where('email', '=', $request->email)->first();
    if (!$userInfo) {
              return back()->with('fail', 'We do not recognize your email');

          } else {
              if (Hash::check($request->password, $userInfo->password)) {
                  $request->session()->put('LoggedUser', $userInfo->email);
                  return redirect('/admin/dashboard');
              }
              return back()->with('fail', 'Something went wrong');
          }

      }

      public function logout(){
         if (session()->has('LoggedUser')) {

             session()->pull('LoggedUser');

             return redirect('login');
         }
      }

      public function dashboard(){

          return view('admin.dashboard');
      }

      public function destroy(Admin_user $admin)
      {
           $admin->delete();
          return redirect('register/index')->with('delete', 'Deleted successfully');
      }
}
