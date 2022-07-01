<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // BASIC KULLANIMI
        /*
        //http://127.0.0.1:8000/api/products (GET)
         $prd = DB::table('products')->get();
          */
        

            //SAYFALAMA İLE KULLANIMI
            /* 
             //http://127.0.0.1:8000/api/products?page=2 şeklinde diğer sayfa verilerini döner
        $prd = DB::table('products')->paginate(3); //sayfa başına 3 kayıt döneR

        return response($prd , 200);
            */
       
     
        //QUERY SEARCH İLE KULLANIMI
        $list=Product::query();

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
    public function store(Request $request)//POST Methodu ile parametre gönderiminde
    {
        //http://127.0.0.1:8000/api/products (POST)

        $input = $request->all();//post ile gelen veri alınıyor


        try{
            $snc = DB::table('products')->insert($input);//db ekleme işlemi

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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
   { //laravele özel verilen idye ait objeyi oto product ile döndürür

   // http://127.0.0.1:8000/api/products/1 (GET)

       $prd=DB::table('products')->where('id',$id)->get();

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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)//çalışmıyor
    {
       

        return response([
            
            "req"=>$request,
            "pro"=>$product
        ]);


       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response(["message"=>"Product Deleted"],200);
    }
}
