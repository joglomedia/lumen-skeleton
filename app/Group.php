<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function users()
    {
        return $this->belongsToMany('App\User', 'members')->wherePivot('status', true);
    }

    public function balances()
    {
        return $this->hasMany('App\Balance');
    }
}
