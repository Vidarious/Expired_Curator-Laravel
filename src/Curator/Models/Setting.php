<?php

/*
|--------------------------------------------------------------------------
| Curator: Setting Model
|--------------------------------------------------------------------------
|
| Curators setting model for the Setting table.
|
*/

namespace Curator\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //Mass assignment
    protected $fillable = ['loginMethod',
                           'rememberMe',
                           'loginThrottling',
                           'loginThrottlingAttempts',
                           'loginThrottlingLockout',
                           'userIdleTime',
                           'defaultRoleID',
                           'loginPage'];

    //Use a specific name for ID.
    protected $primaryKey = 'settingID';

    //Use a specific table name.
    protected $table = 'Setting';

    //Cast: 'rememberMe' & 'loginThrottling' as BOOLEAN.
    protected $casts = [
                           'rememberMe'      => 'boolean',
                           'loginThrottling' => 'boolean'
                       ];

    //Relationship: Setting can be assigned one default role. One to one.
    public function role()
    {
        return $this->hasOne('Curator\Models\Role', 'roleID', 'defaultRoleID');
    }
}
