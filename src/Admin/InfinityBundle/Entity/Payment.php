<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Payment
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Payment
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
     * @Assert\NotBlank(message="Payment description must not be empty")
     *
     * @Assert\Length(
     *      min = "2",
     *      max = "10",
     *      minMessage = "Payment description must be at least {{ limit }} characters long",
     *      maxMessage = "Payment description cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="name", type="string", length=10)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Orders", mappedBy="payment")
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
     * @return Payment
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
     * Constructor
     */
    public function __construct()
    {
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add orders
     *
     * @param \Admin\InfinityBundle\Entity\Orders $orders
     * @return Payment
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
     * @return string
     */

    public function __toString(){
        return $this->getName();
    }
}
