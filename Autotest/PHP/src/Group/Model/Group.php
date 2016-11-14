<?php

/**
 * Created by tania.
 * Date: 20.10.16
 * Time: 22:01
 * @corporation Maksi
 */


class Group_Model_Group
{
    protected $name;

    protected $header;

    protected $footer;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function setHeader($header)
    {
        $this->header = $header;
        return $this;
    }

    public function getFooter()
    {
        return $this->footer;
    }

    public function setFooter($footer)
    {
        $this->footer = $footer;
        return $this;
    }
}