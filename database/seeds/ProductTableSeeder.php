<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://ewedit.files.wordpress.com/2016/09/hpsorcstone.jpg?w=405',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at the last chield',
            'price' => 10
        ]);
        $product->save(); 
        
        $product = new \App\Product([
            'imagePath' => 'https://ewedit.files.wordpress.com/2016/09/hpsorcstone.jpg?w=405',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at the last chield',
            'price' => 10
        ]);
        $product->save();   

        $product = new \App\Product([
            'imagePath' => 'https://ewedit.files.wordpress.com/2016/09/hpsorcstone.jpg?w=405',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at the last chield',
            'price' => 10
        ]);
        $product->save();   

        $product = new \App\Product([
            'imagePath' => 'https://ewedit.files.wordpress.com/2016/09/hpsorcstone.jpg?w=405',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at the last chield',
            'price' => 10
        ]);
        $product->save();   
    }
}
