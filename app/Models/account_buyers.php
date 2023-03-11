<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account_buyers extends Model
{
    use HasFactory;
    function seller(){
        return $this->belongsToMany(seller_accounts::class, 'id');
    }
}
