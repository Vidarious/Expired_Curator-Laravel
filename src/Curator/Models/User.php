<?php

/*
|--------------------------------------------------------------------------
| Curator: User Model
|--------------------------------------------------------------------------
|
| Curators user model for the User table.
|
*/

namespace Curator\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //Mass assignment.
    protected $fillable = ['username',
                           'displayName',
                           'passwordHash',
                           'givenName',
                           'familyName',
                           'email',
                           'statusID'];

    //Use a specific name for ID.
    protected $primaryKey = 'userID';

    //Use a specific table name.
    protected $table = 'User';

    //Designate specific date columns.
    protected $dates = ['created_at', 'updated_at'];

    //Relationship: Each user can have a single Status. One to many.
    public function status()
    {
        return $this->belongsTo('Curator\Models\Status',
                                'statusID',
                                'statusID');
    }

    //Relationship: Each user can have many activity logs. One to many.
    public function activity()
    {
        return $this->hasMany('Curator\Models\Activity', 'activityID');
    }

    //Relationship: Each user can have many flags. Many to many.
    //User belongsToMany Flag as defined by UserFlag with userID and flagID.
    public function flags()
    {
        return $this->belongsToMany('Curator\Models\Flag',
                                    'UserFlag',
                                    'userID',
                                    'flagID');
    }

    //Relationship: Each user can have many roles. Many to many.
    public function roles()
    {
        return $this->belongsToMany('Curator\Models\Role',
                                    'UserRole',
                                    'userID',
                                    'roleID');
    }

    //Relationship: Each user can have many permissions. Many to many.
    public function permissions()
    {
        return $this->belongsToMany('Curator\Models\Permission',
                                    'UserPermission',
                                    'userID',
                                    'permissionID');
    }

    //Mutator: Set the given name with all lowercase letters.
    public function setGivenNameAttribute($value)
    {
        $this->attributes['givenName'] = strtolower($value);
    }

    //Accessor: Return a capitalized given name.
    public function getGivenNameAttribute($value)
    {
        return ucfirst($value);
    }

    //Mutator: Set the family name with all lowercase letters.
    public function setFamilyNameAttribute($value)
    {
        $this->attributes['familyName'] = strtolower($value);
    }

    //Accessor: Return a capitalized family name.
    public function getFamilyNameAttribute($value)
    {
        return ucfirst($value);
    }
}
