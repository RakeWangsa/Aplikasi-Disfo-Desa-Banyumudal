<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Display extends Model
{
    use HasFactory;
    protected $table = "display";
    public $timestamps = false;
    protected $fillable = [
        'title1',
        'text1',
        'title2',
        'text2',
        'title3',
        'text3',
        'title4',
        'text4',
        'link_youtube',
        'running_text',
        'header',
        'sub_header'
    ];
}
