use App\Http\Controllers\ProductController;

Route::get('/ps4-games', [ProductController::class, 'showPS4Games']);
