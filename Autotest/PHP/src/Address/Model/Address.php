<?php

/**
 * Created by tania.
 * Date: 19.11.16
 * Time: 11:58
 * @corporation Maksi
 */
class Address_Model_Address
{

    /**
     * @var null
     */
    private $firstName = null;

    /**
     * @var null
     */
    private $lastName = null;

    /**
     * @var null
     */
    private $address = null;

    /**
     * @var null
     */
    private $home = null;

    /**
     * @var null
     */
    private $mobile = null;

    /**
     * @var null
     */
    private $work = null;

    /**
     * @var null
     */
    private $email = null;

    /**
     * @var null
     */
    private $email2 = null;

    /**
     * @var null
     */
    private $birthday = null;

    /**
     * @var null
     */
    private $group = null;


    /**
     * @return null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param null $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param null $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param null $address
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return null
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * @param null $home
     */
    public function setHome($home)
    {
        $this->home = $home;

        return $this;
    }

    /**
     * @return null
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param null $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * @return null
     */
    public function getWork()
    {
        return $this->work;
    }

    /**
     * @param null $work
     */
    public function setWork($work)
    {
        $this->work = $work;

         return $this;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return null
     */
    public function getEmail2()
    {
        return $this->email2;
    }

    /**
     * @param null $email2
     */
    public function setEmail2($email2)
    {
        $this->email2 = $email2;

        return $this;
    }

    /**
     * @return null
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param null $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * @return null
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param null $group
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

}