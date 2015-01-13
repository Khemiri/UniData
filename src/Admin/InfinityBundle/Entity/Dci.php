<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Dci
 *
 * @ORM\Table(name="Dci")
 * @ORM\Entity
 */
class Dci
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
     * @Assert\NotBlank(message="Name of DCI must not be empty")
     *
     * @Assert\Length(
     *      min = "3",
     *      max = "255",
     *      minMessage = "Name must be at least {{ limit }} characters long",
     *      maxMessage = "Name cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false, unique=true)
     */
    private $name;

    /**
     * @var string
     * @Assert\NotBlank(message="Price must not be empty")
     * @ORM\Column(name="price", type="decimal", precision=10, scale=3, nullable=false, unique=false)
     */
    private $price;


    /**
     * @ORM\OneToMany(targetEntity="Specification", mappedBy="dci")
     */
    protected $specifications;

    /**
     * @ORM\OneToMany(targetEntity="Orders", mappedBy="dci")
     */
    protected $orders;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection $providers
     *
     * @ORM\ManyToMany(targetEntity="Provider", inversedBy="dcis")
     * @ORM\JoinTable(name="DcisProviders",
     *      joinColumns={@ORM\JoinColumn(name="dci_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="provider_id", referencedColumnName="id")}
     * )
     *
     */

    protected $providers;

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
     * @return Dci
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
     * Set price
     *
     * @param string $price
     * @return Dci
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->specifications = new \Doctrine\Common\Collections\ArrayCollection();
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->providers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add specifications
     *
     * @param \Admin\InfinityBundle\Entity\Specification $specifications
     * @return Dci
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
     * Add orders
     *
     * @param \Admin\InfinityBundle\Entity\Orders $orders
     * @return Dci
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
     * Add providers
     *
     * @param \Admin\InfinityBundle\Entity\Provider $providers
     * @return Dci
     */
    public function addProvider(\Admin\InfinityBundle\Entity\Provider $providers)
    {
        $this->providers[] = $providers;

        return $this;
    }

    /**
     * Remove providers
     *
     * @param \Admin\InfinityBundle\Entity\Provider $providers
     */
    public function removeProvider(\Admin\InfinityBundle\Entity\Provider $providers)
    {
        $this->providers->removeElement($providers);
    }

    /**
     * Get providers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProviders()
    {
        return $this->providers;
    }

    /**
     * @return string
     */

    public function __toString(){
        return $this->getName();
    }
}
