<?php

namespace Database\Seeders;

use App\Models\ShoppingList;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShoppingListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shoppinglists = [
            [
                'name' => 'Milk',
                'price' => 2.50
            ],
            [
                'name' => 'Bread',
                'price' => 1.50
            ],
            [
                'name' => 'Eggs',
                'price' => 3.00
            ],
            [
                'name' => 'Butter',
                'price' => 2.00
            ],
            [
                'name' => 'Cheese',
                'price' => 4.00
            ],
            [
                'name' => 'Yogurt',
                'price' => 1.00
            ],
            [
                'name' => 'Apples',
                'price' => 2.00
            ],
            [
                'name' => 'Bananas',
                'price' => 1.50
            ],
            [
                'name' => 'Oranges',
                'price' => 2.00
            ],
            [
                'name' => 'Grapes',
                'price' => 3.00
            ],
            [
                'name' => 'Meat',
                'price' => 14.95
            ],
            [
                'name' => 'Chicken',
                'price' => 9.43
            ]
        ];

        foreach ($shoppinglists as $shoppinglist) {
            ShoppingList::create($shoppinglist);
        }
    }
}
