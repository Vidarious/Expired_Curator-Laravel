<?php

/*
|--------------------------------------------------------------------------
| Curator: Activity Model
|--------------------------------------------------------------------------
|
| Curators activity model for the Activity table.
|
*/

namespace Curator\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //Mass assignment.
    protected $fillable = ['userID',
                           'action',
                           'ipAddress',
                           'created_on'];

    //Use a specific name for ID.
    protected $primaryKey = 'activityID';

    //Use a specific table name.
    protected $table = 'Activity';

    //Designate specific date columns.
    protected $dates = ['created_on'];

    //Relationship: Each activity is assigned to one user. One to many.
    public function user()
    {
        return $this->belongsTo('Curator\Models\User',
                                'userID',
                                'userID');
    }
}
