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
    return view('pages.index');
});


//routes des pages 
Route::group([],function(){
    
    Route::get('/application',function(){
        $classe = "active";

        return view('pages.index',compact('classe'));
    })->name('accueil');

    Route::get('/blog',function(){
        return view('blog.blog');
    })->name('blog');

    Route::get('/contact',function(){
        return view('pages.contact');
    })->name('contact');

    Route::get('/apropos',function(){
        return view('pages.apropos');
    })->name('apropos');


});

//routes vers les formations
Route::group([],function(){
    

    Route::get('/finance',function(){
        return view('pages.services.finance');
    })->name('finance');

    Route::get('/formation',function(){
        return view('pages.services.formation');
    })->name('formation');

    Route::get('/consultation',function(){
        return view('pages.services.consultation');
    })->name('consultation');

    //routes des Messages envoyés
    Route::post('/messages',function(Request $request){
        $data['nom'] = request('nom');
        $data['email'] = request('email');
        $data['objet'] = request('objet');
        $data['message'] = request('message');

        App\Models\Message::create($data);
        session()->flash('message','Votre message a bien été envoyé.');
        return redirect()->back();
    })->name('messages');

    Route::post('/abonne',function(Request $request){
    if(!empty(request('email_abonne')) )
      $email_abonne = request('email_abonne');

    if(!empty(request('email_menu')) )
    $email_abonne = request('email_menu');

    
      Validator::make(compact('email_abonne'),['email_abonne'=>'required|email'],['email_abonne.required'=>'L\'email est oligatoire!'])->validate();
      
      $email = DB::table('abonnes')->whereEmail($email_abonne)->get();
        if($email->count()< 1){
          DB::table('abonnes')->insert(['email'=>$email_abonne]);
         
        }
      return redirect()->back();
      

    })->name('abonne');
});

