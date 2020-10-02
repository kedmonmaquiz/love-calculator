<?php

namespace App\Models;

use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function owner(){
    	return $this->belongsTo(Owner::class);
    }
}
