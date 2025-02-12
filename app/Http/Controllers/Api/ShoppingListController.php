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
            'owner' => 'required|string'
        ]);

        $shoppinglist = ShoppingList::create([
            'owner' => $validated['owner']
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
            'owner' => 'required|string'
        ]);

        $shoppinglist->update([
            'owner' => $validated['owner']
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
    }
}
