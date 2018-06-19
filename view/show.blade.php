@extends('layouts.mainPage')

@section('text')
    <div class="container">
        <div class="col-md-12">

            <p class="text-center" style="font-size: xx-large;color: black"><b>Kasa</b></p>
            <br>
    

    <p class="text-left" style="font-size: large;color: black"><i>Grupa intervencija:</i><b> {{$pricelistGroups->name}}</b></p>
 <hr>
    <br>

 <div class="row">
               
                @foreach ($pricelistGroups->pricelist as $pricelist) 

                <div class="col-md-3">
                      <div class="thumbnail">
                          <div class="caption">
                            <b>{{$pricelist->name}}</b><br>
                         

                            <i> Cena:</i> <b>{{$pricelist->price}} din.</b><br><br>

                          <a class="btn btn-success" style="color: white; font-size: small" 
                        href="{{ route('cashRegister.session-store', ['id'=>$pricelist]) }}">Dodaj u korpu </a>



                          </div>
                          <br><br>
                      </div>
      
                 </div>
    
               @endforeach
 
 </div>

       
     
        </div>
    
    </div>
@endsection