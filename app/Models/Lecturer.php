<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $table = 'lecturer'; // Jika nama tabel bukan jamak dari nama model
    protected $primaryKey = 'id'; // Jika nama primary key tidak 'id'
    protected $fillable = ['kode_dosen', 'nama_dosen', 'email', 'kode_mk'];

    // Jika Anda memiliki relasi dengan model lain, Anda dapat mendefinisikannya di sini
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'kode_mk', 'kode_mk');
    }
}
