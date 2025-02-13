<?php

namespace Database\Seeders;

use App\Models\BookingProperty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingPropertySeeder extends Seeder
{
    public function run(): void {
        $bookings = [
            [
                'property_id' => 2,
                'check_in' => null,
                'check_out' => null,
                'guests' => 0,
                'total' => 5000,
                'name' => 'Mugisha Eric',
                'email' => 'kabosierik@gmail.com',
                'phone' => '0782390919',
                'date' => '2025-01-03',
                'time' => '10:56',
            ],
            [
                'property_id' => 3,
                'check_in' => null,
                'check_out' => null,
                'guests' => 0,
                'total' => 800,
                'name' => 'Mugisha Eric',
                'email' => 'kabosierik@gmail.com',
                'phone' => '0782390919',
                'date' => '2025-01-04',
                'time' => '13:02',
            ],
            [
                'property_id' => 1,
                'check_in' => null,
                'check_out' => null,
                'guests' => 0,
                'total' => 1200,
                'name' => 'Mugisha Eric',
                'email' => 'kericmugisha@gmail.com',
                'phone' => '0782390919',
                'date' => '2025-01-03',
                'time' => '11:57',
            ],
            [
                'property_id' => 10,
                'check_in' => null,
                'check_out' => null,
                'guests' => 0,
                'total' => 1800,
                'name' => 'Mugisha Eric',
                'email' => 'kabosierik@gmail.com',
                'phone' => '0782390919',
                'date' => '2025-01-10',
                'time' => '18:27',
            ],
        ];

        foreach ($bookings as $booking) {
            BookingProperty::create($booking);
        }

        BookingProperty::factory(10)->create(); // Generate 10 random bookings
    }
}
