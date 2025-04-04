use App\Http\Controllers\LivreController;

Route::get('/livre', [LivreController::class, 'index']);
Route::get('/livre/create', [LivreController::class, 'create']);
Route::get('/livre/{id}', [LivreController::class, 'show']);
Route::post('/livre', [LivreController::class, 'store']);
