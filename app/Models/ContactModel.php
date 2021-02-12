<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;
    
    protected $table = 'contact';
    public $timestamps = true;
    public $incrementing = true;

    protected $casts = [];
    protected $guarded = [];

    protected $fillable = [
        'fullname',
        'email',
        'phone',
        'message',
        'created_at'
    ];
    
}
