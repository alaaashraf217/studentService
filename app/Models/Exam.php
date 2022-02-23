<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    use HasPhoto;

    protected $fillable = ['id', 'title', 'year_id', 'department_id','service_id','faculty_id'];
    public $timestamps = false;

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function user(){
        return $this->hasMany('App\Models\User');
    }
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
}
