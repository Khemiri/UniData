<?php
/* mmmmm 2018 */

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
     * @Assert\NotBlank(message="Swift Code must not be empty")
     *n = "3",
     *      max = "100",
     *      minMessage = "Swift Code must be at least {{ limit }} characters long",
     *      maxMessage = "Swift Code cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="swift", type="string", length=100)
     */
    private $swift;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Account Number must not be empty")
     *
     * @Assert\Length(
     *      min = "3",
     *      max = "100",
     *      minMessage = "Account Number must be at least {{ limit }} characters long",
     *      maxMessage = "Account Number cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="accountNum", type="string", length=100)
     */
    private $accountNum;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Address must not be empty")
     *
     * @Assert\Length(
     *      min = "3",
     *      max = "50",
     *      minMessage = "Address must be at least {{ limit }} characters long",
     *      maxMessage = "Address cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="address", type="string", length=50)
     */
    private $address;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Account Name must not be empty")
     *
     * @Assert\Length(
     *      min = "3",
     *      max = "255",
     *      minMessage = "Account Name must be at least {{ limit }} characters long",
     *      maxMessage = "Account Name cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="accountName", type="string", length=255)
     */
    private $accountName;

    /**
     * @ORM\ManyToOne(targetEntity="Company", inversedBy="banks")
     * @ORM\JoinColumn(name="Company_id", referencedColumnName="id", nullable=false)
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set company
     *
     * @param \Admin\InfinityBundle\Entity\Company $company
     * @return Bank
     */
    public function setCompany(\Admin\InfinityBundle\Entity\Company $company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \Admin\InfinityBundle\Entity\Company 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Add orders
     *
     * @param \Admin\InfinityBundle\Entity\Orders $orders
     * @return Bank
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
        return $this->getAccountName();
    }
}
