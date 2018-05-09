<?php

use Illuminate\Database\Seeder;
use App\Dish;
use App\Main;
use Faker\Factory as Faker;

class DishesSeeder extends Seeder
{

  protected $dish;

  protected $faker;

  protected $main;

  public function __construct(Dish $dish, Faker $faker, Main $main) {
      $this->dish = $dish;
      $this->faker = $faker;
      $this->main = $main;
  }

    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {

     $faker = $this->faker->create();

     $main_ids = $this->main->pluck('id');

     foreach (range(1, 25) as $x) {
       $this->dish->create([
       'title' => $faker->name(),
       'description' => $faker->sentence(200),
       'image_url' => $faker->imageUrl(800, 800, 'food'),
       'price' => $faker->numberBetween(10, 100),
       'main_id' => $main_ids->random(),
       'created_at' => new \DateTime(),
       'updated_at' => new \DateTime(),
        ]);
      }
    }
}
