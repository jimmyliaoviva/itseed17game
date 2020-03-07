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

use App\Http\Controllers\QuestionController;
//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
use Illuminate\Notifications\RoutesNotifications;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

Route::get('/', function () {
    return view('user.index');
});


Route::get('storage/{name}', function ($name) {

    $path = storage_path($name);

    $mime = \File::mimeType($path);

    header('Content-type: ' . $mime);

    return readfile($path);
})->where('name', '(.*)');

//get questions
Route::get('/questions/{id}', [
    'uses'=>'ProductController@getAddToCart',
    'as'=>'product.addToCart'
]);

//admin
Route::get('/admin', [
    'uses'=>'QuestionController@getQuestions',
    'as'=>'user.admin'
]);
Route::post('/admin', [
    'uses'=>'QuestionController@PostQuestions',
    'as'=>'user.admin'
]

);



//login   account will be create once
Route::get('/login',[
    'uses'=> 'UserController@getLogin',
    'as'=> 'user.login'
    ]
);

Route::post('/login', [
    'uses'=>'UserController@postLogin',
    'as'=>'user.login'
    ]
);

Route::get('/bingo', [
         'uses'=>'BingoController@getBingo',
    'as'=>'bingo.bingo'
    ]



);
