<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    protected $fillable=['id','student_id','offre_id','entreprise_id'];
    use HasFactory;
}
