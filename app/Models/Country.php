<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// City model usage
use App\Models\City;
use App\Models\Merchants;
class Country extends Model
{
 use HasFactory;
 // to allow mass assignment of these fields
 protected $fillable = ['country_name', 'country_code'];
 public function cities()
 { // FKrelationship
 return $this->hasMany(City::class);
 }
 public function merchants()
 { // FKrelationship
 return $this->hasMany(Merchants::class);
 }
}

