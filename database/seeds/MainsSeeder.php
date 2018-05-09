<?php
use App\Main;
use Illuminate\Database\Seeder;

class MainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     *
     */

    protected $main;

    public function __construct(Main $main){
        $this->main = $main;
    }

    public function run()
    {
        $this->main->create([
          'title' =>'Breakfast'
        ]);

        $this->main->create([
          'title' =>'Lunch'
        ]);

        $this->main->create([
          'title' =>'Dinner'
        ]);

        $this->main->create([
          'title' =>'Specials'
        ]);

    }
}
