<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'card_name',
        'user_id',
        'card_number',
        'card_expiration_date',
        'card_cvc' ,
        'stock',
        'created_at',
        'updated_at'
    ];
}
