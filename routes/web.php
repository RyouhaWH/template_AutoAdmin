<?php

use App\Http\Controllers\WebController as ControllersWebController;
use App\Models\WebController;
use App\Models\Website;
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
Route::view('/1', 'inicio', [
    'website' => website::find(1),
]);
Route::view('/2', 'finales.veterinaria');
Route::view('/vetclinic', 'vetClinic',[
    'website' => website::find(1),
]);



Route::post('/nav', [ControllersWebController::class, 'llenadoNav'])->name('nav');
Route::post('/hero', [ControllersWebController::class, 'llenadoHero'])->name('hero');
Route::post('/about', [ControllersWebController::class, 'llenadoAbout'])
    ->name('about');
Route::post('/cta', [ControllersWebController::class, 'llenadoCta'])
    ->name('cta');
Route::post('/galeria', [ControllersWebController::class, 'llenadoGaleria'])
    ->name('galeria');
Route::post('/team', [ControllersWebController::class, 'llenadoTeam'])
    ->name('team');
Route::post('/faq', [ControllersWebController::class, 'llenadoFaq'])
    ->name('faq');
Route::post('/testimonio', [ControllersWebController::class, 'llenadoTestimonio'])
    ->name('testimonio');
Route::post('/contacto', [ControllersWebController::class, 'llenadoContacto'])
    ->name('contacto');
Route::post('/direccion', [ControllersWebController::class, 'llenadoDireccion'])
    ->name('direccion');


Route::get('/adm-panel', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/adm-panel/sitio', function () {
    $website = Website::find(1);
    return view('admin-sitio', [
        'website' => $website,
    ]);
})->middleware(['auth', 'verified'])->name('mod-sitio');

require __DIR__.'/auth.php';
