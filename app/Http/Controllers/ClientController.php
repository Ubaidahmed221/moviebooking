<?php

namespace App\Http\Controllers;

use App\Models\clientuser;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function index(){
        $clint =  clientuser::all();
        return view('dashboardviews.clientuser.index',compact('clint'));
    }

    function insart(){

        return view('dashboardviews.clientuser.insart');
    }
    function store(Request $req){
        $req->validate([
            'cname' =>'required | max:50',
            'cemail' => 'required',
            'cpass' => 'required',
            'cphone' => 'required',
            'caddres' => 'required'
        ]);
        $client =  new clientuser();

        $client['cname'] = $req['cname'];
        $client['email'] = $req['cemail'];
        $client['password'] = $req['cpass'];
        $client['phone'] = $req['cphone'];
        $client['address'] = $req['caddres'];

        $client->save();

        return redirect('/dashboards/client');
    }

    function edit($id){
         $cli = clientuser::find($id);

         if($cli != null){
            return view('dashboardviews.clientuser.edit',compact('cli'));

         }

    }

    function update($id,Request $req){
       $client =  clientuser::find($id);

       if($client != null){
        $client['cname'] = $req['cname'];
        $client['email'] = $req['cemail'];
        $client['password'] = $req['cpass'];
        $client['phone'] = $req['cphone'];
        $client['address'] = $req['caddres'];

        $client->save();

        return redirect('/dashboards/client');
       }

    }

    function delet($id){
        $client =  clientuser::find($id);

        if($client != null){
            $client->delete();
            
            return redirect('/dashboards/client');

        }


    }
}
