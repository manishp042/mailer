<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailer_response extends Model
{
    protected $fillable = ["email"];
    protected $table = "mailer_response";
}
