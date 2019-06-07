<?php
/**
 * Class customer
 */
class Member
{
    /**
     * @var fname, lname, age, phone, email
     */
    //declare attribute
    private $_fname;
    private $_lname;
    private $_age;
    private $_phone;
    private $_email;
    /**
     * Member constructor.
     * @param $fname
     * @param $lname
     * @param $age
     * @param $email
     * @param $phone
     */
    //parameterized constructor
    function __construct($fname, $lname, $age, $email, $phone)
    {
        $this->_fname = $fname;
        $this->_lname = $lname;
        $this->_age = $age;
        $this->_email = $email;
        $this->_phone = $phone;
    }
    //Setter and getter
    /**
     * @return first name String
     */
    public function getFname()
    {
        return $this->_fname;
    }
    public function setFname($fname)
    {
        $this->_fname = $fname;
    }
    /**
     * @return last name String
     */
    public function getLname()
    {
        return $this->_lname;
    }
    public function setLname($lname)
    {
        $this->_lname = $lname;
    }
    /**
     * @return age integer
     */
    public function getAge()
    {
        return $this->_age;
    }
    public function setAge($age)
    {
        $this->_age = $age;
    }
    /**
     * @return phone number integer
     */
    public function getPhone()
    {
        return $this->_phone;
    }
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }
    /**
     * @return email
     */
    public function getEmail()
    {
        return $this->_email;
    }
    public function setEmail($email)
    {
        $this->_email = $email;
    }
}
