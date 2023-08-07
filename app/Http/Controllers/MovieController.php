<?php

namespace App\Http\Controllers;

use App\Models\Cinemas;
use App\Models\Movie;
use App\Models\MovieCat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;


class MovieController extends Controller
{
    function index(){
        // $mov = Movie::all();
 $mov = DB::select("SELECT * from movies INNER JOIN movie_cats on movies.mcid = movie_cats.mcid INNER JOIN cinemas ON movies.cid = cinemas.cid");


        return view('dashboardviews.movie.index',compact('mov'));
    }
    function insart(){
        $mcate = MovieCat::all();
        $cinemas = Cinemas::all();

        return view('dashboardviews.movie.insart',compact('mcate','cinemas'));
    }

    function store(Request $req){

        $req->validate([
            'mname' => 'required | max: 50',
            'mdes' => 'required | max: 250',
            'mimg' => 'required ', 
            'mvedio' => 'required',
            'mstart' => 'required',
            'mend' => 'required',
            'mcat' => 'required',
            'mtherather' => 'required'

        ]);

        $img = $req['mimg'];
        $name = $img->getClientOriginalName();
        $name = Str::random(7) . '_' .$name;
        $img->move('movieimg', $name);  

        $ved = $req['mvedio'];
        $vname = $ved->getClientOriginalName();
        $vname = str::random(5) . '_' . $vname;
        $ved->move('movietral',$vname);  

        $move = new Movie();

        $move['mtitle']  = $req['mname'];
        $move['mdesc']  = $req['mdes'];
        $move['mimg']  = $name;
        $move['mvedio']  = $vname;
        $move['mstart']  = $req['mstart'];
        $move['mend']  = $req['mend'];
        $move['mcid']  = $req['mcat'];
        $move['cid']  = $req['mtherather'];

        $move->save();

        return redirect('/dashboards/movie');
    }
    function edit($id){

        $edi = Movie::find($id);
        $mcat = MovieCat::all();
        $cinams = Cinemas::all();
        
        if($edi != null){
            
            return view('dashboardviews.movie.edit',compact('edi','mcat','cinams'));
        }
        
        
    }
    function update($id,Request $req){
        $mre = Movie::find($id);

        if($mre != null){

            if($req->mimg != null){

                $img = $req['mimg'];
                $name = $img->getClientOriginalName();
                $name = Str::random(7) . '_' .$name;
                $img->move('movieimg', $name);
                unlink('movieimg/'.$req->oldimg);
            }else{
                $name = $req->oldimg;
            }

            if($req->mvedio != null){
                $ved = $req['mvedio'];
                $vname = $ved->getClientOriginalName();
                $vname = str::random(5) . '_' . $vname;
                $ved->move('movietral',$vname);
                unlink('movietral/'.$req->oldvedio);

            }else{
                $vname = $req->oldvedio;
            }
            $mre['mdesc']  = $req['mdes'];
            $mre['mtitle']  = $req['mname'];
            $mre['mimg']  = $name;
            $mre['mvedio']  = $vname;
            $mre['mstart']  = $req['mstart'];
            $mre['mend']  = $req['mend'];
            $mre['mcid']  = $req['mcat'];
            $mre['cid']  = $req['mtherather'];

            $mre->save();
            return redirect('/dashboards/movie');
        }
        return redirect('dashboardviews.movie');

    }

    function delet($id){
        $mdel = Movie::find($id);

        if($mdel != null){
            $mdel->delete();
            return redirect('/dashboards/movie');

        }
        return redirect('/dashboards/movie');
    }


    function trash(){

       $mov = Movie::onlyTrashed()->get();
       
       return view('dashboardviews.movie.trash',compact('mov'));
    }

    function restore($id){
        $mov = Movie::onlyTrashed()->find($id);

        if($mov != null){
            $mov->restore();
            return redirect('/dashboards/movie/trash');
        }
        return redirect('/dashboards/movie/trash');

    }
    function forcedelet($id){
        $mov =  Movie::onlyTrashed()->find($id);

        if($mov != null){
            $mov->forceDelete();
            return redirect('/dashboards/movie/trash');
                
        }
        
        return redirect('/dashboards/movie/trash');

    }

    
}