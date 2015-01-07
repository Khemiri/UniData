<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @Assert\NotBlank(message="Laboratory name must not be empty")
     *
     * @Assert\Length(
     *      min = "2",
     *      max = "255",
     *      minMessage = "Laboratory name must be at least {{ limit }} characters long",
     *      maxMessage = "Laboratory name description cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     * @Assert\NotBlank(message="Address must not be empty")
     *
     * @Assert\Length(
     *      min = "2",
     *      max = "255",
     *      minMessage = "Address must be at least {{ limit }} characters long",
     *      maxMessage = "Address description cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     * @Assert\NotBlank(message="Abbreviation must not be empty")
     * @Assert\Length(
     *      min = "2",
     *      max = "20",
     *      minMessage = "Abbreviation must be at least {{ limit }} characters long",
     *      maxMessage = "abbreviation description cannot be longer than {{ limit }} characters long"
     * )
     * @ORM\Column(name="abbreviation", type="string", length=20)
     */
    private $abbreviation;

    /**
     * @var string
     *
     * @Assert\Length(
     *      min = "2",
     *      max = "10",
     *      minMessage = "Postal code must be at least {{ limit }} characters long",
     *      maxMessage = "Postal code cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="codepostal", type="string", length=10)
     */
    private $codepostal;

    /**
     * @var string
     * @Assert\Length(
     *      min = "8",
     *      max = "15",
     *      minMessage = "Fax Number must be at least {{ limit }} characters long",
     *      maxMessage = "Fax Number code cannot be longer than {{ limit }} characters long"
     * )
     * @ORM\Column(name="fax", type="string", length=15, nullable=true)
     */
    private $fax;

    /**
     * @var string
     * @Assert\Length(
     *      min = "8",
     *      max = "15",
     *      minMessage = "Phone Number must be at least {{ limit }} characters long",
     *      maxMessage = "Phone Number code cannot be longer than {{ limit }} characters long"
     * )
     * @ORM\Column(name="tel", type="string", length=15, nullable=true)
     */
    private $tel;

    /**
     * @ORM\ManyToOne(targetEntity="Countries", inversedBy="laboratory")
     * @ORM\JoinColumn(name="Countries_id", referencedColumnName="id", nullable=false)
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
     * Set abbreviation
     *
     * @param string $abbreviation
     * @return Laboratories
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;

        return $this;
    }

    /**
     * Get abbreviation
     *
     * @return string 
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
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
