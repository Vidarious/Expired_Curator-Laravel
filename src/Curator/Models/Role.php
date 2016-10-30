<?php

/*
|--------------------------------------------------------------------------
| Curator: Role Model
|--------------------------------------------------------------------------
|
| Curators role model for the role table.
|
*/

namespace Curator\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Mass assignment
    protected $fillable = ['roleName', 'description'];

    //Use a specific name for ID.
    protected $primaryKey = 'roleID';

    //Use a specific table name.
    protected $table = 'Role';

    //Cast: 'protected' as BOOLEAN.
    protected $casts = ['protected', 'boolean'];

    //Relationship: Roles can be assigned to many users. Many to many.
    public function users()
    {
        return $this->belongsToMany('Curator\Models\User',
                                    'UserRole',
                                    'roleID',
                                    'userID');
    }

    //Relationship: Roles can be assigned to many permissions. Many to many.
    public function permissions()
    {
        return $this->belongsToMany('Curator\Models\Permission',
                                    'RolePermission',
                                    'roleID',
                                    'permissionID');
    }
}
