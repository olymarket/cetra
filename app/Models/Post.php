<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /*use HasFactory;


    protected $primaryKey = 'idPost';
    public $timestamps    = false;
    protected $hidden     = [""];


    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'idPost')
            ->orderBy('idComment', 'DESC')
            ->where([
                ['idStatu', '=', '1'],
            ])
            ->whereNull([]);
    }
    public function files()
    {
        return $this->hasMany(File::class, 'idImage');
    }

    public function statu(){
        return $this->belongsTo(Statu::class, 'idStatu');
    }

    public function categori(){
        return $this->belongsTo(Categori::class, 'idCategori');
    }*/
}
