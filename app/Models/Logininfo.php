<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logininfo extends Model
{
    use HasFactory;
    protected $table = 'logininfos';
    protected $fillable =[
        'logged_in_at',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

