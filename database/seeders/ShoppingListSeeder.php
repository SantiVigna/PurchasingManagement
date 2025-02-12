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
                'owner' => 'Santino',
            ],
            [
                'owner' => 'Tiziano',
            ],
            [
                'owner' => 'Gaston',
            ],
            [
                'owner' => 'Mariana',
            ],
            [
                'owner' => 'Luca',
            ],
        ];

        foreach ($shoppinglists as $shoppinglist) {
            ShoppingList::create($shoppinglist);
        }
    }
}
