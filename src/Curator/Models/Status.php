<?php

/*
|--------------------------------------------------------------------------
| Curator: Status Model
|--------------------------------------------------------------------------
|
| Curators status model for the Status table.
|
*/

namespace Curator\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //Mass assignment.
    protected $fillable = ['description'];

    //Use a specific name for ID.
    protected $primaryKey = 'statusID';

    //Use a specific table name.
    protected $table = 'Status';

    //Relationship: One status can be assigned to many users. One to many.
    public function user()
    {
        return $this->hasMany('Curator\Models\User', 'statusID');
    }

    //Relationship: Connects Activities to Status's through the User table.
    public function activity()
    {
        return $this->hasManyThrough('Curator\Models\Activity',
                                    'Curator\Models\User',
                                    'statusID',
                                    'userID',
                                    'statusID');
    }
}
