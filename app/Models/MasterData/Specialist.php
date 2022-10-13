<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
    use SoftDeletes;

    // Deklarasi Tabel
    public $table = 'specialist';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function doctor(){
        // 2 parameters required (path model, field foreign key)
        return $this->hasMany ('app\Models\Operational\Doctor', 'specialist_id');
    }

}
