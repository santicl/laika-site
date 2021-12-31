<?php
use Illuminate\Database\Seeder;
use App\Take;

class TakeProductsSeeder extends Seeder
{
    public function run()
    {
        factory(Take::class, 3)->create();
    }
}