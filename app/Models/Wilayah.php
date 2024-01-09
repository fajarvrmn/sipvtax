<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

      protected $fillable = [
      'kode',
      'namawilayah',
      'provinsi',
      'created_at',
      'updated_at'
    ];
}
