<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureSection extends Model
{
    use HasFactory;
    public $fillable=['title','tag_line', 'icon', 'image'];
}
