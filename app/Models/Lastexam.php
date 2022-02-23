<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lastexam extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable=['id','title','year_id','department_id','service_id','file','faculty_id'];
    public $timestamps = false;




    public function users(){
        return $this->hasMany('App\Models\User');
    }
     public function service (){
        return $this->belongsTo('App\Models\Service');
    } 
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
