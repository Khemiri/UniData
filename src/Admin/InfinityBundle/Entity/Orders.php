<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Orders
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
     * @ORM\Column(name="nbcf", type="string", length=50)
     */
    private $nbcf;

    /**
     * @var string
     *
     * @ORM\Column(name="paymentAt", type="string", length=50)
     */
    private $paymentAt;

    /**
     * @var string
     *
     * @ORM\Column(name="shippingBy", type="string", length=50)
     */
    private $shippingBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePrevu", type="date")
     */
    private $datePrevu;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal")
     */
    private $price;


    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="obervation", type="text")
     */
    private $obervation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateProforma", type="date")
     */
    private $dateProforma;

    /**
     * @var string
     *
     * @ORM\Column(name="pathFile", type="string", length=255)
     */
    private $pathFile;

    /**
     * @ORM\ManyToOne(targetEntity="Provider", inversedBy="orders")
     * @ORM\JoinColumn(name="Provider_id", referencedColumnName="id")
     */
    protected $provider;

    /**
     * @ORM\ManyToOne(targetEntity="Laboratories", inversedBy="orders")
     * @ORM\JoinColumn(name="Laboratories_id", referencedColumnName="id")
     */
    protected $laboratory;

    /**
     * @ORM\ManyToOne(targetEntity="Importer", inversedBy="orders")
     * @ORM\JoinColumn(name="Importer_id", referencedColumnName="id")
     */
    protected $importer;

    /**
     * @ORM\ManyToOne(targetEntity="Shipping", inversedBy="orders")
     * @ORM\JoinColumn(name="Shipping_id", referencedColumnName="id")
     */
    protected $shipping;

    /**
     * @ORM\ManyToOne(targetEntity="Payment", inversedBy="orders")
     * @ORM\JoinColumn(name="Payment_id", referencedColumnName="id")
     */
    protected $payment;

    /**
     * @ORM\ManyToOne(targetEntity="Bank", inversedBy="orders")
     * @ORM\JoinColumn(name="bank_id", referencedColumnName="id")
     */
    protected $bank;

    /**
     * @ORM\OneToOne(targetEntity="Dci", inversedBy="orders")
     * @ORM\JoinColumn(name="Dci_id", referencedColumnName="id")
     */
    protected $dci;

    /**
     * @ORM\OneToOne(targetEntity="Purchase", inversedBy="order")
     * @ORM\JoinColumn(name="Purchase_id", referencedColumnName="id")
     */
    protected $purchase;

    /**
     * @ORM\ManyToOne(targetEntity="Invoice", inversedBy="order")
     * @ORM\JoinColumn(name="Invoice_id", referencedColumnName="id")
     */
    protected $invoice;

    /**
     * @ORM\OneToMany(targetEntity="Coa", mappedBy="orders")
     */
    protected $coas;

    /**
     * @ORM\OneToMany(targetEntity="PackingList", mappedBy="orders")
     */
    protected $packingLists;

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
     * Set nbcf
     *
     * @param string $nbcf
     * @return Orders
     */
    public function setNbcf($nbcf)
    {
        $this->nbcf = $nbcf;

        return $this;
    }

    /**
     * Get nbcf
     *
     * @return string 
     */
    public function getNbcf()
    {
        return $this->nbcf;
    }

    /**
     * Set at
     *
     * @param string $paymentAt
     * @return Orders
     */
    public function setPaymentAt($paymentAt)
    {
        $this->paymentAt = $paymentAt;

        return $this;
    }

    /**
     * Get at
     *
     * @return string 
     */
    public function getPaymentAt()
    {
        return $this->paymentAt;
    }

    /**
     * Set shippingBy
     *
     * @param string $shippingBy
     * @return Orders
     */
    public function setShippingBy($shippingBy)
    {
        $this->shippingBy = $shippingBy;

        return $this;
    }

    /**
     * Get shippingBy
     *
     * @return string 
     */
    public function getShippingBy()
    {
        return $this->shippingBy;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Orders
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set datePrevu
     *
     * @param \DateTime $datePrevu
     * @return Orders
     */
    public function setDatePrevu($datePrevu)
    {
        $this->datePrevu = $datePrevu;

        return $this;
    }

    /**
     * Get datePrevu
     *
     * @return \DateTime 
     */
    public function getDatePrevu()
    {
        return $this->datePrevu;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Orders
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
     * Set quantity
     *
     * @param string $quantity
     * @return Orders
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set obervation
     *
     * @param string $obervation
     * @return Orders
     */
    public function setObervation($obervation)
    {
        $this->obervation = $obervation;

        return $this;
    }

    /**
     * Get obervation
     *
     * @return string 
     */
    public function getObervation()
    {
        return $this->obervation;
    }

    /**
     * Set dateProforma
     *
     * @param \DateTime $dateProforma
     * @return Orders
     */
    public function setDateProforma($dateProforma)
    {
        $this->dateProforma = $dateProforma;

        return $this;
    }

    /**
     * Get dateProforma
     *
     * @return \DateTime 
     */
    public function getDateProforma()
    {
        return $this->dateProforma;
    }

    /**
     * Set pathFile
     *
     * @param string $pathFile
     * @return Orders
     */
    public function setPathFile($pathFile)
    {
        $this->pathFile = $pathFile;

        return $this;
    }

    /**
     * Get pathFile
     *
     * @return string 
     */
    public function getPathFile()
    {
        return $this->pathFile;
    }
}
