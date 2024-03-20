<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ArticleController::class, 'index']);

Route::get('/Ajouter', [ArticleController::class, 'create']);
Route::post('/AjouterArticle', [ArticleController::class, 'store']);


Route::get('/delete/{id}', [ArticleController::class, 'delete_article']);

Route::get('/update', [ArticleController::class, 'update_article']);
Route::post('/modifierArticle', [ArticleController::class, 'modifyArticle']);


// Route::middleware("auth")->group(function(){

//     Route::get('/update', [ArticleController::class, 'update_article'])->middleware('admin');
//     Route::post('/modifierArticle', [ArticleController::class, 'modifyArticle'])->middleware('admin');
    
// })





