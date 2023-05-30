<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeCounterSection extends Model
{
    use HasFactory;
    public $fillable=['title', 'tag_line','description','counter_title_1','counter_value_1','counter_title_2','counter_value_2','counter_title_3','counter_value_3','counter_title_4'];
}
