<?php
defined('BASEPATH') or exit('No direct script access allowed');

abstract class MY_Controller extends CI_Controller
{
    /**
     * Api response format.
     *
     * @param  array   $data    Data to return.
     * @param  integer $code    Http status code.
     * @param  string  $message Status message.
     */
    protected function response($data, $code = 200, $message = 'OK')
    {
        set_status_header($code, $message);
        echo json_encode($data);
    }

    /**
     * Api response fot resource item.
     *
     * @param array $data Resource item data.
     */
    protected function responseItem($data)
    {
        $data = array(
            'data' => $data,
        );
        $this->response($data);
    }

    /**
     * API response for resource collection.
     *
     * @param array $data Resource collection data.
     */
    protected function responseCollection($data)
    {
        $data = array(
            'data' => $data,
        );
        $this->response($data);
    }

    /**
     * API response for action success.
     */
    protected function responseSuccess()
    {
        $meta = array(
            'meta' => array(
                'success' => true,
            ),
        );
        $this->response($meta);
    }

    /**
     * API response for action errors.
     *
     * @param  array   $errors  Errors detail.
     * @param  integer $code    Http status code.
     * @param  string  $message Http status message.
     */
    protected function responseErrors($errors = array(), $code = 422, $message = 'Unprocessable Entity')
    {
        $errors = array(
            'code'    => $code,
            'message' => $message,
            'errors'  => $errors,
        );
        $this->response($errors, $code, $message);
    }
}
