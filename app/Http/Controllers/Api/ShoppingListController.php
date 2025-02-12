<?php

namespace App\Http\Controllers\Api;

use App\Models\ShoppingList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShoppingListController extends Controller
{
    public function index()
    {
        $shoppinglist = ShoppingList::all();
        return response()->json($shoppinglist, 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'price' => 'required|between:0,99.99'
        ]);

        $shoppinglist = ShoppingList::create([
            'name' => $validated['name'],
            'price' => $validated['price']
        ]);
        
        $shoppinglist->save();
        return response()->json($shoppinglist, 201);
    }

    public function show(string $id)
    {
        $shoppinglist = ShoppingList::findOrFail($id);
        return response()->json($shoppinglist, 200);
    }

    public function update(Request $request, string $id)
    {
        $shoppinglist = ShoppingList::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'string',
            'price' => 'between:0,99.99',
        ]);

        $shoppinglist->update([
            'name' => $validated['name'],
            'price' => $validated['price']
        ]);

        $shoppinglist->save();
        return response()->json($shoppinglist, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shoppinglist = ShoppingList::findOrFail($id);
        $shoppinglist->delete();
        return response()->json(["message" => "Product from ShoppingList deleted Succesfully"], 200);
    }

    public function deleteShoppingList()
    {
        $shoppinglist = ShoppingList::all();
        $shoppinglist->each->delete();
        return response()->json(["message" => "All Products from ShoppingList deleted Succesfully"], 200);
    }
}
