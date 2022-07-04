<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // BASIC KULLANIMI
        
        //http://127.0.0.1:8000/api/products (GET)
         $category = DB::table('categories')->get();
         return response($category,200);
          
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
            $snc = DB::table('categories')->insert($input);//db ekleme işlemi

        }catch(Exception $e){

            return response([
               
                "message"=>"Missing Value"
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prd=DB::table('categories')->where('id',$id)->get();

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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return response(["message"=>"category Deleted"],200);
    }
}
