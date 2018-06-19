<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PricelistGroup;
use App\Pricelist;
use App\CashRegister;
use Auth;
use App\Vetstation;


class CashRegisterController extends Controller
{

     public function index()
    {
        $pricelistGroups = PricelistGroup::all();
         
        return view('cashRegister.index', compact('pricelistGroups'));
    }

    public function show($id)
    {  
       

    	$pricelistGroups = PricelistGroup::find($id);

    	return view('cashRegister.show', compact('pricelistGroups'));

    }

    public function sessionStore(Request $request)
    {

        $id = $request->id;
      
        if ($request->session()->has('cart')) {
         
                $request->session()->put('cart.' . $id);
  
        }else{
              
            $request->session()->put('cart.', $id);
        }
       
        session()->flash('notif','Uspesno ste dodali intervenciju u korpu.');

        return redirect()->route('cashRegister.index'); 

    }


     public function indexSession(Request $request)
    {

        if (isset(request()->session()->all()['cart'])) {
            
            $id = request()->session()->all()['cart'];
           
          
                if (!is_array($id)) {
                    
                   $id=[$id];
                   
                }
   
        }else{

        $id = [];
       
   
       }

       $pricelist = Pricelist::all();
                      
       return view('cashRegister.indexSession', compact('pricelist','id')); 

    }


    public function cancel()
    {
        session()->forget('cart');

        session()->flash('notif','Uspesno ste ispraznili korpu.');

        return redirect()->route('cashRegister.index');
    }




    public function store(Request $request)
    {
      $station= Vetstation::all();

      $zaposleni= Auth::user();
      $employed = $request->user()['name'];


       $qty=$request->quantity;
       

       $pricelistes = Pricelist::all();
        
            foreach ( $pricelistes as $key => $pricelist) {

                $pricelistId=$pricelist->id;
                $price=$pricelist->price;
                

                   foreach ($qty as $id => $quantity) {


                        if ($pricelistId==$id) {
                            
                           
                            $totalPrice = $price * $quantity;


                                   $cashRegister = new CashRegister();

                                   $cashRegister->employed = $request->user()['name'];
                                   $cashRegister->id_pricelist = $pricelistId;
                                   $cashRegister->quantity = $quantity;
                                   $cashRegister->total_price = $totalPrice;
                                   $cashRegister->save();

                        }

                   
                    }

            }

    return view('cashRegister.showBill',compact('pricelistes','qty','employed','station'));    

    }

    public function showBill(Request $request)
    {
      
        $station = $request->station;

        $employed = $request->employed;

        $qty = $request->qty;
         
        $pricelistes = $request->pricelistes;
        
     return  view('cashRegister.showBill',compact('pricelistes','qty','employed','station'));    
    }

}




