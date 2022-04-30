<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public static function register(){
        return view('register');
    }

    public static function login(){
        return view('login');
    }

    public static function profile(){
        return view('profile');
    }

    public static function registerForm(Request $request){
        $request->validate([
            'firstName' => 'required|max:25|alpha_num',
            'middleName' => 'nullable|max:25|alpha_num',
            'lastName' => 'required|max:25|alpha',
            'gender' => 'required',
            'email' => 'required|email:rfc,dns',
            'role' => 'required',
            'password' => 'required|min:8|regex:/^(?=.*\d).+$/',
            'picture' => 'required|image|mimes:jpeg,jpg,png'
        ]);

        $file = $request->file('picture');
        $imgName = time().'_'.$file->getClientOriginalName();
        Storage::putFileAs('public/images', $file, $imgName);
        $imgPath = 'images/'.$imgName;

        $key = new User();
        $key->firstName = $request->firstName;
        if($request->middleName != null){
            $key->middleName = $request->middleName;
        }
        else{
            $key->middleName = " ";
        }
        $key->lastName = $request->lastName;
        $key->genderID = $request->gender;
        $key->email = $request->email;
        $key->roleID = $request->role;
        $key->password = bcrypt($request->password);
        $key->picture = $imgPath;
        $key->modifiedAt = Carbon::now();
        $key->modifiedBy = $request->firstName;
        $key->save();

        return redirect()->route('login');
    }

    public static function loginForm(Request $request){
        $credentials = ['email' => $request->email, 'password' => $request->password];

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('home');
        }
        else{
            return redirect()->route('login')->withErrors(['msg' => 'Wrong email or password!']);;
        }

    }


    // public function authenticate(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect()->intended('dashboard');
    //     }

    //     return back()->withErrors([
    //         return redirect()->route('login')->withErrors(['msg' => 'Wrong email or password!']);
    //     ]);
    // }

    // public function logout(Request $request)
    // {
    //     Auth::logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect('/logout');
    // }

    public static function logout(){
        Auth::logout();
        request()->session()->invalidate();

        return view('logoutSuccess');
    }

    public static function save(Request $request){
        $request->validate([
            'firstName' => 'required|max:25|alpha_num',
            'middleName' => 'nullable|max:25|alpha_num',
            'lastName' => 'required|max:25|alpha',
            'gender' => 'required',
            'email' => 'required|email:rfc,dns',
            'role' => 'required',
            'password' => 'required|min:8|regex:/^(?=.*\d).+$/',
            'picture' => 'image|mimes:jpg,png,jpeg,gif,svg'
        ]);


        $key = User::where('id', Auth::User()->id)->first();

        $file = $request->file('picture');

        if($file != null){
            Storage::delete(['public/'.$key->image]);

            $imageName = time().'_'.$file->getClientOriginalName();
            Storage::putFileAs('public/images', $file, $imageName);
            $imagePath = 'images/'.$imageName;

            $key->categoryImage = $imagePath;
        }
        $key->firstName = $request->firstName;
        if($request->middleName != null){
            $key->middleName = $request->middleName;
        }
        else{
            $key->middleName = " ";
        }
        $key->lastName = $request->lastName;
        $key->genderID = $request->gender;
        $key->email = $request->email;
        $key->roleID = $request->role;
        $key->password = bcrypt($request->password);
        $key->modifiedAt = Carbon::now();
        $key->modifiedBy = $request->firstName;
        $key->save();

        return redirect()->route('home');
    }

    public static function updateRole($id){
        $user = User::where('id', $id)->first();

        return view('updateRole')->with('user', $user);
    }

    public static function updateRoleForm($id, Request $request){
        $user = User::where('id', $id)->first();

        $user->roleID = $request->role;
        $user->modifiedBy = Auth::user()->firstName;
        $user->save();

        return redirect()->route('accountMaintenance');
    }

    public static function deleteUser($id){
        $user = User::where('id', $id)->first();

        $user->delete();

        return redirect()->back();
    }

}
