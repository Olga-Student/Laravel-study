<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\NewsController as AdminNewsController;
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
/*Route::get('/', function () {
    return 'welcome';
});*/

Route::get('/information', function () {
    return view('information');
});

/*Route::get('/news', function () {
    return view('news');
});*/

//Route::get('/newstest', function () {});
/*Route::match(['get','post'], '/test', function (){'Hello';});
Route::any('/test', function (){'Hello';}) or Route::view('/test', view('Hello'));
Route::redirect('/test', '/test2'); //редирект лучше делать на стороне вебсервера*/

Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])
    ->name("news::catalog");

Route::get('/news/card/{id}', [App\Http\Controllers\NewsController::class, 'card'])
    ->name("news::card");

//Route::resource('admin/category', Admin\CategoryController::class);
Route::get('/admin/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])
    ->name("admin::category::index");

Route::get('/admin/authorization', [\App\Http\Controllers\Admin\AuthorizationController::class, 'authorization'])
    ->name("admin::authorization::authorization");

Route::get('/admin/information', [\App\Http\Controllers\Admin\InformationController::class, 'information'])
    ->name("admin::information::information");



//Использование нескольких роутов для админки

/* Route::get('/admin/news/', [\App\Http\Controllers\Admin\NewsController::class, 'index'])->name("admin::news::index");
Route::get('/admin/news/create', [\App\Http\Controllers\Admin\NewsController::class, 'create'])->name("admin::news::create");
Route::get('/admin/news/update', [\App\Http\Controllers\Admin\NewsController::class, 'update'])->name("admin::news::update");
Route::get('/admin/news/delete', [\App\Http\Controllers\Admin\NewsController::class, 'delete'])->name("admin::news::delete");
*/

/*
 * Использование группогого роута
 */
Route::group([
    'prefix' => '/admin/news',
    'as' => 'admin::news::'
], function (){
    Route::get('', [AdminNewsController::class, 'index'])
        ->name("index");

    //Route::match(['get', 'post'], 'create', [AdminNewsController::class, 'create'])//
        //->name("create");//
    Route::post('create', [AdminNewsController::class, 'create'])
        ->name("create");
    Route::get('new', [AdminNewsController::class, 'new'])
        ->name("new");

    Route::get('update', [AdminNewsController::class, 'update'])
        ->name("update");

    Route::get('delete', [AdminNewsController::class, 'delete'])
        ->name("delete");

});

//Route::get('/admin/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name("admin::category::index");
Route::group([
    'prefix' => '/admin/category',
    'as' => 'admin::category::'
], function (){
    Route::get('', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])
        ->name("index");
    Route::post('save', [\App\Http\Controllers\Admin\CategoryController::class, 'save'])
        ->name("save");
    Route::get('new', [\App\Http\Controllers\Admin\CategoryController::class, 'new'])
        ->name("new");

    Route::get('update', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])
        ->name("update");

    Route::get('delete', [\App\Http\Controllers\Admin\CategoryController::class, 'delete'])
        ->name("delete");
});

Route::get('/db',[\App\Http\Controllers\DBController::class, 'index']);
