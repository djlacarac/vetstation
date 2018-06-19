@extends('layouts.mainPage')

@section('text')
    <div class="container">
        <div class="col-md-12">

            <p class="text-center" style="font-size: xx-large;color: black"><b>Izabrane intervencije</b></p>
            <br><br>
        <form action="{{ route('cashRegister.store') }}" method="post">
            {{ csrf_field() }}


                <div class="col-md-8 offset-md-2">
                            <table class="table table-hover">

                                <thead>
                                    <tr>
                                        <th><i>Naziv intervencije</i></th>
                                        <th><i>Kolicina</i></th>
                                    </tr>
                                </thead>
                               
                                   @foreach($pricelist as $key =>$pricelistes )

                                         <?php

                                         $pricelistID=$pricelistes->id;

                                         ?>   


                                            @foreach($id as $idPricelist =>$quantity )
                                            

                                                    @if($quantity == $pricelistID or $idPricelist==$pricelistID )


                                                    <tr>

                                                      <td>{{$pricelistes->name}}</td>
                                                      <td>
                                                    
                                                      
                                                         <div class="box">
                                                        <p class="text-right">     
                                               <input type="number" style="border:none;"  value="1" name="quantity[{{ $pricelistes->id }}]">
                                                </p> 
                                                        </div> 
                                                      </td>
                                                      
                                                    </tr>

                                                  
                                                    @endif
                                     
                                        
                                            @endforeach
                                    @endforeach
                            </table>
                </div>
             <br>
             <button type="submit" class="btn btn-success" style="color: white; font-size: small;"> Naplati </button>

                 <a class="btn btn-danger" style="color: white; font-size: small; " 
                   href="{{ route('cashRegister.cancel') }}">Otkazi
                </a>
        </form>
    </div>
</div>

    
@endsection