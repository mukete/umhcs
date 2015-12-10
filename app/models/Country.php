<?php

class Country extends Eloquent
{
    protected $table = 'countries';

    public function user()
    {
        return $this->belongsTo('User');
    }
}
