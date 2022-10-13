<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    // use HasFactory;
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

    public function permission(){
        // 3 parameters required (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo ('app\Models\ManagementAccess\Permission', 'permission_id', 'id');
    }

    public function role(){
        // 3 parameters required (path model, field foreign key, field primary key from table hasMany/hasOne)
        return $this->belongsTo ('app\Models\ManagementAccess\Role', 'role_id', 'id');
    }


}
