<?php

namespace Songshenzong\Http\Exception;

use RuntimeException;

/**
 * Class HttpUnableRetryError
 *
 * @package Songshenzong\Http\Exception
 */
class HttpUnableRetryError extends RuntimeException
{
    /**
     * HttpUnableRetryError constructor.
     *
     * @param string          $message
     * @param int             $code
     * @param \Throwable|null $previous
     */
    public function __construct($message = '', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
