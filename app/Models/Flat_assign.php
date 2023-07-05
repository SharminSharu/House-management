<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\HasMany;

class Flat_assign extends Model
{
    use HasFactory;
    protected $fillable=['tenant_id', 'flat_id', 'assign_date', 'rent_cost'];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class,'tenant_id','id');
    }

    public function flat()
    {
        return $this->belongsTo(Flat::class,'flat_id','id');
    }
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
 

}
