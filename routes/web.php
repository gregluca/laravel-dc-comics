<?php
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ComicController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');


// rotte 

// - lista di tutte le paste GET
// - dettagli di una singola pasta  GET
// - pagina con form di creazione di una pasta -- GET
//         facciamo vedere form ( GET )

// - rotta per salvare dati nel database --- POST 
//  modificare paste -- pagina con form di modifica di una pasta ---- GET
//  rotta che gestisce modifca dei dati nel database --- PUT 
//  rotta che cancella un record dal database  --- DELETE

//  per una risorsa ci servono 7 rotte in questo caso 

// Route::get('/comics', [ComicsController::class, 'index'])->name('comics.index');

Route::resource('comics', ComicController::class);