<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('table_products')->insert(
            
                      [
                        'name'=>'MI10 mobile',
                        'price'=>'55,000',
                        'product'=>'plastic',
                        'gallary'=>'https://www.google.com/aclk?sa=L&ai=DChcSEwj8ju_XnMjuAhVbMSsKHeLkBrYYABAGGgJzZg&sig=AOD64_2pQRkhxrD_Zopi4_4GUkvsnEFxtQ&adurl&ctype=5&ved=2ahUKEwjjo-PXnMjuAhWgn0sFHdqDACUQvhd6BAgBEDs',
                        'category'=>'a smart phone 2 gb ram mobile',
                        
                        ]
    );
        
    }
}
