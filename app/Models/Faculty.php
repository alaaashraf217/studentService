<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['id', 'name', 'icon','code'];
    public $timestamps = false;

   
    public function user(){
        return $this->hasMany('App\Models\User');
    }
    public function tables(){
        return $this->hasMany('App\Models\Table');
    }
    public function tablesexam(){
        return $this->hasMany('App\Models\Exam');
    }
    public function lastexam(){
        return $this->hasMany('App\Models\Lastexam');
    }
}
