<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='product';
    protected $fillable = ['product_name','product_slug','product_category_id','product_image','product_image_cloud','product_short_description','product_long_description','product_description_one','product_description_two','product_regular_price','product_discounted_price','product_label','product_volume','product_created_by','product_updated_by','product_barcode','product_sub_category_id','product_sub_category_id_level_two','product_brand_id'];

}
