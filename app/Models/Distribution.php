<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipient_name',
        'recipient_contact',
        'amount',
        'details',
        'item_image_path',
    ];
}