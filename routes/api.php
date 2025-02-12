<?php

use App\Models\ShoppingList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ShoppingListController;

Route::get('/shoppinglists', [ShoppingListController::class, 'index'])->name('shoppingListIndex'); 
Route::post('/shoppinglists', [ShoppingListController::class, 'store'])->name('shoppingListStore');
Route::get('/shoppinglists/{id}', [ShoppingListController::class, 'show'])->name('shoppingListShow');
Route::delete('/shoppinglists/{id}', [ShoppingListController::class, 'destroy'])->name('shoppingListDestroy');    
Route::put('/shoppinglists/{id}', [ShoppingListController::class, 'update'])->name('shoppingListUpdate'); 
Route::delete('/delete', [ShoppingListController::class, 'deleteShoppingList'])->name('shoppingListDeleteAll');
