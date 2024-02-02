<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sub_category;

class Sub_CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Sub_category::truncate();
  
        $csvFile = fopen(base_path("database/data/sub_category.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 6170, ",")) !== FALSE) {
           
            if (!$firstline) {
               
                Sub_category::create([
                    "sub_category_id" => $data['0'],
                    "category_id" => $data['1'],
                    "sub_category_name" => $data['2'],
                    'sub_category_slug'=>$data['3'],
                    'sub_category_img'=>$data['4'],
                    'sub_category_sort'=>$data['5'],
                    'sub_category_text'=>$data['6'],
                    'attribute_ids'=>$data['7'],
                    'sub_category_status'=>'true',
                    'sub_category_created_by'=>1,
                    'sub_category_updated_by'=>1,
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
