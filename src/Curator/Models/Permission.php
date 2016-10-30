<?php

/*
|--------------------------------------------------------------------------
| Curator: Permission Model
|--------------------------------------------------------------------------
|
| Curators permission model for the permission table.
|
*/

namespace Curator\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //Mass assignment
    protected $fillable = ['permissionName',
                           'displayName',
                           'description'];

    //Use a specific name for ID.
    protected $primaryKey = 'permissionID';

    //Use a specific table name.
    protected $table = 'Permission';

    //Cast: 'protected' as BOOLEAN.
    protected $casts = ['protected', 'boolean'];

    //Relationship: Permissions can be assigned to many users. Many to many.
    public function users()
    {
        return $this->belongsToMany('Curator\Models\User',
                                    'UserPermission',
                                    'permissionID',
                                    'userID');
    }

    //Relationship: Permissions can be assigned to many roles. Many to many.
    public function roles()
    {
        return $this->belongsToMany('Curator\Models\Role',
                                    'RolePermission',
                                    'permissionID',
                                    'roleID');
    }
}
