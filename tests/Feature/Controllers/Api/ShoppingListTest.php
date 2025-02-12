<?php

namespace Tests\Feature\Controllers\Api;

use Tests\TestCase;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Container\Attributes\Database;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShoppingListTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfCanGetAllTheProductsFromShoppingList()
    {
        $this->seed(DatabaseSeeder::class);


        $response = $this->getJson(route('shoppingListIndex'));

        $response->assertStatus(200)
                 ->assertJsonCount(12);
    }

    public function test_CheckIfCanCreateAProductInShoppingList()
    {   
        $response = $this->postJson(route('shoppingListStore'), [
            'name' => 'Test Product',
            'price' => 10.00
        ]);

        $response->assertStatus(201)
                 ->assertJson([
                     'name' => 'Test Product',
                     'price' => 10.00
                 ]);
    }

    public function test_CheckIfCanGetJustOneProductFromShoppingList() {
        $this->seed(DatabaseSeeder::class);

        $response = $this->getJson(route('shoppingListShow', 1));
        
        $data = ['id' => 1];
        $response->assertStatus(200)
                 ->assertJsonFragment($data);
    }

    public function test_CheckIfCanUpdateAProductInShoppingList() {
        $this->seed(DatabaseSeeder::class);

        $response = $this->putJson(route('shoppingListUpdate', 1), [
            'name' => 'La Leche',
            'price' => 999.00
        ]);

        $response->assertStatus(200)
                 ->assertJson([
                     'name' => 'La Leche',
                     'price' => 999.00
                 ]);
    }

    public function test_CheckIfCanDeleteAProductFromShoppingList() {
        $this->seed(DatabaseSeeder::class);

        $response = $this->deleteJson(route('shoppingListDestroy', 1));

        $response->assertStatus(200)
                 ->assertJson([
                     'message' => 'Product from ShoppingList deleted Succesfully'
                 ]);
    }

    public function test_CheckIfCanDeleteAllTheProductsFromTheShoppingList() {
        $this->seed(DatabaseSeeder::class);

        $response = $this->deleteJson(route('shoppingListDeleteAll'));

        $response->assertStatus(200)
                 ->assertJson([
                     'message' => 'All Products from ShoppingList deleted Succesfully'
                 ]);
    }

    public function test_CheckIfCanGetAnErrorWhenTryingToCreateAProductThatAlreadyExists() {
        $this->seed(DatabaseSeeder::class);

        $response = $this->postJson(route('shoppingListStore'), [
            'name' => 'Milk',
            'price' => 2.50
        ]);

        $response->assertStatus(409)
                 ->assertJson([
                     'message' => 'Product already exists'
                 ]);
    }
}
