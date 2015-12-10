<?php

class Physician extends Eloquent
{
    protected $table = 'physicians';

    public function user()
    {
        return $this->belongsTo('User');
    }
}
