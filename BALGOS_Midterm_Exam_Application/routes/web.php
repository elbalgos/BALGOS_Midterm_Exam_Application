use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Home Route - Redirect to Gadgets
Route::get('/', [ProductController::class, 'showGadgets']);

// Gadgets Route
Route::get('/products/gadgets', [ProductController::class, 'showGadgets']);
