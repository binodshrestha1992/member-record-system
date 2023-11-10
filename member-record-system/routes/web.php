<?php

use App\Http\Controllers\eventController;
use App\Http\Controllers\participantController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Home Page
Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/create', [participantController::class,'createParticipant']);

Route::get('/user/list', [participantController::class, 'getParticipants']);

Route::post('/user/add', [participantController::class, 'addParticipant']);

Route::get('/user/{id}/edit', [participantController::class,'editParticipant']);

Route::post('/user/{id}/update', [participantController::class, 'updateParticipant']);

Route::delete('/user/{id}/delete', [participantController::class,'deleteParticipant']);

//About page//
Route::get("/about", function(){
    try{
        if(session()->has('user')){
            return view("about");    
        }else{
            return redirect("/");
        }
       
    }catch (\Exception $e){
    return $e;
    }
});

//Contact Page//
Route::get("/contact", function(){
    try{
        if(session()->has('user')){
            return view("contact");    
        }else{
            return redirect("/");
        }
       
    }catch (\Exception $e){
    return $e;
    }
    
});

Route::get('add_user', function(){
    Schema::create('users', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name');
    $table->string('email');
    $table->string('password');
    $table->timestamps();
    });
});

Route::post('/login', [userController::class, 'login']);
Route::get('/create', [userController::class,'create']);
Route::post('/adduser', [userController::class,'store']);
Route::post('/logout', [userController::class,'logout']);



// Event CRUD//
Route::get('/event/create', [eventController::class, 'create']);
Route::post('/store/event', [eventController::class,'store']);
Route::get('/event/list', [eventController::class,'viewEvents']);
Route::get('/event/{id}/edit', [eventController::class,'edit']);
Route::post('/event/{id}/update', [eventController::class,'update']);
Route::delete('/event/{id}/delete', [eventController::class,'delete']);










//Publisher//
// Route::get('add_publisher', function(){
// $publishers = new Publisher;
// $publishers->name = 'restha';
// $publishers->save();
// });

// Route::get('add_book', function(){
//     $publisher_id = 3;
//     $book = new Book;
//     $book->title = 'Ontasdf';
//     $book->publisher_id = $publisher_id;
//     $book->description = 'slfjk akdf lajf lakdf ';
//     $book->pages_count = 250;
//     $book->price = 200.00;
//     $book->save();
//     return $book;
// });

// Route::get('cheap_book', function(){
//     $book = new Book;
//     return $book->cheap()->get();
// });

// Route::get('expensive_book', function(){
//     $book = new Book;
//     return $book->expensive()->get();
// });
