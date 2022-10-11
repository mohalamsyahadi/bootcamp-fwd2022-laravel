<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    // Deklarasi Tabel
    public $table = 'role';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function permission_role(){
        // 2 parameters required (path model, field foreign key)
        return $this->hasMany ('app\Models\ManagementAccess\PermissionRole', 'role_id');
    }

    public function role_user(){
        // 2 parameters required (path model, field foreign key)
        return $this->hasMany ('app\Models\ManagementAccess\RoleUser', 'role_id');
    }

}
