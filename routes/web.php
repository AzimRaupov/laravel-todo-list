<?php
use App\Mail\SendMail;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/mail',function (Request $r){
    $emaill=$r->input('f');
     Mail::to($emaill)
         ->send(new SendMail());
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/user',\App\Http\Controllers\UserController::class);
Route::post('/delete',[\App\Http\Controllers\DeleteController::class,'index'])->name('delete');;
Route::get('/delete/edit',[\App\Http\Controllers\DeleteController::class,'edit'])->name('edit');;

Route::post('/delete/update/{list}',[\App\Http\Controllers\DeleteController::class,'update'])->name('update');;

Route::resource('/todo_list',\App\Http\Controllers\CreateListController::class);
//Route::get()
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
