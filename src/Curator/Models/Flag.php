<?php

/*
|--------------------------------------------------------------------------
| Curator: Flag Model
|--------------------------------------------------------------------------
|
| Curators flag model for the Flag table.
|
*/

namespace Curator\Models;

use Illuminate\Database\Eloquent\Model;

class Flag extends Model
{
    protected $fillable = ['description'];

    protected $primaryKey = 'flagID';

    protected $table = 'Flag';

    //Relationship: Each status can be assigned to multiple users. Many to many.
    //Flag belongsToMany User as defined by UserFlag with userID and flagID.
    public function users()
    {
        return $this->belongsToMany('Curator\Models\User',
                                    'UserFlag',
                                    'flagID',
                                    'userID');
    }
}
