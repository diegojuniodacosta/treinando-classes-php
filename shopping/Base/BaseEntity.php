<?php

namespace shopping\Base;

date_default_timezone_set('America/Sao_Paulo');

abstract class BaseEntity
{
    protected int $id;
    protected mixed $createdDate;
    protected mixed $updateDate;
    protected static int $incrementador = 0;


    public function getId(): int
    {
       return $this->id;
    }

    public function getCreatedDate(): mixed
    {
        return $this->createdDate;
    }

    public function getUpdateDate(): mixed
    {
        return $this->updateDate;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getIncrementador(): int
    {
        return self::$incrementador++;
    }
}
