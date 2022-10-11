<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // Deklarasi Tabel
    public $table = 'permission';

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
        return $this->hasMany ('app\Models\ManagementAccess\PermissionRole', 'permission_id');
    }

}
