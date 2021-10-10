<?php

namespace Sun\EpayAlfa\Models;

abstract class AbstractModel
{
    /**
     * @param array $data
     * @return static
     */
    public static function createFromArray(array $data)
    {
        $model = new static();
        $model->fillFromData($data);
        return $model;
    }

    protected abstract function fillFromData(array $data);
}
