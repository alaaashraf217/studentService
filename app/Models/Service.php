<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'active', 'priority', 'parent_id'];

    public function scopeActive(Builder $builder)
    {
        $builder->where('active', true)->orderBy('priority');
    }

    public function serveice()
    {
        return $this->belongsTo(Service::class, 'parent_id');
    }

    public function subServices()
    {
        return $this->hasMany(Service::class, 'parent_id');
    }
    public function posts(){
        return $this->hasMany('App\Models\Post','service_id');
    }

    public function tables(){
        return $this->hasMany('App\Models\Table','service_id');
    } public function faculties(){
        return $this->hasMany('App\Models\Faculty','service_id');
    }
    
    public function lastexams(){
        return $this->hasMany('App\Models\Lastexam','service_id');
    } public function exams(){
        return $this->hasMany('App\Models\Exam','service_id','year_id');
    } 
}
