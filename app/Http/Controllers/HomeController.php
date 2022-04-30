<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function home(){
        $ebook = Ebook::all();

        return view('home')->with('ebook', $ebook);
    }

    public static function detail($id){
        $ebook = Ebook::where('id', $id)->get()->first();

        return view('bookDetail')->with('ebook', $ebook);
    }

    public static function rent($id){
        $ebook = Ebook::where('id', $id)->get()->first();

        $rent = new Order();
        $rent->accountID = Auth::User()->id;
        $rent->ebookID = $ebook->id;
        $rent->orderDate = Carbon::now();

        $rent->save();

        return redirect()->route('home');
    }

    public static function cart(){
        $order = Order::where('accountID', Auth::User()->id)->with('Ebook')->get();
        
        return view('cart')->with('order', $order);
    }

    public static function deleteCart($id){
        $order = Order::where('id', $id)->first();
        $order->delete();
        
        return redirect()->route('cart');
    }
    
    public static function submit(){
        Order::truncate();
        
        return view('submitDone');
    }

    public static function accountMaintenance(){
        $user = User::all();

        return view('accountMaintenance')->with('user', $user);
    }
}
