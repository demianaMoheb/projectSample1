<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postings extends Model
{
    use HasFactory;
    protected $fillable = [ // give more security
        'title',
        'content',
        'photo',
        'user_id',
    ];
    public function user()
   {
       return $this->hasOne(App\Models\User);
   }
}
