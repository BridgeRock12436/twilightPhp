<?php


class Twillist
{
    private $data;
    private $next,$prev;
    public function __construct($data)
    {
        $this->setData($data);
        $this->setNext(null);
        $this->setPrev(null);
        
    }
    public function add($listPtr)
    {
        $listPtr->setPrev(null);
        $this->setNext($listPtr);
        return $listPtr;
    }
    public function hasNext()
    {
        if($this->getNext()!= null) return true;
        return false;
    }
    public function next()
    {
        if($this->hasNext()==false) return null;
        return $this->getNext();
    }
    function __destruct()
    {}
    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @return mixed
     */
    public function getPrev()
    {
        return $this->prev;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @param mixed $next
     */
    public function setNext($next)
    {
        $this->next = $next;
    }

    /**
     * @param mixed $prev
     */
    public function setPrev($prev)
    {
        $this->prev = $prev;
    }

}

