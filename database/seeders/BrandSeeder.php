<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Brand::truncate();
  
        $csvFile = fopen(base_path("database/data/brand.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 6170, ",")) !== FALSE) {
           
            if (!$firstline) {
               
                Brand::create([
                    "brand_id" => $data['0'],
                    "brand_name" => $data['1'],
                    "brand_slug" => $data['2'],
                    'brand_featured'=>'true',
                    'brand_rack'=>'NULL',
                    'brand_most_search'=>'true',
                    'brand_supplier'=>$data['6'],
                    'logistics_type'=>$data['7'],
                    'brand_active'=>'true',
                    'brand_text'=>$data['9'],
                    'brand_image'=>$data['10'],
                    'brand_banner'=>$data['11'],
                    'brand_banner_extra1'=>$data['12'],
                    'country_id'=>$data['16'],
                    'brand_status'=>'true',    
                    'brand_created_by'=>1,
                    'brand_updated_by'=>1,
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }

}
