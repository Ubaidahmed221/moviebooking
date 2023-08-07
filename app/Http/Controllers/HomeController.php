<?php

namespace App\Http\Controllers;

use App\Models\Cinemas;
use App\Models\clientuser;
use App\Models\Movie;
use App\Models\seat;
use App\Models\ShowTime;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function main(Request $req)
   {
      if($req->movie){
         session()->put('movie',$req->movie);
      }
      if($req->cinemas){
         session()->put('cinemas',$req->cinemas);
      }

      $mth = Cinemas::all();
      // $movie = Movie::all();
      $show1 = ShowTime::all();

      $show = DB::select("SELECT * FROM show_times INNER JOIN movies ON show_times.mid = movies.mid INNER JOIN cinemas ON show_times.cid = cinemas.cid");
      return view('index', compact('show', 'mth'));

      session()->put('date', $show1[0]->date);
      session()->put('cine', $mth[0]->cid);
   }

   function news()
   {
      return view('newspage');
   }
   function about()
   {
      return view('AboutUs');
   }
   function showes()
   {
      return view('nowShowes');
   }
   function contact()
   {
      return view('contact');
   }
   function ticketes()
   {
      return view('ticketinfo');
   }

   public function settime(Request $req){

      session()->put('date',$req->date);

      return redirect('/seats');
   }

   function seat()
   {

      $seat  = Db::select("select * from seats where date = ?",[session()->get('date')]);
      // $seat  = Db::select('select * from seats');
      // $seat  = Db::select("SELECT * FROM `show_times` WHERE show_date = ?",[session()->get('date')]);
      if($seat){

         $seat  = $seat[0];
         return view('seat', compact('seat'));
      }

      Db::insert("insert into seats(cid,c_id,date) values(?,?,?)",[session()->get('cid'),1,session()->get('date')]);
      
      $seat  = Db::select("select * from seats where date = ?",[session()->get('date')]);
      $seat = $seat[0];
      return view('seat',compact('seat'));

   }

   function store(Request $req)
   {
      $req->validate([
         'cinemas' => 'required',
         'movie' => 'required',
         'date' => 'required'
      ]);
      $cinmas = $req['cinemas'];
      $movie = $req['movie'];
      $date = $req['date'];

      return view('seat');
   }

   function bookingseat(Request $req)
   {


      // print_r($req->toArray());

      $seat1 =  $req->seat1 > 0 ? $req->seat1 : 0;
      $seat2 =  $req->seat2 > 0  ? $req->seat2 : 0;
      $seat3 =  $req->seat3 > 0  ? $req->seat3 : 0;
      $seat4 =  $req->seat4 > 0  ? $req->seat4 : 0;
      $seat5 =  $req->seat5 > 0  ? $req->seat5 : 0;
      $seat6 =  $req->seat6  > 0  ? $req->seat6 : 0;
      $seat7 =  $req->seat7 > 0  ? $req->seat7 : 0;
      $seat8 =  $req->seat8 > 0  ? $req->seat8 : 0;
      $seat9 =  $req->seat9 > 0 ? $req->seat9 : 0;
      $seat10 = $req->seat10 > 0  ? $req->seat10 : 0;

      // $seat = "select * from seats where date =  2023-03-20";
      $seat = DB::select("select * from seats where date = ?",[session()->get('date')]);
      if ($seat) {
         DB::update('UPDATE seats SET seat1=?,seat2=?,seat3=?,seat4=?,seat5=?,seat6=?,seat7=?,seat8=?,seat9=?,seat10=? where date=?',[$seat1,$seat2,$seat3,$seat4,$seat5,$seat6,$seat7,$seat8,$seat9,$seat10,session()->get('date')]);
        
      } else {

         // Db::insert("INSERT INTO seats(seat1, seat2, seat3,seat4,seat5,seat6,seat7,seat8,seat9, seat10,cid,c_id,date) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)", [
         //    $seat1, $seat2, $seat3, $seat4, $seat5, $seat6, $seat7, $seat8, $seat9, $seat10,
         //    session()->get('cid'), session()->get('cine'),session()->get('date')
         // ]);
         Db::insert("INSERT INTO seats(seat1, seat2, seat3,seat4,seat5,seat6,seat7,seat8,seat9, seat10,cid,c_id,date) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)", [
            $seat1, $seat2, $seat3, $seat4, $seat5, $seat6, $seat7, $seat8, $seat9, $seat10,
            session()->get('cid'),1,session()->get('date')
         ]);
      }

      $movie = Db::select("select * from movies where mid = ?",[session()->get('movie')]);
      $cinemas = Db::select("select * from cinemas where cid = ?",[session()->get('cinemas')]);
      $count = seat::where('seatid','1')->count();
      
      return view('bookin',compact('movie','cinemas','count'));
      // print_r($req->toArray());

   }
  

   function register()
   {

      return view('register');
   }
   function registerstore(Request $req)
   {
      $req->validate([
         'fname' => 'required',
         'email' => 'required',
         'pass' => 'required',
         'phone' => 'required'

      ]);
      $client  =  new clientuser();

      $client->cname  =  $req['fname'];
      $client->email   =  $req['email'];
      $client->password  =  $req['pass'];
      $client->phone  =  $req['phone'];

      $client->save();

      return redirect('/login');
   }

   function login()
   {
      // $user =  session()->get('user_email');
      return view('login');
   }
   function loginstore(Request $req)
   {
      $req->validate([

         'email' => 'required | email | max:35',
         'pass' => 'required | max:10'
      ]);
      $login = DB::select("SELECT * FROM `clientusers` WHERE `email` = '$req->email' AND `password` = '$req->pass'");

      if ($login) {
         session()->put('cid', $login[0]->cid);
         session()->put('email', $req->email);
         session()->put('role', $login[0]->role);
         // session()->put('name',$login[0]->cname); 
         return redirect('/seats');
      }
      return redirect('/login');
   }
   function logout()
   {
      session()->forget('email');
      session()->forget('role');


      return redirect('/');
   }

   function adminlogin()
   {
      return view('adminlogin');
   }

   function adminstore(Request $req)
   {
      $req->validate([

         'email' => 'required | email | max:35',
         'pass' => 'required | max:10'
      ]);
      $adlog = DB::select(
         "SELECT * FROM `users` WHERE email = ? AND password = ?",
         [$req->email, md5($req->pass)]
      );

      if (isset($adlog)) {
         session()->put('email', $req->email);
         session()->put('role', $adlog[0]->role);

         return redirect('/dashboards/moviecate');
      } else {

         // session()->flash('status','email and password incorrect');
         return redirect('/login');
      }

      return redirect('/admin/login');
   }
   function adminlogout()
   {
      session()->forget('email');
      session()->forget('role');

      redirect('/');
   }

   function tickets(Request $req){
      
      echo "<script>
      alert('ticket movie Successfully')
      
      </script>";
      return redirect('/');




   }
}
