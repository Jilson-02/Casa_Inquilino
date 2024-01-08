<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inquilino extends Model
{
    use HasFactory;
    protected $table='inquilinos';
    public $timestamps=false;
}
