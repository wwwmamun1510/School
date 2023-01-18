School

A brief description of what this project does and who it's for


## Acknowledgements

 - [Awesome Readme Templates](https://awesomeopensource.com/project/elangosundar/awesome-README-templates)
 - [Awesome README](https://github.com/matiassingers/awesome-readme)
 - [How to write a Good readme](https://bulldogjob.com/news/449-how-to-write-a-good-readme-for-your-github-project)


## Badges

Add badges from somewhere like: [shields.io](https://shields.io/)

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)
[![GPLv3 License](https://img.shields.io/badge/License-GPL%20v3-yellow.svg)](https://opensource.org/licenses/)
[![AGPL License](https://img.shields.io/badge/license-AGPL-blue.svg)](http://www.gnu.org/licenses/agpl-3.0)


## 🚀 About Me
I'm a full stack developer...


# Hi, I'm Mamun! 👋
![School-1](https://user-images.githubusercontent.com/97294949/213108536-82590125-8fc5-4cfb-bca0-4b2b13e7f0f3.GIF)
![School-3](https://user-images.githubusercontent.com/97294949/213108580-b952e254-5034-4f93-a92e-420fad67b6e1.GIF)


## Installation

Install my-project with npm

```bash
 
Install my- project with Gitbash

//First Project Installation Command
composer create-project laravel/laravel School//
Composer require laravel/ui//
php artisan ui bootstrap --auth//
npm Install//
npm run dev//
php artisan migrate//
//End Installation

//Controller
php artisan make:controller StudentController

//Models
php artisan make:Model Student -m

<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [StudentController::class, 'index']);
Route::get('/edit/{id}', [StudentController::class, 'edit']);
Route::get('/show/{id}', [StudentController::class, 'show']);
Route::get('/create', [StudentController::class, 'create']);
Route::post('/store', [StudentController::class, 'store']);
Route::post('/update/{id}', [StudentController::class, 'update']);



    
