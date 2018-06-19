@extends('layouts.mainPage')

@section('text')
    <div class="container">
        <div class="col-md-12">

            <p class="text-center" style="font-size: xx-large;color: black"><b>Racun</b></p>
            <br>
    <?php
       
        foreach ( $station as $key => $stationes) {

           $name=$stationes->name;
         
           $address=$stationes->address;
             
     ?>     
         <p class="text-left" style="font-size: medium;color: black"><b>Ime stanice:</b> "{{$name}}" </p>
          <p class="text-left" style="font-size: medium;color: black"><b>Adresa i mesto stanice:</b> "{{$address}}" </p><br>

    <?php

         }


    ?>

           <table class="table table-hover" style="color: black;">
             <thead>
                <tr>
                    
                    <td><b><i>Naziv intervencije</i></b></td>
                    <td><b><i>Kolicina</i></b></td>
                    <td><b><i>Cena</i></b></td>
                    <td><b><i>Ukupna cena</i></b></td>
                    <td><b><i>Veterinar</i></b></td>
                    <td><b><i>Datum</i></b></td>
                  
                </tr>
            </thead>
               
                <tbody>
                  
                   <?php
                         $total=0;
                        foreach ( $pricelistes as $key => $pricelist) {

                            $pricelistId=$pricelist->id;
                            $price=$pricelist->price;
                            
                           
                                foreach ( $qty as $id => $quantity) {


                                     if ($pricelistId==$id) {
                                    
                                   
                                       $totalPrice = $price * $quantity;
                                       $total = $total + $totalPrice;

                                       $date = date("d-M-Y", strtotime("now"));
                                       

                      ?>

                                          <tr>
                                              
                                              <td> {{$pricelist->name}} </td>
                                              <td> {{$quantity}} </td>
                                              <td> {{ $price }} din </td>
                                              <td> {{ $totalPrice }} din </td>
                                              <td> {{ $employed }} </td>
                                              <td> {{ $date}} </td>
                                             
                                             
                                          </tr>
                                        
 

                  <?php

                                    }

                              }

                        }
            
                   ?>


                </tbody>
               
            </table><br>

            <p class="text-left" style="font-size: medium;color: black"><b>Ukupno za naplatu:</b> {{  $total }} din</p>

             <a class="btn btn-danger" style="color: white; font-size: small; " 
                   href="{{ route('cashRegister.cancel') }}">Isprazni korpu
                </a>


     
        </div>
    
    </div>
@endsection