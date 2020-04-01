<?php

namespace Songshenzong\Http;

class Model
{
    protected $_name     = [];
    protected $_required = [];

    public function toMap()
    {
        return get_object_vars($this);
    }

    public function validate()
    {
        $vars = get_object_vars($this);
        foreach ($vars as $k => $v) {
            if (isset($this->_required[$k]) && $this->_required[$k] && empty($v)) {
                throw new \InvalidArgumentException("$k is required.");
            }
        }
    }
}
