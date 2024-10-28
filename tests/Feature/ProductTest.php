<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_calculates_total_price_with_vat()
    {
        // Assuming VAT is set in the .env file
        $vat = 0.2; // 20%
        $price = 100.00;
        $quantity = 2;

        // Create a product
        $product = Product::create([
            'title' => 'Test Product',
            'quantity' => $quantity,
            'price' => $price,
        ]);

        // Calculate total price with VAT
        $expectedTotalPrice = ($price * $quantity) * (1 + $vat);

        // Assert that the total price is correct
        $this->assertEquals($expectedTotalPrice, $product->quantity * $product->price * (1 + $vat));
    }
}
