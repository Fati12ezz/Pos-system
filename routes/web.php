<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// language change option route
Route::middleware([SetLocale::class])->get('/change-language/{lang}', function($lang){
    if(in_array($lang,['en','fr'])){
        session()->put('locale', $lang);
    }
    app()->setLocale(session('locale'));
    Log::info("function ".session('locale'));
    return back()->with('locale', 'fr');// return to the previous page from where language changed by user
})->name('change-language');
