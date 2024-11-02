
<?php
use App\Http\Controllers\TravelController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/travel', [TravelController::class, 'index'])->name('travel.index');
Route::get('/travel/create', [TravelController::class, 'create'])->name('travel.create');
Route::post('/travel', [TravelController::class, 'store'])->name('travel.store');
Route::get('/travel/{travel}/edit', [TravelController::class, 'edit'])->name('travel.edit');
Route::put('/travel/{travel}/update', [TravelController::class, 'update'])->name('travel.update');
Route::delete('/travel/{travel}/destroy', [TravelController::class, 'destroy'])->name('travel.destroy');
