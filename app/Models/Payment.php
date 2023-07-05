<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable=
    ['flatassign_id', 
    'purpose',
     'paid', 
     'due',
     'payment_date'];
     
    // public function tenant()
    // {
    //     return $this->belongsTo(Tenant::class);
    // }
    public function flat_assign()
    {
        return $this->belongsTo(Flat_assign::class,'flatassign_id','id');
    }
   

    public function tenant()
    {
        return $this->belongsTo(Tenant::class,'tenant_id','id');
    }

    public function flat()
    {
        return $this->belongsTo(Flat::class,'flat_id','id');
}
}
