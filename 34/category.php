<?php


class category
{
    private $id;
    private $name;
    private $description;

    function __construct($id, $name, $desc)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $desc;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDesc()
    {
        return $this->description;
    }
}