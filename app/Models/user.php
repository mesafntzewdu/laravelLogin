<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
   protected  $primaryKey = 'user_id';

   protected  $fillable = ['user_name', 'father_name', 'email', 'password'];



}
