<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// Route::get('/', function () {
//     return view('listing',[
//         'heading'=>'Latest Listing',
//         'listings'=>Listing::all()
//     ]);
// });


// Common Resource Routes:
// index - Show all listings
// Show-	show single listing
// Create-	Show form to create a new listing
// Store-	Store new listing
// edit- Show form to edit listing
// update-	Update Listing
// Destroy-	Delete listing


Route::get('/', [ListingController::class, 'index']);

//show create form
Route::get('/listings/create', [ListingController::class, 'create']);

//store listing data
Route::post('/listings/store', [ListingController::class, 'store']);


Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Route::get('/listings/{listing}', function (Listing $listing) {
//     return view('listings',[
//         'listing'=>$listing
//     ]);
// });
