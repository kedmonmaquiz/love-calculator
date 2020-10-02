<?php

namespace App\Models;

use App\Models\Friend;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function friends(){
    	return $this->hasMany(Friend::class);
    }
}
