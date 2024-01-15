<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Product;
use Illuminate\Support\Str;

class ImageImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        $products = [];

        foreach ($rows as $row) {
            $imageName = 'default_image.jpg';
            $shortDescription = null;
            $longDescription = null;

            if (isset($row['product_name'], $row['product_category_id'], $row['product_image'])) {
                $imageName = 'image_' . time() . '.jpg';
                $imageContent = file_get_contents($row['product_image']);
                Storage::disk('public')->put('product/' . $imageName, $imageContent);

                $shortDescription = $row['product_short_description'] ?? null;
                $longDescription = $row['product_long_description'] ?? null;
                
                $products[] = new Product([
                    'product_name' => $row['product_name'],
                    'product_slug' => Str::slug($row['product_name']),
                    'product_category_id' => $row['product_category_id'],
                    'product_image' => $imageName,
                    'product_short_description' => $shortDescription,
                    'product_long_description' => $longDescription,
                    'product_description_one' => $row['product_description_one'] ?? null,
                    'product_description_two' => $row['product_description_two'] ?? null,
                    'product_regular_price' => $row['product_regular_price'] ?? null,
                    'product_discounted_price' => $row['product_discounted_price'] ?? null,
                    'product_label' => $row['product_label'] ?? null,
                    'product_volume' => $row['product_volume'] ?? null,
                    'product_created_by' => 1,
                    'product_updated_by' => 1,
                    'product_barcode' => $row['product_barcode'] ?? null,
                    'product_sub_category_id' => $row['product_sub_category_id'] ?? null,
                    'product_sub_category_id_level_two' => $row['product_sub_category_id_level_two'] ?? null,
                    'product_brand_id' => $row['product_brand_id'] ?? null,
                ]);

            }
            foreach($products as $prduct){
                $prduct->save();
            };
            return($products);  

        }
    }
}
