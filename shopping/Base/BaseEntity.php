<?php

namespace App\Base;

use App\Models\Produto;

abstract class BaseEntity
{
    protected int $id;
    protected mixed $createdDate;
    protected mixed $updateDate;
    private static int $incrementador = 0;

    public function getId(): int
    {
       $this->id = ++self::$incrementador;
       return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCreatedDate(): mixed
    {
        return $this->createdDate;
    }

    /**
     * @return mixed
     */
    public function getUpdateDate(): mixed
    {
        return $this->updateDate;
    }

}