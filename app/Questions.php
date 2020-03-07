<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    //protected $primaryKey =
    protected $fillable=['question_text','answer_text','img_url'];
}//end model Questions


