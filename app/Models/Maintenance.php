<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
    protected $fillable=['flat_id', 'description', 'cost', 'reported_date', 'status'];

    public function flat()
    {
        return $this->belongsTo(Flat::class);
    }
}
