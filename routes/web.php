<?php
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//    return view('welcome');
// });
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/', 'AppMainController@index');
Route::get('/admin', 'AppMainController@index');
Route::prefix('admin')->group(function () {
    Route::middleware('auth')->group(function () {

        //Manufacture Route
        Route::resource('manufacture', 'ManufactureController');
        Route::get('manufacture/show/{id}', 'ManufactureController@show');
        //Category Route
        Route::resource('category', 'CategoryController');
        Route::get('allCategory', 'CategoryController@allCategory');
        Route::get('category/show/{id}', 'CategoryController@show');
        //Generic Route
        Route::resource('generic', 'GenericController');
        Route::get('generic/show/{id}', 'GenericController@show');
        //Type Route
        Route::resource('type', 'TypeController');
        Route::get('type/show/{id}', 'TypeController@show');

        //Unit Route
        Route::resource('unit', 'UnitController');
        Route::get('unit/show/{id}', 'UnitController@show');

        //Customer Route
        Route::resource('customar', 'CustomarController');
        Route::get('customar/status/{id}', 'CustomarController@status');
        Route::get('customar/view', 'CustomarController@show')->name('customar_view');

        //Supplier Route
        Route::resource('supplier', 'SupplierController');
        Route::get('supplier/show/{id}', 'SupplierController@show');

        // Medicine Route

        Route::resource('medicine', 'MedicineController');
        Route::get('medicine/subCategory/{id}', 'MedicineController@subCatFind')->name('medicine_subCategory');
        Route::get('medicine/status/{id}', 'MedicineController@status');
        Route::get('medicine/view', 'MedicineController@show')->name('medicine_view');

        //Password Route
        Route::resource('password', 'PasswordController');

        //Profile Route
        Route::resource('profile', 'ProfileController');

    });

    // Sell Route

    Route::resource('sell', 'SellController');

    // Stock Route

    Route::resource('stock', 'StockController');
    Route::get('stock/subCategory/{id}', 'StockController@subCatFind');

});
