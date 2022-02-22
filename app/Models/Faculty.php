<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'icon','code', 'service_id'];
    public $timestamps = false;

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function user(){
        return $this->hasMany('App\Models\User');
    }
    public function tables(){
        return $this->hasMany('App\Models\Table','faculty_id','id');
    }public function tablesexam(){
        return $this->hasMany('App\Models\Exam','faculty_id','id');
    }
    public function lastexam(){
        return $this->hasMany('App\Models\Lastexam','faculty_id','id');
    }
}
