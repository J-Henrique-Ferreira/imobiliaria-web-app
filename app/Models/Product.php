<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "category_id",
        "business_id",
        "author_id",
        "address_city_id",
        "address_district_id",
        "address_street",
        "address_number",
        "bedroom",
        "bathroom",
        "suite",
        "parking_space",
        "area_size",
        "value",
        "condominium",
        "iptu",
        "description",
        "default_image",
        "images_list_url",
        "visible",
        "whoner_contact"
    ];
}
