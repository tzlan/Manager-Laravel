<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{

    protected $fillable=['id','validation_stage_jury','validation_convention_tuteur','remarque_tuteur','remarque_tuteur','offre_id','entreprise_id','jury_id','student_id','tuteurs_id'];
    protected $table = 'stage';
    protected $casts = ['validation_stage_jury' =>'boolean' ,'validation_stage_tuteur'=>'boolean' ];

    public $timestamps = false ;

    use HasFactory;
}
