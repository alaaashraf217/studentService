<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'code', 'department_id', 'year_id', 'active', 'api_token','faculty_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function department(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function year(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Year::class);
    }
    public function Table(){
        return $this->belongsTo(Table::class);
    }
    public function Exam(){
        return $this->belongsTo(Exam::class);
    } public function lastexam(){
        return $this->belongsTo(lastexam::class);
    }
    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }
}
