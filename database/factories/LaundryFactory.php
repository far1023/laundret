<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laundry>
 */
class LaundryFactory extends Factory
{
  /**
   * Make dummy data for laundries data
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    $serviceType = [
      'Dry Cleaning',
      'Ironing'
    ];

    $services = [];

    for ($i = 0; $i < rand(1, 2); $i++) {
      $services[] = Arr::random(($serviceType));
    }

    $services = array_unique($services);

    return [
      'id' => rand(77777, 99999),
      'user_id' => rand(1, 10),
      'pick_up' => fake()->address(),
      'sent_to' => fake()->address(),
      'services' => $services,
      'note' => NULL,
      'status' => Arr::random(['Ordered', 'Picked Up!', 'Now Washing', 'Ready', 'Done']),
    ];
  }
}
