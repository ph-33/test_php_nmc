<?php


class account
{
    private $accountNo;
    private $ownerName;
    private $amount;
    private $accountType;
    private $password;

    public function __construct($accountNo, $ownerName,$amount,$accountType,$password) {
        $this->accountNo = $accountNo;
        $this->ownerName = $ownerName;
        $this->amount = $amount;
        $this->accountType = $accountType;
        $this->password = $password;
    }
    /**
     * @return mixed
     */
    public function getAccountNo()
    {
        return $this->accountNo;
    }

    /**
     * @param mixed $accountNo
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
    }

    /**
     * @return mixed
     */
    public function getOwnerName()
    {
        return $this->ownerName;
    }

    /**
     * @param mixed $ownerName
     */
    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @param mixed $accountType
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

}