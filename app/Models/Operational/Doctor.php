<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use SoftDeletes;

    // Deklarasi Tabel
    public $table = 'doctor';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function specialist(){
        // 3 parameters required (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo ('app\Models\MasterData\Specialist', 'specialist_id', 'id');
    }

    public function appointment(){
        // 2 parameters required (path model, field foreign key)
        return $this->hasMany ('app\Models\Operational\Appointment', 'doctor_id');
    }
}
