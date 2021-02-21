<?php
Use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\RegisterController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articles', [ArticleController::class,'index']);
Route::get('articles/all', [ArticleController::class,'all']);
Route::get('articles/year/{year}', [ArticleController::class,'year']);
Route::get('articles/carcategory/', [ArticleController::class,'getCarcategory']);
Route::get('articles/{article}', [ArticleController::class,'show']);
Route::post('articles', [ArticleController::class,'store']);
Route::put('articles/{article}', [ArticleController::class,'update']);
Route::delete('articles/{article}', [ArticleController::class,'delete']);

// Route::group(['middleware' => ['cors']], function () {
//     /
// });