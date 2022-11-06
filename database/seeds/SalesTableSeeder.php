<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{


    public function run()
    {
        

        \DB::table('sales')->delete();
        
        \DB::table('sales')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'product_id' => '3:1:#000000:1',
                'order_status' => 'Delivered',
                'price' => 91000,
                'created_at' => '2019-02-02 07:32:33',
                'updated_at' => '2019-02-11',
            ),
           
        ));
        
        
    }
}