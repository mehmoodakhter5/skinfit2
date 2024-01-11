<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ImageImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            // Process each row here
            // You can access the columns using $row[0], $row[1], etc.

            // Example: Assuming the first column contains the image URLs
            $imageUrl = $row[0];
            print_r($imageUrl);
            // Perform your logic here, such as saving the image URL to the database
            // or any other processing you need to do.
        }
    }

}
