<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'business_id', 'author_id', 'address_city_id', 'address_district_id',
        'address_street', 'address_number', 'bedroom', 'bathroom', 'suite', 'parking_space',
        'area_size', 'value', 'condominium', 'iptu', 'description', 'default_image',
        'images_list_url', 'visible', 'whoner_contact'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'address_city_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'address_district_id');
    }
}
