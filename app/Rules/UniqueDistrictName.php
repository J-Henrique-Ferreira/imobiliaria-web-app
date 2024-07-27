<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\District;

class UniqueDistrictName implements Rule
{
    public function __construct(protected $cityId, protected $districtId = null)
    {
    }

    public function passes($attribute, $value)
    {
        $query = District::where('name', $value)
            ->where('city_id', $this->cityId);

        if ($this->districtId) {
            $query->where('id', '!=', $this->districtId);
        }

        return !$query->exists();
    }

    public function message()
    {
        return 'O nome do distrito já existe nesta cidade.';
    }
}
