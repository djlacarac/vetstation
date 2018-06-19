@extends('layouts.mainPage')

@section('text')
    <div class="container">
        <div class="col-md-10 offset-1">
            <p class="text-center" style="font-size: xx-large;color: black"><b>Kasa</b></p>
            <br>
            
        <table class="table table-hover">
              <thead>
                <tr>
                    <td><b><i>Grupe intervencija</i></b></td>
                    <td> </td>
                
                </tr>
             </thead>
             <tbody>


                @foreach ($pricelistGroups as $pricelistGroup) 

               
               
                <tr>
                    <td> {{$pricelistGroup->name}} </td>
                   
                    <td><a class="btn btn-success" style="color: white; font-size: small" 
                        href="{{route('cashRegister.show',['id'=>$pricelistGroup->id])}}"> Izaberi </a></td>
                   
                
                </tr>
               @endforeach
            </tbody> 

        </table><br>


      @if( ! is_null(session('cart')) )

      
        <a class="btn btn-primary text left"  style="font-size: large;" 
        href="{{ route('cashRegister.indexSession') }}">Naplati
       </a>

      @endif


         
        
        </div>
    
    </div>
@endsection