<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $fillable=['name', 'photo', 'email','phn_no','nid', 'gender', 'occupation', 'family_member', 'per_address', 'move_in', 'status'];

    public function flat_assign()
    {
        return $this->hasMany(Flat_assign::class);
    }
    
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}
