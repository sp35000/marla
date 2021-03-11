<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvSrc extends Model
{
    use HasFactory;
    protected $table = 'advsrc';
    public $timestamps = true;
    protected $fillable = ['name'];
}
