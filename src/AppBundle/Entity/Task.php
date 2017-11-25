<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Task
{
    private $id;
    private $title;
    private $duedate;

    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setDuedate($duedate)
    {
        $this->duedate = $duedate;

        return $this;
    }
    
    public function getDuedate()
    {
        return $this->duedate;
    }
}
