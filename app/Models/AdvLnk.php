<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvLnk extends Model
{
    use HasFactory;
    protected $table = 'advlnk';
    public $timestamps = true;
    protected $fillable = [
      'origin_fk',
      'target_fk'
];
}
