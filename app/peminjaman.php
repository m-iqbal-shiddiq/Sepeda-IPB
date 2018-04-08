<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $table = 'peminjaman';

    protected $fillable = [
      'nim',
      'nosepeda',
      'shelter',
      'status'
    ];
}
