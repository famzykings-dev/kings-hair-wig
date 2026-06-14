<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BobWigController;
use App\Http\Controllers\BoneStraightController;
use App\Http\Controllers\CurlyWigController;
use App\Http\Controllers\FringeWigController;
use App\Http\Controllers\GluelessWigController;
use App\Http\Controllers\HairBundleController;
use App\Http\Controllers\HairToolsController;
use App\Http\Controllers\HeadbandWigController;
use App\Http\Controllers\NewArrivalsController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\RawWavyWigController;
use App\Http\Controllers\ReturnPolicyController;
use App\Http\Controllers\ShipmentPolicyController;
use App\Http\Controllers\ShortcutWigController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\WigComboController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\PaymentController;




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







Route::get('/', [HomesController::class, 'index'])->name('welcome');

// user dashbord 
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// aboutme route
Route::get('/about', [AboutController::class, 'index'])->name('about');


// bob wig route
Route::get('/bob-wig', [BobWigController::class, 'index'])->name('bobwig');

// bone straight route
Route::get('/bone-straight', [BoneStraightController::class, 'index'])->name('bonestraight');

// curly wig route
Route::get('/curly-wig', [CurlyWigController::class, 'index'])->name('curlywig');

// fringe wig
Route::get('/fringe-wig', [FringeWigController::class, 'index'])->name('fringewig');

// glueless wig route
Route::get('/glueless-wig', [GluelessWigController::class, 'index'])->name('gluelesswig');

// hair bundle route
Route::get('/hair-bundle', [HairBundleController::class, 'index'])->name('hairbundle');

// hair tools route
Route::get('/hair-tools', [HairToolsController::class, 'index'])->name('hairtools');

// headband wig route
Route::get('/headband-wig', [HeadbandWigController::class, 'index'])->name('headbandwig');

// new arrivals route
Route::get('/new-arrivals', [NewArrivalsController::class, 'index'])->name('newarrivals');

// privacy policy route
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacypolicy');

// raw wavy wig route
Route::get('/raw-wavy-wig', [RawWavyWigController::class, 'index'])->name('rawwavywig');

// return policy route
Route::get('/return-policy', [ReturnPolicyController::class, 'index'])->name('returnpolicy');

// shipment policy route
Route::get('/shipment-policy', [ShipmentPolicyController::class, 'index'])->name('shipmentpolicy');

// shortcut wig route
Route::get('/shortcut-wig', [ShortcutWigController::class, 'index'])->name('shortcutwig');

// terms of service
Route::get('/terms-of-service', [TermsController::class, 'index'])->name('terms');

// wig combo route
Route::get('/wig-combo', [WigComboController::class, 'index'])->name('wigcombo');

// contact us route
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');



// admin 
Route::get('/admin/products', [ProductController::class, 'index']);
Route::get('/admin/products/create', [ProductController::class, 'create']);
Route::post('/admin/products/store', [ProductController::class, 'store']);



// admin dashboard
Route::get('/home', [DashboardController::class, 'index'])->middleware('auth');

// view all users
Route::get('/admin/users', [DashboardController::class, 'users'])->middleware('auth');


// products
Route::get('/admin/products', [AdminProductController::class, 'index']);
Route::get('/admin/products/create', [AdminProductController::class, 'create']);
Route::post('/admin/products/store', [AdminProductController::class, 'store']);
Route::get('/admin/products/edit/{id}', [AdminProductController::class, 'edit']);
Route::post('/admin/products/update/{id}', [AdminProductController::class, 'update']);
Route::get('/admin/products/delete/{id}', [AdminProductController::class, 'destroy']);

// user product details
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');


// cart page
Route::get('/cart', [CartController::class, 'index'])->name('cart');

// add to cart
Route::get('/add-to-cart/{id}', [CartController::class, 'add'])->name('add.to.cart');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

// search route
Route::get('/search', [ProductController::class, 'search'])->name('search');

// checkout /place-order
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/place-order', [OrderController::class, 'store'])->name('order.store');

// Admin order 
Route::prefix('admin')->group(function () {
    Route::get('/orders', [OrderController::class, 'index'])->name('admin.orders');
    Route::get('/approve/{id}', [OrderController::class, 'approve'])->name('admin.approve');
});

// Admin payment
Route::prefix('admin')->group(function () {

    Route::get('/payment', [PaymentController::class, 'index'])->name('admin.payment');

    Route::post('/payment/save', [PaymentController::class, 'save'])->name('admin.payment.save');

});

// buy now
Route::get('/buy-now/{id}', [OrderController::class, 'buyNow'])->name('buy.now');

// How to order
Route::get('/how-to-order', function () {
    return view('howtoorder');
})->name('howtoorder');