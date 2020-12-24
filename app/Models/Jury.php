<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jury extends Model
{

    protected $fillable=['id','name','first_name','date_n','status'];
    protected $table = 'jurys';
    use HasFactory;
}
