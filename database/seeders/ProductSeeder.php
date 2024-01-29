<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Product::truncate();
  
        $csvFile = fopen(base_path("database/data/product.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 6170, ",")) !== FALSE) {
            if (!$firstline) {
                Product::create([
                    "id" => $data['0'],
                    "product_category_id" => $data['1'],
                    "product_sub_category_id" => $data['2'],
                    'product_sub_category_id_level_two'=>$data['3'],
                    'product_brand_id'=>$data['4'],
                    'product_name'=>$data['5'],
                    'product_slug'=>$data['6'],
                    'product_sku'=>$data['7'],
                    'product_barcode'=>$data['8'],
                    'product_image'=>$data['9'],
                    'product_image_cloud'=>$data['10'],
                    'product_short_description'=>$data['11'],
                    'product_long_description'=>$data['12'],
                    'product_description_one'=>$data['13'],
                    'product_description_two'=>$data['14'],
                    'product_regular_price'=>$data['15'],
                    'product_discounted_price'=>$data['17'],
                    'product_label'=>$data['27'],
                    'product_volume'=>$data['27'],
                    'product_featured'=>'false',
                    'product_dropship'=>'false',
                    'product_active'=>'true',
                    'product_status'=>'true',
                    'product_created_by'=>1,
                    'product_updated_by'=>1,
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }

}
