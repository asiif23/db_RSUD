<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Haruncpi\LaravelIdGenerator\IdGenerator;

class Pasien extends Model
{
    use HasFactory;
    public $incrementing = "false";
    protected $table = "pasien";
    protected $fillable =
    [
    'id',
    'nama',
    'alamat',
    'noHp',
    'rtRW',
    'Kelurahan',
    'tanggalLahir',
    'jenisKelamin'];
    // public static function boot()
    // {
    //     parent::boot();
    //     self::creating(function ($model) {
    //         $model->uuid = IdGenerator::generate(['pasien' => $this->table, 'length' => 10, 'prefix' =>date('ym')]);
    //     });
    // }
}


