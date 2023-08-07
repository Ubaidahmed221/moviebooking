<?php

namespace App\Http\Controllers;

use App\Models\Cinemas;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\str;


class theaterController extends Controller
{
    function index(){
        $mth = Cinemas::all();
        
        return view('dashboardviews.theaterview.index',compact('mth'));
    }
    function insart(){
        return view('dashboardviews.theaterview.insart');
    }
    function store(Request $req){

         $req->validate([
            'tname' => 'required | max: 50',
            'caddres' => 'required',
            'cimgs'  => 'required',
            'tprice' => 'required '
           
         ]);
         $img = $req['cimgs'];
         $name = $img->getClientOriginalName();
         $name = Str::random(7) . '_' .$name;
         $img->move('cinemasimg', $name);

         $thm = new Cinemas();

         $thm['cname'] = $req['tname'];
         $thm['caddres'] = $req['caddres'];
         $thm['cphone'] = $req['tprice'];
         $thm['cimg'] = $name;


         $thm->save();

          return redirect('/dashboards/theater');

    }

    function edit($id){

     $mthe = Cinemas::find($id);
    

    if($mthe != null){

        return view('dashboardviews.theaterview.edit',compact('mthe'));
    }

    }

    function update($id,Request $req){

        $mth =  Cinemas::find($id);

        if($mth != null){

            if($req['cimg'] != null){

                $img = $req['cimgs']; 
                $name = $img->getClientOriginalName();
                $name = Str::random(7) . '_' . $name;
                $img->move('cinemasimg', $name);
                unlink('cinemasimg'. $req->oldimg);

            }else{
                $name = $req->oldimg;
            }


            $mth['cname'] = $req['tname'];
            $mth['caddres'] = $req['caddres'];
            $mth['cphone'] = $req['tprice'];
            $mth['cimg'] = $name;

            $mth->save();

            return redirect('/dashboards/theater');
        }

    }

    function delet($id){
        $tdel =  Cinemas::find($id);
        
        if($tdel != null){
            $tdel->delete();

            return redirect('/dashboards/theater');
            
        }
        return redirect('/dashboards/theater');

    }

}
