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
        header('Content-Type: application/json');
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
        $data = [
            'data' => $data,
        ];
        $this->response($data);
    }

    /**
     * API response for resource collection.
     *
     * @param array $data Resource collection data.
     * @param array $link Resource link.
     */
    protected function responseCollection($data, $link = [])
    {
        $data = [
            'data' => $data,
        ];

        if (!empty($link)) {
            $data['link'] = $link;
        }
        $this->response($data);
    }

    /**
     * API response for action success.
     */
    protected function responseSuccess()
    {
        $meta = [
            'meta' => [
                'success' => true,
            ]
        ];
        $this->response($meta);
    }

    /**
     * API response for action errors.
     *
     * @param  array   $errors  Errors detail.
     * @param  integer $code    Http status code.
     * @param  string  $message Http status message.
     */
    protected function responseErrors($errors = [], $code = 422, $message = 'Unprocessable Entity')
    {
        $errors = [
            'code'    => $code,
            'message' => $message,
            'errors'  => $errors,
        ];
        $this->response($errors, $code, $message);
    }
}
