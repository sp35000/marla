<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvTgt extends Model
{
    use HasFactory;
    protected $table = 'advtgt';
    public $timestamps = true;
    protected $fillable = [
      'url',
      'advtext'
];
}
