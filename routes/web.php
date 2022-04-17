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
    return view('index');
});


Route::get('/about',function (){
    return view('about');
});

Route::get('/pages', function (){
    return view('pages');
});
Route::get('/new', function (){
    return view('news');
});
Route::get('/contact', function (){
    return view('contact');
});

Route::get('/product', function (){

    return view('product');
});

Route::get('/create', function (){
    return view('add_product');
});
Route::post('/store', function (\Illuminate\Http\Request $request){
    $val = $request->validate([
       'name'=>'required|min:3',
       'price'=>'required',
       'country'=>'required|min:4',
        'image'=>'image|nullable'
    ]);

    if ($val){
        $product = new \App\Models\Product();
        if ($request->hasFile('image')){
            $product->name = $request->name;
            $product->price = $request->price;
            $product->country = $request->country;
            $product->image = $request->file('image')->store('images');
        }else{
            $product->name = $request->name;
            $product->price = $request->price;
            $product->country = $request->country;
        }
        $product->save();

        return redirect('/product');
    }else{
        return  redirect()->back()->withErrors($val);
    }




  
});


Route::get('/{local}', function ($local){

 if (in_array($local, config('app.available_locales'))){
     session()->put('locale',$local);
 }
     return redirect()->back();
})->middleware('lang');



