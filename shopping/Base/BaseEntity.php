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

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate = date('d/m/y H:i');
    }

    /**
     * @return string
     */
    public function getUpdateDate(): string
    {
        return $this->updateDate = date('d/m/y H:i');
    }

}
