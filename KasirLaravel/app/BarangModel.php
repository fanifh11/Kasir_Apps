<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table = 'buku';
    protected $primaryKey = "kode_buku";

    protected $guarded = [ 'kode_buku' ];
}
