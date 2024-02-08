<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $table = 'students';
    protected $filable = [
        'std_name',
        'std_roll',
        'std_adress'
    ];
}
