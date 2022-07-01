<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $table="student";
    protected $primarykey="id";
    public function getNameAttribute($value){
       return strtoupper($value);
    }
    public function getEmailAttribute($value){
       return strtoupper($value);
    }
//     public function setNameAttribute($value)
// {
//     $this->attributes['name'] = strtoupper($value);
// }

}
