<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Income;
use App\Models\Expense;

class IncomeExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Income::create([
            'date' => '2025-02-10',
            'amount' => 1500,
            'tenant' => 'John Doe',
            'property' => 'Apartment 101',
            'description' => 'Monthly rent'
        ]);

        Expense::create([
            'date' => '2025-02-05',
            'amount' => 200,
            'category' => 'Utilities',
            'property' => 'Apartment 101',
            'description' => 'Electricity bill'
        ]);
    }
}
