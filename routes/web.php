<?php

use App\Models\Atribute;
use App\Models\Category;
use App\Models\City;
use App\Models\Command;
use App\Models\CommandLine;
use App\Models\Country;
use App\Models\Favorite;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Property;
use App\Models\Qwater;
use App\Models\Rewiew;
use App\Models\Setting;
use App\Models\Shop;
use App\Models\User;
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
    return view('index');
})->name('index');

Route::get('/register', function () {
    return view('pages.registration');
})->name('register');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart');

Route::get('/product/{id}', function ($id) {
    return view('pages.product', compact('id'));
});

Route::get('/user-dashboard', function () {
    return view('admin.user-dashboard',[
        'categories' => Category::orderByDesc('id')->get(),
    ]);
})->name('user-dashboard');


// Route::middleware('auth:sanctum')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::prefix('/users')->name('users.')->group(function(){
        Route::get('/', function () { return view('admin.users.index'); })->name('index');
        Route::get('/create', function () { return view('admin.users.create'); })->name('create');
        Route::get('/edit/{user}', function (User $user) { return view('admin.users.edit', compact('user')); })->name('edit');
        Route::get('/state/{user}', function (User $user) { return view('admin.users.state', compact('user')); })->name('state');
    });

    Route::prefix('/shops')->name('shops.')->group(function(){
        Route::get('/', function () { return view('admin.shops.index'); })->name('index');
        Route::get('/create', function () { return view('admin.shops.create', [
            'users' => User::orderByDesc('id')->get(),
        ]); })->name('create');
        Route::get('/edit/{shop}', function (Shop $shop) { return view('admin.shops.edit', [
            'users' => User::orderByDesc('id')->get(),
            'shop' =>$shop,
        ]); })->name('edit');
    });

    Route::prefix('/products')->name('products.')->group(function(){
        Route::get('/', function () { return view('admin.products.index'); })->name('index');
        Route::get('/create', function () { return view('admin.products.create',[
            'categories' => Category::orderByDesc('id')->get(),
            'shops' => Shop::orderByDesc('id')->get(),
        ]); })->name('create');
        Route::get('/edit/{product}', function (Product $product) { return view('admin.products.edit',[
            'categories' => Category::orderByDesc('id')->get(),
            'shops' => Shop::orderByDesc('id')->get(),
            'product' => $product,
        ]); })->name('edit');
        Route::get('/attributes/{product}', function (Product $product) { return view('admin.products.attribute_list', compact('product')); })->name('attribute');
        Route::get('/attributes/create/{product}', function (Product $product) { 
            return view('admin.products.attribute_create', [
                'attributes' => Atribute::orderByDesc('id')->get(),
                'product' => $product,
            ]); 
        })->name('attribute_create');
    });

    Route::prefix('/categories')->name('categories.')->group(function(){
        Route::get('/', function () { return view('admin.categories.index'); })->name('index');
        Route::get('/create', function () { return view('admin.categories.create',[
            'categories' => Category::orderByDesc('id')->get()
        ]); })->name('create');
        Route::get('/edit/{category}', function (Category $category) { return view('admin.categories.edit',[
            'categories' => Category::orderByDesc('id')->get(),
            'category' => $category,
        ]); })->name('edit');
        Route::get('/details/{category}', function (Category $category) { return view('admin.categories.details',[
            'category' => $category,
        ]); })->name('details');
    });

    Route::prefix('/attributes')->name('attributes.')->group(function(){
        Route::get('/', function () { return view('admin.attributes.index'); })->name('index');
        Route::get('/create', function () { return view('admin.attributes.create'); })->name('create');
        Route::get('/edit/{attribute}', function (Atribute $attribute) { return view('admin.attributes.edit', compact('attribute')); })->name('edit');
    });

    Route::prefix('/properties')->name('properties.')->group(function(){
        Route::get('/', function () { return view('admin.properties.index'); })->name('index');
        Route::get('/create', function () { return view('admin.properties.create',[
            'attributes' => Atribute::orderByDesc('id')->get()
        ]); })->name('create');
        Route::get('/edit/{property}', function (Property $property) { return view('admin.properties.edit',[
            'attributes' => Atribute::whereNotIn('id',[$property->atribute_id])->get(),
            'property' => $property,
        ]); })->name('edit');
    });

    Route::prefix('/settings')->name('settings.')->group(function(){
        Route::get('/', function () { return view('admin.settings.index'); })->name('index');
        Route::get('/create', function () { return view('admin.settings.create'); })->name('create');
        Route::get('/edit/{setting}', function (Setting $setting) { return view('admin.settings.edit', compact('setting')); })->name('edit');
    });

    Route::prefix('/countries')->name('countries.')->group(function(){
        Route::get('/', function () { return view('admin.countries.index'); })->name('index');
        Route::get('/create', function () { return view('admin.countries.create'); })->name('create');
        Route::get('/edit/{country}', function (Country $country) { return view('admin.countries.edit', compact('country')); })->name('edit');
    });

    Route::prefix('/qwaters')->name('qwaters.')->group(function(){
        Route::get('/', function () { return view('admin.qwaters.index'); })->name('index');
        Route::get('/create', function () { return view('admin.qwaters.create',[
            'cities' => City::orderByDesc('id')->get()
        ]); })->name('create');
        Route::get('/edit/{qwater}', function (Qwater $qwater) { return view('admin.qwaters.edit',[
            'cities' => City::orderByDesc('id')->get(),
            'qwater' => $qwater,
        ]); })->name('edit');
    });

    Route::prefix('/cities')->name('cities.')->group(function(){
        Route::get('/', function () { return view('admin.cities.index'); })->name('index');
        Route::get('/create', function () { return view('admin.cities.create',[
            'countries' => Country::orderByDesc('id')->get()
        ]); })->name('create');
        Route::get('/edit/{city}', function (City $city) { return view('admin.cities.edit',[
            'countries' => Country::orderByDesc('id')->get(),
            'city' => $city,
        ]); })->name('edit');
    });

    Route::prefix('/commandes')->name('commandes.')->group(function(){
        Route::get('/', function () { return view('admin.commands.index'); })->name('index');
        Route::get('/create', function () { return view('admin.commands.create'); })->name('create');
        Route::get('/details/{command}', function (Command $command) { return view('admin.commands.details', compact('command')); })->name('details');
    });

    Route::prefix('/commandlines')->name('commandlines.')->group(function(){
        Route::get('/edit/{commandline}', function (CommandLine $commandline) { 
            return view('admin.commandlines.edit',[
                'products' => Product::orderByDesc('id')->get(),
                'commandline' => $commandline,
            ]); 
        })->name('edit');
        Route::get('/state/{commandline}', function (CommandLine $commandline) { 
            return view('admin.commandlines.state', compact('commandline')); 
        })->name('state');
    });

    Route::prefix('/payments')->name('payments.')->group(function(){
        Route::get('/', function () { return view('admin.payments.index'); })->name('index');
        Route::get('/create', function () { return view('admin.payments.create'); })->name('create');
        Route::get('/edit/{payment}', function (Payment $payment) { return view('admin.payments.edit', compact('payment')); })->name('edit');
    });
// });





