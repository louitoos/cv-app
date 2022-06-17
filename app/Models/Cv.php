<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

   /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'year',
        'gender',
        'degree',
        'experience',
        'phone',
        'email'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
