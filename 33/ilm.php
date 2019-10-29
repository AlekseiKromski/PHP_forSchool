<?php

class ilm
{
    private $id;
    private $day_tem;
    private $night_tem;
    private $week_day;
    private $img;

    function __construct($id, $day_tem, $night_tem, $week_day, $img)
    {
        $this->id = $id;
        $this->day_tem = $day_tem;
        $this->night_tem = $night_tem;
        $this->week_day = $week_day;
        $this->img = $img;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getDay_tem()
    {
        return $this->day_tem;
    }
    public function getNight_tem()
    {
        return $this->night_tem;
    }
    public function getWeek_day()
    {
        return $this->week_day;
    }
    public function getImg()
    {
        return $this->img;
    }

}