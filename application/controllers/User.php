<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller
{
    public function show()
    {
        $this->responseItem(['title' => 'Big title']);
    }
}
