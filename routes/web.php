<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\{InvestmentsTable, UsersTable, UserProfitTable, Dashboard, WithdrawalsTable};
use App\Http\Livewire\User\{Investments, Referrals, Plans, UserDashboard, Withdrawals, Settings};
use  App\Models\Post;
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

Route::get('/', function () {

    $posts = Post::where('status', 1)->get()->take(3);

    return view('welcome', ['posts' => $posts]);
})->name('index');
Route::view('/about', 'about')->name('contact');
Route::view('/about', 'about')->name('about');
Route::view('/trade', 'trade')->name('trade');
Route::view('/policy', 'policy')->name('policy');
Route::view('/exchange', 'exchange')->name('exchange');
Route::view('/foreign_exchange', 'foreign_exchange')->name('foreign_exchange');
Route::view('/scheme', 'scheme')->name('scheme');
Route::view('/risk', 'risk')->name('risk');
Route::view('/stock', 'stock')->name('stock');
Route::view('/philosophy', 'philosophy')->name('philosophy');
Route::view('/culture', 'culture')->name('culture');

Route::view('/terms', 'terms')->name('terms');

//Auth::loginUsingId(3);

Route::middleware(['auth:sanctum', 'verified', 'user_routes'])
->group(function () {
    Route::get('/dashboard', UserDashboard::class)->name('dashboard');
    
    Route::get('/user/dashbaord', UserDashboard::class)->name('user.dashboard');
    Route::get('/user/withdrawals', Withdrawals::class)->name('user.withdrawals');
    Route::get('/user/investments', Investments::class)->name('user.investments');
    Route::get('/user/referrals', Referrals::class)->name('user.referrals');
    Route::get('/user/plans', Plans::class)->name('user.plans');
    Route::get('/user/settings', Settings::class)->name('user.settings');

});

Route::middleware(['auth:sanctum', 'verified', 'admin_routes'])
->group(function () {
    Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');
    Route::get('/dashboard/users', UsersTable::class)->name('admin.users');
    Route::get('/dashboard/investments', InvestmentsTable::class)->name('admin.investments');
    Route::get('/dashboard/withdrawals', WithdrawalsTable::class)->name('admin.withdrawals');
    Route::get('/admin/dashboard/statement/user/{id}', UserProfitTable::class)->name('user.profit');
});