<?php

/**
 * Created by PhpStorm.
 * User: mogu
 * Date: 2016/4/27
 * Time: 13:30
 */
namespace App\Http\Response;

class Result {
    private $status;
    private $result;
    private $message = '';

    /**
     * @return mixed
     */
    public function getStatus ()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus ($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getResult ()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult ($result)
    {
        $this->result = $result;
    }

    /**
     * @return string
     */
    public function getMessage ()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage ($message)
    {
        $this->message = $message;
    }
}