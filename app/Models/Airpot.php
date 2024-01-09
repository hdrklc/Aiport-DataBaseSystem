<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airpot extends Model
{
    use HasFactory;
    protected $table = 'airports';

    protected $fillable = [
        'airport_name', 'airport_type','owner','city','address','opdate','altitude','website','rwl','rws','number','geometrylat','geometrylng',
    ];
}
