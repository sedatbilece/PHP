<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Product extends Model
{
   use HasApiTokens, HasFactory, Notifiable;


   protected $hidden = [// Tüm verileri çekerken dışarı açılmayacak veriler
      // show ile spesifik id verilirse gönderilir (int id güvenlik sorunu)
      'description'
  ];



  public function categories(){

       return $this->belongsToMany('App\Models\Category','product_categories');
  }


}
