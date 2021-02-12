<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigAppModel extends Model
{
    use HasFactory;

    protected $table = 'config_app';
    public $timestamps = false;
    public $incrementing = true;

    protected $casts = [];
    protected $guarded = [];

    protected $fillable = [
        'field',
        'value'
    ];
}
