<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AccountType\AccountType;

class AccountTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accountTypesData = [
            [
                'types' => 'admin'
            ],
            [
                'types' => 'vendor'
            ],
            [
                'types' => 'customer'
            ]
        ];

        foreach ($accountTypesData as $data) {
            $total = AccountType::where('types', $data['types'])->count();
            if ($total == 0) {
                AccountType::create($data);
            }
        }
    }
}
