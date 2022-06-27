<h1> product view </h1>

<!--  Bu sayfa Product Controller içindeki show fonksiyonu tarafından döndürülmektedir  -->
<hr>

View içinde product id : {{ $id }} işlendi ;

<br>

@if($id==1)
    1 numaralı ürün görülüyor .

@else
    diğer ürünler gösteriliyor

@endif

<hr>
@for($x=0;$x<$id;$x++)
     x : {{$x}} <br>

     @endfor

