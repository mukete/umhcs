<?php

class Race extends Eloquent
{
    protected $table = 'races';

    public function user()
    {
        return $this->belongsTo('User');
    }
}
