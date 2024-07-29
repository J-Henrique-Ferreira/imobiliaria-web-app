<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = ["name"];

    use HasFactory;

    public function districts()
    {
        return $this->hasMany(District::class, "city_id")->orderBy("name");
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'address_city_id');
    }
}
