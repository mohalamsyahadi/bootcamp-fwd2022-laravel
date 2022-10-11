<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    use SoftDeletes;

    // Deklarasi Tabel
    public $table = 'consultation';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function appointment(){
        // 2 parameters required (path model, field foreign key)
        return $this->hasMany ('app\Models\Operational\Appointment', 'consultation_id');
    }


}
