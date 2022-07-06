<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $list=User::query();

        if($request->has('q')){
                $list->where('name','like','%'.$request->query('q').'%');
        }

        $prd2=$list->get();
        return response($prd2,400);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();//post ile gelen veri alınıyor


        try{
            $snc = DB::table('users')->insert($input);//db ekleme işlemi

        }catch(Exception $e){

            return response([
               
                "message"=>"Missing Value",
                "in"=>$input,
                "ex"=>$e
    ],400);
        
        }
        
        
        if($snc==true){
            return response([
                "data"=>$input,
                "message"=>"Added to database"
    ],201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prd=DB::table('users')->where('id',$id)->get();

         if(sizeof($prd) ==0){
            return response(["message"=>"Not Found"],404);
         }
         else{
            return $prd;
         }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $snc=DB::table('users')->where('id',$id)->update($input);
           return response([
                    $snc ,
                    $id
           ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response(["message"=>"category Deleted"],200);
    }
}
