<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'Subject';
    protected $primaryKey = 'id';
    protected $fillable = ['kode_mk','nama_mk'];

    public function lecturer(){
        return $this->hasMany(Lecturer::class, 'kode_mk', 'kode_mk');
    }
}
