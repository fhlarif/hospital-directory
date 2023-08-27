<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'ins_email', 'ins_phone', 'address_1', 'address_2', 'address_3', 'city', 'postcode', 'state', 'country', 'latitude', 'longitude'];
}
