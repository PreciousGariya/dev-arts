<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Slider extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    public $fillable=["name","heading","description","image","button_1","button_2","button_1_url","button_2_url","status","updated_at"];
}
