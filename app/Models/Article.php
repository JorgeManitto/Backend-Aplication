<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body'];

    public function category(){
        // return $this->hasOne(Carcategorie::class, 'foreign_key', 'local_key');
        return $this->belongsTo(Carcategorie::class);
    }
}
