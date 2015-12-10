<?php

class PhysicianController extends BaseController
{
    public function __construct()
    {
        // check if user is logged in, else send to login page
        $this->beforeFilter('auth');
        // filter out all post request for this controller
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

    public function getIndex()
    {
        return 'Hello welcome physician';
    }
}
