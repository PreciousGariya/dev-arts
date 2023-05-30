<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSection extends Model
{
    use HasFactory;
    public $fillable=['title','category','project_name','image','button_1','button_1_url','status'];
    	
}
