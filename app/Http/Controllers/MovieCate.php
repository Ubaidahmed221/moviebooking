<?php

namespace App\Http\Controllers;

use App\Models\MovieCat;
use Illuminate\Http\Request;




class MovieCate extends Controller
{
    function index(){
        $cat = MovieCat::all();
        return view('dashboardviews.moviecate.index')->with('cat',$cat);
    }
    function insart(){
        return view('dashboardviews.moviecate.insart');
    }

    function store(Request $req){
        $req->validate([
            'mname' => 'required | max : 50',
        ]);
        $mcat = new MovieCat;
        $mcat->moviecatename = $req['mname'];
        $mcat->save();
        return redirect('/dashboards/moviecate');
    }

    function  edit($id){
        $cat = MovieCat::find($id);

        if($cat != null){

            return view('dashboardviews.moviecate.edit')->with('cat',$cat);
        }

        return redirect('dashboardviews/moviecate');
    }
    function update($id,Request $req){

        $cat = MovieCat::find($id);

        if($cat != null){

        $cat->moviecatename = $req['mname'];
        $cat->save();
        return redirect('/dashboards/moviecate');


        }

        return redirect('dashboardviews/moviecate');
    }

    function delet($id){
        $cat = MovieCat::find($id);

        if($cat != null){

            $cat->delete();
            return redirect('/dashboards/moviecate');

        }
        return redirect('/dashboards/moviecate');


    }

}
