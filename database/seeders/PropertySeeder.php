<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $properties = [
            [
                'type' => 'apartment',
                'price' => 500,
                'title' => 'Modern Apartment',
                'description' => 'A stylish and modern apartment located in the heart of Kayonza. Featuring 3 spacious bedrooms, 2 fully equipped bathrooms, and a large living area with 1,200 sq. ft. of space. Perfect for families seeking comfort and convenience.',
                'location' => 'Rwamagana, Rwanda',
                'beds' => 3,
                'bath' => 2,
                'area' => 1200,
                'featured' => true,
                'images' => json_encode([
                    "assets/img/properties/modern-apartment-architecture.jpg",
                    "assets/img/properties/luxury-water-swimming-resort-hotel.jpg",
                    "assets/img/properties/modern-apartment-architecture.jpg"
                ]),
            ],
            [
                'type' => 'villa',
                'price' => 5000,
                'title' => 'Luxury Villa',
                'description' => 'An exquisite villa located in the scenic town of Rubavu. This property boasts 5 spacious bedrooms, 4 elegant bathrooms, and a grand living room spread across 3,500 sq. ft. Designed for luxury living with stunning views.',
                'location' => 'Rubavu, Rwanda',
                'beds' => 5,
                'bath' => 4,
                'area' => 3500,
                'featured' => true,
                'images' => json_encode([
                    "assets/img/properties/orchid-summer-resort-rattan-nature.jpg",
                    "assets/img/properties/rattan-swimming-luxury-relaxation-pool.jpg",
                    "assets/img/properties/modern-apartment-architecture.jpg"
                ]),
            ],
            [
                'type' => 'studio',
                'price' => 800,
                'title' => 'Cozy Studio',
                'description' => 'A charming and cozy studio in the bustling city of Kigali. Featuring 1 bedroom, 1 modern bathroom, and a compact 600 sq. ft. living space. Ideal for singles or couples seeking affordability without compromising on comfort.',
                'location' => 'Kigali, Rwanda',
                'beds' => 1,
                'bath' => 1,
                'area' => 600,
                'featured' => false,
                'images' => json_encode([
                    "assets/img/properties/orchid-summer-resort-rattan-nature.jpg",
                    "assets/img/properties/rattan-swimming-luxury-relaxation-pool.jpg",
                    "assets/img/properties/modern-apartment-architecture.jpg"
                ]),
            ],
            [
                'type' => 'apartment',
                'price' => 1500,
                'title' => 'Elegant Apartment',
                'description' => 'This elegant 2-bedroom apartment in Huye offers a modern lifestyle with 2 bathrooms and a spacious living area spanning 1,400 sq. ft. Enjoy urban living with high-end finishes and easy access to amenities.',
                'location' => 'Huye, Rwanda',
                'beds' => 2,
                'bath' => 2,
                'area' => 1400,
                'featured' => false,
                'images' => json_encode([
                    "assets/img/properties/modern-apartment-architecture.jpg",
                    "assets/img/properties/luxury-water-swimming-resort-hotel.jpg",
                    "assets/img/properties/modern-apartment-architecture.jpg"
                ]),
            ],
            [
                'type' => 'villa',
                'price' => 8000,
                'title' => 'Grand Villa',
                'description' => 'An expansive 6-bedroom villa in Musanze, perfect for large families or hosting guests. This property includes 5 bathrooms and a massive 4,500 sq. ft. of luxurious living space surrounded by lush greenery.',
                'location' => 'Musanze, Rwanda',
                'beds' => 6,
                'bath' => 5,
                'area' => 4500,
                'featured' => true,
                'images' => json_encode([
                    "assets/img/properties/orchid-summer-resort-rattan-nature.jpg",
                    "assets/img/properties/rattan-swimming-luxury-relaxation-pool.jpg",
                    "assets/img/properties/modern-apartment-architecture.jpg"
                ]),
            ],
            [
                'type' => 'studio',
                'price' => 750,
                'title' => 'Affordable Studio',
                'description' => 'Located in Gicumbi, this affordable studio apartment is designed for budget-conscious individuals. Features 1 bedroom, 1 bathroom, and a cozy living space of 550 sq. ft. with modern fittings.',
                'location' => 'Gicumbi, Rwanda',
                'beds' => 1,
                'bath' => 1,
                'area' => 550,
                'featured' => false,
                'images' => json_encode([
                    "assets/img/properties/modern-apartment-architecture.jpg",
                    "assets/img/properties/luxury-water-swimming-resort-hotel.jpg",
                    "assets/img/properties/modern-apartment-architecture.jpg"
                ]),
            ],
        ];

        foreach ($properties as $property) {
            Property::create($property);
        }
    }
}
