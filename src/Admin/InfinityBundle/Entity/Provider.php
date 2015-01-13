<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Provider
 *
 * @ORM\Table(name="Provider")
 * @ORM\Entity
 */
class Provider
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
     * @Assert\NotBlank(message="Provider name must not be empty")
     *
     * @Assert\Length(
     *      min = "3",
     *      max = "50",
     *      minMessage = "Provider name must be at least {{ limit }} characters long",
     *      maxMessage = "Provider name cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     *
     * @ORM\Column(name="email", type="string", length=150, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @Assert\Length(
     *      min = "3",
     *      max = "255",
     *      minMessage = "Provider name must be at least {{ limit }} characters long",
     *      maxMessage = "Provider name cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=15, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=15, nullable=true)
     */
    private $fax;

    /**
     * @ORM\ManyToOne(targetEntity="Countries", inversedBy="providers")
     * @ORM\JoinColumn(name="Countries_id", referencedColumnName="id", nullable=false)
     */
    protected $country;

    /**
     * @ORM\ManyToOne(targetEntity="TProvider", inversedBy="providers")
     * @ORM\JoinColumn(name="TProvider_id", referencedColumnName="id", nullable=false)
     */
    protected $type;

    /**
     * @ORM\OneToMany(targetEntity="Orders", mappedBy="provider")
     */
    protected $orders;

    /**
     * @ORM\OneToMany(targetEntity="Specification", mappedBy="provider")
     */
    protected $specifications;

    /**
     * Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Dci", mappedBy="providers")
     */

    protected $dcis;

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
     * @return Provider
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
     * Set email
     *
     * @param string $email
     * @return Provider
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Provider
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
     * Set phone
     *
     * @param string $phone
     * @return Provider
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Provider
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
     * Constructor
     */
    public function __construct()
    {
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->specifications = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dcis = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set country
     *
     * @param \Admin\InfinityBundle\Entity\Countries $country
     * @return Provider
     */
    public function setCountry(\Admin\InfinityBundle\Entity\Countries $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Admin\InfinityBundle\Entity\Countries 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set type
     *
     * @param \Admin\InfinityBundle\Entity\TProvider $type
     * @return Provider
     */
    public function setType(\Admin\InfinityBundle\Entity\TProvider $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Admin\InfinityBundle\Entity\TProvider 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add orders
     *
     * @param \Admin\InfinityBundle\Entity\Orders $orders
     * @return Provider
     */
    public function addOrder(\Admin\InfinityBundle\Entity\Orders $orders)
    {
        $this->orders[] = $orders;

        return $this;
    }

    /**
     * Remove orders
     *
     * @param \Admin\InfinityBundle\Entity\Orders $orders
     */
    public function removeOrder(\Admin\InfinityBundle\Entity\Orders $orders)
    {
        $this->orders->removeElement($orders);
    }

    /**
     * Get orders
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Add specifications
     *
     * @param \Admin\InfinityBundle\Entity\Specification $specifications
     * @return Provider
     */
    public function addSpecification(\Admin\InfinityBundle\Entity\Specification $specifications)
    {
        $this->specifications[] = $specifications;

        return $this;
    }

    /**
     * Remove specifications
     *
     * @param \Admin\InfinityBundle\Entity\Specification $specifications
     */
    public function removeSpecification(\Admin\InfinityBundle\Entity\Specification $specifications)
    {
        $this->specifications->removeElement($specifications);
    }

    /**
     * Get specifications
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSpecifications()
    {
        return $this->specifications;
    }

    /**
     * Add dcis
     *
     * @param \Admin\InfinityBundle\Entity\Dci $dcis
     * @return Provider
     */
    public function addDci(\Admin\InfinityBundle\Entity\Dci $dcis)
    {
        $this->dcis[] = $dcis;

        return $this;
    }

    /**
     * Remove dcis
     *
     * @param \Admin\InfinityBundle\Entity\Dci $dcis
     */
    public function removeDci(\Admin\InfinityBundle\Entity\Dci $dcis)
    {
        $this->dcis->removeElement($dcis);
    }

    /**
     * Get dcis
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDcis()
    {
        return $this->dcis;
    }

    /**
     * @return string
     */

    public function __toString(){
        return $this->getName();
    }
}
