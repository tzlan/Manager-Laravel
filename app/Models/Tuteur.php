<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{

    protected $fillable=['id','name','first_name','date_n','status'];

    use HasFactory;
}
