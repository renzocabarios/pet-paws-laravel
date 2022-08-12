<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    public $table = 'pets';

    protected $fillable = [
        'customer_id',
        'pet_name',
        'age',
        'breed',
        'color',
        'sex',
        'img_path'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function histories()
    {
        return $this->hasMany(History::class);
    }
}
