<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface
{
    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    public function physician()
    {
        return $this->hasOne('Physician');
    }

    public function patient()
    {
        return $this->hasOne('Patient');
    }

    public function race()
    {
        return $this->hasOne('Race');
    }

    public function country()
    {
        return $this->hasOne('Country');
    }
}
