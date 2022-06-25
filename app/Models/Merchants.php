<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class Merchants extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'year_founded', 'manager_name'];
    public function merchants()
        { // FKrelationship
        return $this->hasMany(Country::class);
    }
}
