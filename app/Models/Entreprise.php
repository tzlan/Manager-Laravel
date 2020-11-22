<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{

  protected $fillable=['name','no_rue','ville','code_postal'];

    use HasFactory;


}
