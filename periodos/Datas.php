<?php

namespace Diego\Datas;

class Datas
{
    private string $day;

    private string $month;

    private string $year;

    /**
     * @param string $day
     * @param string $month
     * @param string $year
     */
    public function __construct(string $day, string $month, string $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function getDay(): string
    {
        return $this->day;
    }

    public function setDay(string $day): void
    {
        $this->day = $day;
    }

    public function getMonth(): string
    {
        return $this->month;
    }

    public function setMonth(string $month): void
    {
        $this->month = $month;
    }

    public function getYear(): string
    {
        return $this->year;
    }

    public function setYear(string $year): void
    {
        $this->year = $year;
    }

    public function mudaDia( $outroDia): void
    {
        if ($outroDia == 'Amanha'){
            $this->day += 1;
        }else if($outroDia == 'Ontem'){
            $this->day -= 1;
        }
    }

    public function __toString(): string
    {
        return " {$this->day} / {$this->month} / {$this->year}";
    }

}

$novaData = new Datas('06', '05', '2023');

$novaData->mudaDia('Ontem');

echo $novaData->getDay();
echo $novaData->getMonth();
echo $novaData->getYear();


echo date($novaData);
