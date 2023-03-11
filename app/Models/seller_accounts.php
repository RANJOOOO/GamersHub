<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller_accounts extends Model
{
    use HasFactory;
    function buyer(){
        return $this->belongsToMany(seller_accounts::class, 'id');
    }
}
