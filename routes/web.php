<?php

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

#Главная страница
Route::get('/', [\App\Http\Controllers\AppController::class, 'homepage'])->name(name: 'homepage');
Route::get('/home', [\App\Http\Controllers\AppController::class, 'homepage'])->name(name: 'homepage');
Route::get('/goToPage', [\App\Http\Controllers\AppController::class, 'gotopage']) -> name(name: 'gotopage');

#События
Route::get('events', [\App\Http\Controllers\AppController::class, 'events'])->name(name: 'events');
Route::get('/aboutEvent', [\App\Http\Controllers\AppController::class, 'aboutEvent'])->name(name: 'aboutEvent');

#Поиск новостей
Route::get('/find', [\App\Http\Controllers\AppController::class, 'find'])->name(name: 'find');
Route::get('/search', [\App\Http\Controllers\AppController::class, 'search'])->name(name: 'search');

#Новости
Route::get('/showNews/{nameNews}', [\App\Http\Controllers\AppController::class, 'showNews'])->name(name: 'showNews');
Route::get('/allNews', [\App\Http\Controllers\AppController::class, 'allNews'])->name(name: 'allNews');
Route::get('/newsAdd', [\App\Http\Controllers\AppController::class, 'newsAdd'])->name(name: 'newsAdd');

#Почта
Route::get('/mailto', [\App\Http\Controllers\AppController::class, 'mailto'])->name(name: 'mailto');

#Админка
Route::get('/admin', [\App\Http\Controllers\AppController::class, 'adminEnter'])->name(name: 'adminEnter');

#Навигационная панель
Route::get('/about', [\App\Http\Controllers\AppController::class, 'about'])->name(name: 'about');

Route::get('/members', [\App\Http\Controllers\AppController::class, 'members'])->name(name: 'members');

Route::get('/activity', [\App\Http\Controllers\AppController::class, 'activity'])->name(name: 'activity');

Route::get('/social', [\App\Http\Controllers\AppController::class, 'social'])->name(name: 'social');

Route::get('/offering', [\App\Http\Controllers\AppController::class, 'offering'])->name(name: 'offering');

Route::get('/delegation', [\App\Http\Controllers\AppController::class, 'delegation'])->name(name: 'delegation');

Route::get('/conferencies', [\App\Http\Controllers\AppController::class, 'conferencies'])->name(name: 'conferencies');

Route::get('/contacts', [\App\Http\Controllers\AppController::class, 'contacts'])->name(name: 'contacts');

Route::get('/policy', [\App\Http\Controllers\AppController::class, 'policy'])->name(name: 'policy');

// роуты подвального уровня (1.1)

Route::get('/link11', [\App\Http\Controllers\AppController::class, 'link11'])->name(name: 'link11');
/* Spp1 basement point12 */
Route::get('/link12', [\App\Http\Controllers\AppController::class, 'link12'])->name(name: 'link12');
/* Spp1 basement point123 */
Route::get('/link11', [\App\Http\Controllers\AppController::class, 'link11'])->name(name: 'link11');
/* Spp1 basement point1234 */
Route::get('/link11', [\App\Http\Controllers\AppController::class, 'link11'])->name(name: 'link11');
/* Spp1 basement point1 */
Route::get('/link111', [\App\Http\Controllers\AppController::class, 'link111'])->name(name: 'link111');
/* Spp1 basement point1 */
Route::get('/link112', [\App\Http\Controllers\AppController::class, 'link112'])->name(name: 'link112');
/* Spp1 basement point1 */
Route::get('/link113', [\App\Http\Controllers\AppController::class, 'link113'])->name(name: 'link113');

/* Spp1 basement point1 */
Route::get('/link121', [\App\Http\Controllers\AppController::class, 'link121'])->name(name: 'link121');
/* Spp1 basement point1 */
Route::get('/link122', [\App\Http\Controllers\AppController::class, 'link122'])->name(name: 'link122');
/* Spp1 basement point1 */
Route::get('/link123', [\App\Http\Controllers\AppController::class, 'link123'])->name(name: 'link123');
/* Spp1 basement point1 */
Route::get('/link1211', [\App\Http\Controllers\AppController::class, 'link1211'])->name(name: 'link1211');

