<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class klinikModel extends Model
{
    protected $table='klinik';
    protected $fillable=['nama','alamat','keluhan'];
    protected $primarykey='id';
}
