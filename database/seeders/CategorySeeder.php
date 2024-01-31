<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Category::truncate();
  
        $csvFile = fopen(base_path("database/data/category.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 6170, ",")) !== FALSE) {
           
            if (!$firstline) {
               
                Category::create([
                    "category_id" => $data['0'],
                    "category_name" => $data['1'],
                    "category_slug" => $data['2'],
                    'category_image'=>$data['3'],
                    'category_text'=>$data['4'],
                    'category_feature'=>'true',
                    'category_sort'=>$data['6'],
                    'category_status'=>'true',
                    'category_created_by'=>1,
                    'category_updated_by'=>1,
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
