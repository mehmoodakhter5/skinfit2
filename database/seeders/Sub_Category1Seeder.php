<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sub_category_1;

class Sub_Category1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Sub_category_1::truncate();
  
        $csvFile = fopen(base_path("database/data/sub_category.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 6170, ",")) !== FALSE) {
           
            if (!$firstline) {
               
                Sub_category_1::create([
                    "sub_category_level_2_id" => $data['0'],
                    "sub_category_id" => $data['1'],
                    "sub_category_level_2_name" => $data['2'],
                    'sub_category_level_2_slug'=>$data['3'],
                    'sub_category_level_2_text'=>$data['4'],
                    'attribute_ids'=>$data['5'],
                    'sub_category_level_2_status'=>'true',
                    'sub_category_level_2_created_by'=>1,
                    'sub_category_level_2_updated_by'=>1,
                
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
