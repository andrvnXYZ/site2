<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    // I-define ang table name kon dili "rentals" ang ngalan sa imong database table
    protected $table = 'rentals';
    protected $primaryKey = 'rentalsID';

    public $timestamps = false;

    // I-define ang mga fields nga pwede ma-fill (Mass Assignment)
    protected $fillable = [
        'vehicle_name',
        'customer_name',
        'price_per_day',
    ];
}