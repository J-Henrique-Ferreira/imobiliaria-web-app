<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    use HasFactory;

    public function districts()
    {
        return $this->hasMany(District::class, "city_id");
    }
}
