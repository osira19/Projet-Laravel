<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CiteController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\ProvController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AchatController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TerrainController;
use App\Http\Controllers\LogementController;

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







Route::group(['prefix' => 'login'], function(){
    Route::get('/',[AuthController::class, 'index'])->name('login');
    Route::post('login',[AuthController::class, 'check'])->name('check_login');
});

Route::post('saveUser',[UserController::class, 'save'])->name('add_user');
Route::group(["middleware"=>("auth")], function(){
    Route::group(["middleware"=>("admin")], function(){
        Route::group(['prefix' => 'user'], function(){
            Route::get('/',[UserController::class, 'index'])->name('user');
            Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit_user');
            Route::post('update', [UserController::class, 'update'])->name('update_user');
        });
    });
});

Route::group(["middleware"=>("auth")], function(){
    Route::get('logout',[AuthController::class, 'logout'])->name('logout');
    Route::group(['prefix' => 'client'], function(){
        Route::get("/", [ClientController::class, 'index'])->name('client');
        Route::post('save',[ClientController::class, 'save'])->name('add_client');
        Route::get('edit/{id}', [ClientController::class, 'edit'])->name('edit_client');
        Route::post("update",[ClientController::class, 'update'])->name('update_client');
        Route::get('delete/{id}', [ClientController::class, 'delete'])->name('delete_client');
    });
});
Route::group(["middleware"=>("auth")], function(){
    Route::group(["middleware"=>("admin")], function(){
        Route::group(['prefix' => 'agence'], function(){
            Route::get('/',[AgentController::class, 'index'])->name('agence');
            Route::post('save',[AgentController::class, 'save'])->name('add_agence');
            Route::post('saveProv',[ProvController::class, 'save'])->name('add_prov');
            Route::post('saveCite',[CiteController::class, 'save'])->name('add_cite');
        });
    });
});

Route::group(["middleware"=>("auth")], function(){
        Route::group(['prefix' => 'logement'], function(){
            Route::get('/',[LogementController::class, 'index'])->name('logement');
            Route::get('achatlog/idcli={id}',[LogementController::class, 'achatClient'])->name('achatlogement');
            Route::group(["middleware"=>("admin")], function(){
            Route::post('save',[LogementController::class, 'save'])->name('add_log');
            Route::post('saveTerrain',[TerrainController::class,'save'])->name('add_terr');
        });
    });
});

Route::group(["middleware"=>("auth")], function(){
    Route::group(['prefix' => 'achat'], function(){
        Route::get("/", [AchatController::class, 'index'])->name('achat');
        Route::post('saveAchat',[AchatController::class, 'save'])->name('add_achat');
    });
});

Route::group(["middleware"=>("auth")], function(){
    Route::group(["middleware"=>("admin")], function(){
        Route::get('/dashboard',[DashController::class, 'index'])->name('dashboard');
    });
});