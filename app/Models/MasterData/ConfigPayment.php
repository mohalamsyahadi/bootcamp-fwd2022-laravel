<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigPayment extends Model
{
    use SoftDeletes;

    // Deklarasi Tabel
    public $table = 'permission_role';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];


}