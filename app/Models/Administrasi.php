<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Administrasi extends Model
{
    use HasFactory;
    public $timestamps = false;


    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo('App\Models\Pelanggan')->withDefault();
    }


    public function penjoki(): BelongsTo
    {
        return $this->belongsTo('App\Models\Penjoki')->withDefault();
    }

    protected $dates = ['tanggal'];
}
