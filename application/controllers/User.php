<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller
{
    /**
     * Display a listing of resource.
     */
    public function index()
    {
        return $this->responseCollection(['title' => 'Đây là resource collection']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        return $this->responseItem(['title' => 'Đây là resource store']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show($id)
    {
        return $this->responseItem(['title' => 'Đây là resource show ' . $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     */
    public function update($id)
    {
        return $this->responseItem(['title' => 'Đây là resource update ' . $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     */
    public function destroy($id)
    {
        return $this->responseItem(['title' => 'Đây là resource delete ' . $id]);
    }
}
