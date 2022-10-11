<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    use SoftDeletes;

    // Deklarasi Tabel
    public $table = 'role_user';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'role_id',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function user(){
        // 3 parameters required (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo ('app\Models\User', 'user_id', 'id');
    }

    public function role(){
        // 3 parameters required (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo ('app\Models\ManagementAccess\Role', 'role_id', 'id');
    }

}
