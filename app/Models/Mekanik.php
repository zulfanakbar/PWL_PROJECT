<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mekanik;

class Mekanik extends Model
{
    use HasFactory;
    protected $table = 'mekanik';
    public $timestamps= false;
    protected $primaryKey = 'id_mekanik';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_mekanik', 'nama', 'foto', 'jk', 'alamat', 'telepon'];
}