Route::get('/link31', [\App\Http\Controllers\AppController::class, 'link31'])->name(name: 'link31');
Route::get('/link32', [\App\Http\Controllers\AppController::class, 'link32'])->name(name: 'link32');
Route::get('/link33', [\App\Http\Controllers\AppController::class, 'link33'])->name(name: 'link33');
Route::get('/link34', [\App\Http\Controllers\AppController::class, 'link34'])->name(name: 'link34');
Route::get('/link35', [\App\Http\Controllers\AppController::class, 'link35'])->name(name: 'link35');
Route::get('/link36', [\App\Http\Controllers\AppController::class, 'link36'])->name(name: 'link36');
Route::get('/link37', [\App\Http\Controllers\AppController::class, 'link37'])->name(name: 'link37');
Route::get('/link311', [\App\Http\Controllers\AppController::class, 'link311'])->name(name: 'link311');
Route::get('/link312', [\App\Http\Controllers\AppController::class, 'link312'])->name(name: 'link312');
Route::get('/link313', [\App\Http\Controllers\AppController::class, 'link313'])->name(name: 'link313');
Route::get('/link314', [\App\Http\Controllers\AppController::class, 'link314'])->name(name: 'link314');
Route::get('/link315', [\App\Http\Controllers\AppController::class, 'link315'])->name(name: 'link315');
Route::get('/link316', [\App\Http\Controllers\AppController::class, 'link316'])->name(name: 'link316');
Route::get('/link317', [\App\Http\Controllers\AppController::class, 'link317'])->name(name: 'link317');
Route::get('/link318', [\App\Http\Controllers\AppController::class, 'link318'])->name(name: 'link318');
Route::get('/link51', [\App\Http\Controllers\AppController::class, 'link51'])->name(name: 'link51');
Route::get('/link52', [\App\Http\Controllers\AppController::class, 'link52'])->name(name: 'link52');
Route::get('/link53', [\App\Http\Controllers\AppController::class, 'link53'])->name(name: 'link53');
Route::get('/link54', [\App\Http\Controllers\AppController::class, 'link54'])->name(name: 'link54');
Route::get('/link55', [\App\Http\Controllers\AppController::class, 'link55'])->name(name: 'link55');
Route::get('/link56', [\App\Http\Controllers\AppController::class, 'link56'])->name(name: 'link56');
Route::get('/link61', [\App\Http\Controllers\AppController::class, 'link61'])->name(name: 'link61');
Route::get('/link62', [\App\Http\Controllers\AppController::class, 'link62'])->name(name: 'link62');
Route::get('/link63', [\App\Http\Controllers\AppController::class, 'link63'])->name(name: 'link63');
Route::get('/link64', [\App\Http\Controllers\AppController::class, 'link64'])->name(name: 'link64');
Route::get('/link65', [\App\Http\Controllers\AppController::class, 'link65'])->name(name: 'link65');
Route::get('/link66', [\App\Http\Controllers\AppController::class, 'link66'])->name(name: 'link66');
Route::get('/link71', [\App\Http\Controllers\AppController::class, 'link71'])->name(name: 'link71');
Route::get('/link72', [\App\Http\Controllers\AppController::class, 'link72'])->name(name: 'link72');
Route::get('/link73', [\App\Http\Controllers\AppController::class, 'link73'])->name(name: 'link73');
Route::get('/link74', [\App\Http\Controllers\AppController::class, 'link74'])->name(name: 'link74');
Route::get('/link75', [\App\Http\Controllers\AppController::class, 'link75'])->name(name: 'link75');
Route::get('/link76', [\App\Http\Controllers\AppController::class, 'link76'])->name(name: 'link76');
Route::get('/link77', [\App\Http\Controllers\AppController::class, 'link77'])->name(name: 'link77');
Route::get('/link78', [\App\Http\Controllers\AppController::class, 'link78'])->name(name: 'link78');
Route::get('/link79', [\App\Http\Controllers\AppController::class, 'link79'])->name(name: 'link79');

Route::get('/link91', [\App\Http\Controllers\AppController::class, 'link91'])->name(name: 'link91');
Route::get('/link92', [\App\Http\Controllers\AppController::class, 'link92'])->name(name: 'link92');
Route::get('/link93', [\App\Http\Controllers\AppController::class, 'link93'])->name(name: 'link93');
Route::get('/link94', [\App\Http\Controllers\AppController::class, 'link94'])->name(name: 'link94');
Route::get('/link95', [\App\Http\Controllers\AppController::class, 'link95'])->name(name: 'link95');
Route::get('/link96', [\App\Http\Controllers\AppController::class, 'link96'])->name(name: 'link96');
Route::get('/link97', [\App\Http\Controllers\AppController::class, 'link97'])->name(name: 'link97');
Route::get('/link98', [\App\Http\Controllers\AppController::class, 'link98'])->name(name: 'link98');
Route::get('/link99', [\App\Http\Controllers\AppController::class, 'link99'])->name(name: 'link99');
