<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider; // Глобальные ограничения


/* 22. Глобальные ограничения
class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Route::pattern('id', '[0-9]+');
    }
}
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return '!!!';
});

Route::get('/about', function () {
    return 'about page';
});
Route::get('/about/{id}', function ($id) {
    return 'Номер страницы ' . $id;
});
Route::get('/animals/{catId}/{mouseId}', function ($catId, $mouseId = 1) {
    return 'ID кошки: ' . $catId . 'ID мыши: ' . $mouseId;
});

// Ограничение параметров маршрутов в Laravel
Route::get('/post/{id}', function ($id) {
    return 'post ' . $id;
})->where('id', '[0-9]+'); // where - условие "где"

// Ограничения на несколько параметров
Route::get('/post/{$slug}/{id}', function ($slug, $id) {
    return 'post '. $slug .'id ' . $id;
})->where('slug', '[a-z0-9_-]+') // a-z - любые строчные (маленькие) буквы латинского алфавита от a до z
    ->where('id', '[0-9]+'); // 0-9 - любые цифры от 0 до 9

// Шаблонные ограничения параеметров маршрутов
Route::get('/posts/{id}' , function ($id) {
    return 'post ' . $id;
})->whereNumber('id'); // ограничение только цифрами

// Шаблонные ограничения параеметров маршрутов
Route::get('/posts/{slug}' , function ($slug) {
    return 'posts ' . $slug;
})->whereAlpha('slug'); // ограничение только буквами

// Шаблонные ограничения параеметров маршрутов
Route::get('/posts/{slug}' , function ($slug) {
    return 'posts ' . $slug;
})->whereAlphaNumeric('slug'); // ограничение только цифрами и буквами

// Шаблонные ограничения параеметров маршрутов
Route::get('/users/{order}' , function ($order) {
    return 'sort ' . $order;
})->whereIn('order',  ['name', 'surname', 'age']); // ограничение только цифрами и буквами
