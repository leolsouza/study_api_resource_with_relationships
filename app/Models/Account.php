<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'name', 'age', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
