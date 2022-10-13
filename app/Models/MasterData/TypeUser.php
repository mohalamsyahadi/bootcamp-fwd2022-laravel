<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeUser extends Model
{
    use SoftDeletes;

    // Deklarasi Tabel
    public $table = 'type_user';

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

    // one to many
    public function detail_user(){
        // 2 parameters required (path model, field foreign key)
        return $this->hasMany ('app\Models\ManagementAccess\DetailUser.php', 'type_user_id');
    }


}
