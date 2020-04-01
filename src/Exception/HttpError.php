<?php

namespace Songshenzong\Http\Exception;

use RuntimeException;

/**
 * Class HttpError
 *
 * @package Songshenzong\Http\Exception
 */
class HttpError extends RuntimeException
{
    private $errorInfo;

    /**
     * HttpError constructor.
     *
     * @param array           $errorInfo
     * @param string          $message
     * @param int             $code
     * @param \Throwable|null $previous
     */
    public function __construct($errorInfo = [], $message = '', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->errorInfo = $errorInfo;
    }

    /**
     * @return array
     */
    public function getErrorInfo()
    {
        return $this->errorInfo;
    }
}
