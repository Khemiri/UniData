<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Laboratories
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Laboratories
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviation", type="string", length=20)
     */
    private $abreviation;

    /**
     * @var string
     *
     * @ORM\Column(name="codepostal", type="string", length=10)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=15)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=15)
     */
    private $tel;

    /**
     * @ORM\ManyToOne(targetEntity="Countries", inversedBy="laboratory")
     * @ORM\JoinColumn(name="Countries_id", referencedColumnName="id")
     */
    protected $country;

    /**
     * @ORM\OneToMany(targetEntity="Orders", mappedBy="laboratory")
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
     * Set name
     *
     * @param string $name
     * @return Laboratories
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Laboratories
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
     * Set abreviation
     *
     * @param string $abreviation
     * @return Laboratories
     */
    public function setAbreviation($abreviation)
    {
        $this->abreviation = $abreviation;

        return $this;
    }

    /**
     * Get abreviation
     *
     * @return string 
     */
    public function getAbreviation()
    {
        return $this->abreviation;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     * @return Laboratories
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string 
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Laboratories
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Laboratories
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Laboratories
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }
}
