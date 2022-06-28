<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('foo', function () {
    return 'Hello Program';
});

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('posts/{post}/comments/{comment}', function ($postId,$commentId) {
    return $postId.' = '.$commentId;
});

Route::get('users/{name}', function ($name = 'John') {
    return $name;
});

Route::view('/catalog','catalog')->name('catalog');

Route::get('catalog/medicine', function ($medicine = 'Medicine') {
    return view('medicines', ['medicines' => $medicine]);
});

Route::get('catalog/medicine/{id?}', function ($id) {

    return view('detailmedicine', ['id' => $id]);
});

Route::get('catalog/med_equip', function ($med_equip = 'Medical Equip') {
    return view('medequips', ['medequip' => $med_equip]);
});

Route::get('catalog/med_equip/{id?}', function ($id) {

    return view('detailmedequip', ['id' => $id]);
});


Auth::routes();

Route::middleware(['auth'])->group(function(){
    
    Route::resource('obat','MedicineController');
    Route::resource('kategori','CategoryController');

    Route::post('/medicine/showInfo','MedicineController@showInfo')->name('medicines.showInfo');

    Route::resource('transaction','TransactionController');
    Route::post('transaction/showDataAjax/','TransactionController@showAjax')->name('transaction.showAjax');

    Route::post('/kategori/getEditForm','CategoryController@getEditForm')->name('kategori.getEditForm');

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/','MedicineController@front_index');
    Route::get('cart','MedicineController@cart');
    Route::get('add-to-cart/{id}','MedicineController@addToCart');

});