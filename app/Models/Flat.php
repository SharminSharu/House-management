<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;
    protected $fillable=['flat_name', 'floor', 'flat_size', 'bed_room', 'balcony', 'wash_room', 'rent_cost', 'status'];

    public function flat_assign()
    {
        return $this->hasMany(Flat_assign::class);
    }
    public function maintenance()
    {
        return $this->hasMany(Maintenance::class);
    }
   
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
  
   
}
