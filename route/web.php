<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/', function () {
//    return view('searchName');
//});
Route::get('/', function () {
    return view('welcome');
});

//U;[[9v1j;?%&

//Route::get('animal', function () {
//   return view('animal.create','AnimalController@store');
//});
Auth::routes();

Route::get('/index', 'HomeController@index');

// for homePage
Route::get('/homePage', 'HomePageController@index')->name('homePage.index');

//* for search
Route::get('/search', "SearchOwnerController@index")->name('index');


//* for vetstation
Route::get('/vetstation', 'admin\VetstationController@index')->name('admin.vetstation.index');
Route::get('/vetstation/create', 'admin\VetstationController@create')->name('admin.vetstation.create');
Route::post('/vetstation/store', 'admin\VetstationController@store')->name('admin.vetstation.store');
Route::get('/vetstation/show', 'admin\VetstationController@show')->name('admin.vetstation.show');
Route::put('/vetstation/update/{id}', 'admin\VetstationController@update')->name('admin.vetstation.update');
Route::get('/vetstation/edit/{id}', 'admin\VetstationController@edit')->name('admin.vetstation.edit');
Route::delete('/vetstation/delete/{id}', 'admin\VetstationController@delete')->name('admin.vetstation.delete');



//* for owner
Route::get('/owner/index/{id}', 'OwnerController@index')->name('owner.index');
Route::get('/owner/create', 'OwnerController@create')->name('owner.create');
Route::post('/owner/create', 'OwnerController@store')->name('owner.store');
Route::get('/owner/show/{id}', 'OwnerController@show')->name('owner.show');
Route::get('/owner/search', 'OwnerController@search')->name('owner.search');
Route::put('/owner/update/{id}', 'OwnerController@update')->name('owner.update');
Route::get('/owner/edit/{id}', 'OwnerController@edit')->name('owner.edit');
//Route::delete('/owner/delete/{id}', 'OwnerController@delete')->name('owner.delete');



//* for animal
Route::get('/animal', 'AnimalController@index')->name('animal.index');
Route::get('/animal/create', 'AnimalController@create')->name('animal.create');
Route::post('/animal/store', 'AnimalController@store')->name('animal.store');
Route::get('/animal/show/{id}', 'AnimalController@show')->name('animal.show');



//* for reviewMeatCustomer
Route::get('/customer/create','ReviewMeatCustomerController@create')->name('reviewMeatCustomer.create');
Route::post('/create/store', 'ReviewMeatCustomerController@store')->name('reviewMeatCustomer.store');
Route::get('/customer/search','ReviewMeatCustomerController@search')->name('reviewMeatCustomer.search');


//* for ReviewMeat
Route::post('/reviewMeat/create', 'ReviewMeatController@store')->name('reviewMeat.store');
Route::get('/reviewMeat/create-{id}','ReviewMeatCustomerController@createReviewMeat')->name('reviewMeat.create');


//* for race
Route::get('/race/search/{id}','RaceController@search')->name('race.search');
Route::get('/race/create','RaceController@create')->name('race.create');
Route::post('/race/store', 'RaceController@store')->name('race.store');


//* for kind
Route::get('/kind', 'KindController@index')->name('kind.index');
Route::get('/kind/create','KindController@create')->name('kind.create');
Route::post('/kind/store', 'KindController@store')->name('kind.store');


//* for curing
Route::get('/curing/create','CuringController@create')->name('curing.create');
Route::post('/curing/store', 'CuringController@store')->name('curing.store');
Route::get('/curing/show/{id}', 'CuringController@show')->name('curing.show');



//* for vaccine
Route::get('/vaccine/create','VaccineController@create')->name('vaccine.create');
Route::post('/vaccine/store', 'VaccineController@store')->name('vaccine.store');
Route::get('/vaccine/show/{id}', 'VaccineController@show')->name('vaccine.show');



//* for blood
Route::get('/blood/create','BloodController@create')->name('blood.create');
Route::post('/blood/store', 'BloodController@store')->name('blood.store');
Route::get('/blood/show/{id}', 'BloodController@show')->name('blood.show');


//* for biochemical
Route::get('/biochemical/create','BiochemicalController@create')->name('biochemical.create');
Route::post('/biochemical/store', 'BiochemicalController@store')->name('biochemical.store');
Route::get('/biochemical/show/{id}', 'BiochemicalController@show')->name('biochemical.show');



//* for autopsy
Route::get('/autopsy/create','AutopsyController@create')->name('autopsy.create');
Route::post('/autopsy/store', 'AutopsyController@store')->name('autopsy.store');
Route::get('/autopsy/show/{id}', 'AutopsyController@show')->name('autopsy.show');



//* for history
Route::get('history/show','HistoryController@show')->name('history.show');


//* for user
Route::get('/search', "admin\UserController@search")->name('admin.user.search');
Route::get('/user/show/{id}', 'admin\UserController@show')->name('admin.user.show');
Route::put('/user/update/{id}', 'admin\UserController@update')->name('admin.user.update');
Route::get('/user/edit/{id}', 'admin\UserController@edit')->name('admin.user.edit');
Route::delete('/user/delete/{id}', 'admin\UserController@delete')->name('admin.user.delete');
Route::post('/user/create', 'admin\UserController@store')->name('admin.user.store');
Route::get('/user/create', 'admin\UserController@create')->name('admin.user.create');


//* for report meat
Route::get('/report/search','ReportMeatController@search')->name('reportMeat.search');
Route::get('/report/show/{id}','ReviewMeatController@show')->name('reportMeat.show');


//* for pricelist Group
Route::get('/pricelistGroup/create', 'admin\PricelistGroupController@create')->name('admin.pricelistGroup.create');
Route::post('/pricelistGroup/store', 'admin\PricelistGroupController@store')->name('admin.pricelistGroup.store');
Route::get('/pricelistGroup/index', 'admin\PricelistGroupController@index')->name('admin.pricelistGroup.index');


//* for pricelist
Route::get('/pricelist/create', 'admin\PricelistController@create')->name('admin.pricelist.create');
Route::post('/pricelist/store', 'admin\PricelistController@store')->name('admin.pricelist.store');


//* for Cash Register
Route::get('/cashRegister/index', 'CashRegisterController@index')->name('cashRegister.index');
Route::get('/cashRegister/show/{id}', 'CashRegisterController@show')->name('cashRegister.show');
Route::get('/cashRegister/session-store', 'CashRegisterController@sessionStore')->name('cashRegister.session-store');
Route::get('/cashRegister/indexSession', 'CashRegisterController@indexSession')->name('cashRegister.indexSession');
Route::get('/cashRegister/cancel', 'CashRegisterController@cancel')->name('cashRegister.cancel');
Route::post('/cashRegister/store', 'CashRegisterController@store')->name('cashRegister.store');
Route::get('/cashRegister/showBill', 'CashRegisterController@showBill')->name('cashRegister.showBill');












Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::get('/index', 'StationController@store')->name('station.store');
//return view('index');


