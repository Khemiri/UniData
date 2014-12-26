<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Bank
 *
 * @ORM\Table(name="Bank")
 * @ORM\Entity
 */
class Bank
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="swift", type="string", length=30)
     */
    private $swift;

    /**
     * @var string
     *
     * @ORM\Column(name="accountNum", type="string", length=100)
     */
    private $accountNum;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=50)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="accountName", type="string", length=255)
     */
    private $accountName;

    /**
     * @ORM\ManyToOne(targetEntity="Company", inversedBy="banks")
     * @ORM\JoinColumn(name="Company_id", referencedColumnName="id")
     */
    protected $company;

    /**
     * @ORM\OneToMany(targetEntity="Orders", mappedBy="bank")
     */
    protected $orders;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set swift
     *
     * @param string $swift
     * @return Bank
     */
    public function setSwift($swift)
    {
        $this->swift = $swift;

        return $this;
    }

    /**
     * Get swift
     *
     * @return string 
     */
    public function getSwift()
    {
        return $this->swift;
    }

    /**
     * Set accountNum
     *
     * @param string $accountNum
     * @return Bank
     */
    public function setAccountNum($accountNum)
    {
        $this->accountNum = $accountNum;

        return $this;
    }

    /**
     * Get accountNum
     *
     * @return string 
     */
    public function getAccountNum()
    {
        return $this->accountNum;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Bank
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set accountName
     *
     * @param string $accountName
     * @return Bank
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * Get accountName
     *
     * @return string 
     */
    public function getAccountName()
    {
        return $this->accountName;
    }
}
