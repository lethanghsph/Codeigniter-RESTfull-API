<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller
{
    /**
     * Display a listing of resource.
     */
    public function index() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store() {}

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show($id)
    {
        return $this->responseItem(['title' => 'Big title']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     */
    public function update($id) {}

    /**
     * Remove the specified resource from storage.
     * 
     * @param $id
     */
    public function destroy($id) {}
}
