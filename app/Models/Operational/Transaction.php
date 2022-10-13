<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    // Deklarasi Tabel
    public $table = 'transaction';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'appointment_id',
        'fee_doctor',
        'fee_specialist',
        'fee_hospital',
        'sub_total',
        'vat',
        'total',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function appointment(){
        // 3 parameters required (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo ('app\Models\Operational\Appointment', 'appointment_id', 'id');
    }

}
