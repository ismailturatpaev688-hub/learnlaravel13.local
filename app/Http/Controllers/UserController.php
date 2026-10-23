<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = ['John', 'Jane', 'Jim'];

        /* 48. Вывод переменных в тегах Blade */
        $data = [
            'var1' => 'aaa',
            'var2' => 'bbb',
            'var3' => 'ccc',

            /* 49. Вывод переменных в атрибутах */
            'cls' => 'active',
            'val' => 'text',
            /* 50. Выполнение произвольного кода в командах Blade */
            'first' => 'john',
            'last' => 'smith',
            /* 51. Арифметические операции в Blade в Laravel */
            'a' => 10,
            'b' => 3,
            /* 52. Работа с массивами в Blade */
            'arr' => [1, 2, 3, 5, 7, 8],
            /* 53. Проверка перменных в Blade */
            'var' => true,
            /* 54. Вывод неэкранированных данных в Blade */
            'name' => '<b>John</b>',
            /* 56. Условия в Blade в Laravel */
            'isAuth' => true,
            /* 58. Директива @elseif в Blade */
            'num' => 5,
            /* 59. Директива @ unless - являетсся отрицанием */
            'Auth' => false,
            /* 60. Сложные команды в условиях Blade */
            'arr1' => [1, 2, 3],
            /* 61. Директива @foreach */
            'arr2' => ['a', 'b', 'c', 'd', 'e', 'f'],
            /* 63. Условия и циклы @ foreach в Blade */
            'arr3' => [-1, 2, -3, 4, 5],
            /* 64. Вложенные циклы @ foreach в Blade */
            'arr4' => [[1, 2, 3], [4, 5, 6], [7, 8, 9]],
            /* 65. Перебор многомерных массивов */
            'users1' => [
                [
                    'name' => 'user1',
                    'age' => 21,
                ],
                [
                    'name' => 'user2',
                    'age' => 22,
                ],
                [
                    'name' => 'user3',
                    'age' => 23,
                ],
            ],
            /* 66. Цикл @ forelse в Blade */
            'arr5' => ['a', 'b', 'c'],
            /* 68. Директива @ break в Blade */
            'arr6' => [1, 2, 3, 4, 5],
            /* 70. Цикл @ for в Blade */
            'count' => 3,
        ];


        return view('users', compact('users'), $data);
    }
}
