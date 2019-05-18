<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $fillable = ['nama'];

    public function kecamatans()
    {
        return $this->hasMany(Kecamatan::class);
    }
}
