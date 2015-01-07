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
     * @ORM\Column(name="price", type="decimal", precision=10, scale=3, nullable=false)
     */
    private $price;


    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=10, scale=3, nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="text", nullable=true)
     */
    private $observation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateProforma", type="date", nullable=true)
     */
    private $dateProforma;

    /**
     * @var string
     *
     * @ORM\Column(name="pathFile", type="string", length=255, nullable=true)
     */
    private $pathFile;

    /**
     * @ORM\ManyToOne(targetEntity="Provider", inversedBy="orders")
     * @ORM\JoinColumn(name="Provider_id", referencedColumnName="id", nullable=true)
     */
    protected $provider;

    /**
     * @ORM\ManyToOne(targetEntity="Laboratories", inversedBy="orders")
     * @ORM\JoinColumn(name="Laboratories_id", referencedColumnName="id", nullable=false)
     */
    protected $laboratory;

    /**
     * @ORM\ManyToOne(targetEntity="Importer", inversedBy="orders")
     * @ORM\JoinColumn(name="Importer_id", referencedColumnName="id", nullable=false)
     */
    protected $importer;

    /**
     * @ORM\ManyToOne(targetEntity="Shipping", inversedBy="orders")
     * @ORM\JoinColumn(name="Shipping_id", referencedColumnName="id", nullable=false)
     */
    protected $shipping;

    /**
     * @ORM\ManyToOne(targetEntity="Payment", inversedBy="orders")
     * @ORM\JoinColumn(name="Payment_id", referencedColumnName="id", nullable=false)
     */
    protected $payment;

    /**
     * @ORM\ManyToOne(targetEntity="Bank", inversedBy="orders")
     * @ORM\JoinColumn(name="bank_id", referencedColumnName="id", nullable=false)
     */
    protected $bank;

    /**
     * @ORM\OneToOne(targetEntity="Dci", inversedBy="orders")
     * @ORM\JoinColumn(name="Dci_id", referencedColumnName="id", nullable=false)
     */
    protected $dci;

    /**
     * @ORM\OneToOne(targetEntity="Purchase", inversedBy="order")
     * @ORM\JoinColumn(name="Purchase_id", referencedColumnName="id", nullable=true)
     */
    protected $purchase;

    /**
     * @ORM\ManyToOne(targetEntity="Invoice", inversedBy="order")
     * @ORM\JoinColumn(name="Invoice_id", referencedColumnName="id", nullable=true)
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
     * Set observation
     *
     * @param string $observation
     * @return Orders
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get obervation
     *
     * @return string 
     */
    public function getObservation()
    {
        return $this->observation;
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->coas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->packingLists = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set provider
     *
     * @param \Admin\InfinityBundle\Entity\Provider $provider
     * @return Orders
     */
    public function setProvider(\Admin\InfinityBundle\Entity\Provider $provider = null)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return \Admin\InfinityBundle\Entity\Provider 
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set laboratory
     *
     * @param \Admin\InfinityBundle\Entity\Laboratories $laboratory
     * @return Orders
     */
    public function setLaboratory(\Admin\InfinityBundle\Entity\Laboratories $laboratory)
    {
        $this->laboratory = $laboratory;

        return $this;
    }

    /**
     * Get laboratory
     *
     * @return \Admin\InfinityBundle\Entity\Laboratories 
     */
    public function getLaboratory()
    {
        return $this->laboratory;
    }

    /**
     * Set importer
     *
     * @param \Admin\InfinityBundle\Entity\Importer $importer
     * @return Orders
     */
    public function setImporter(\Admin\InfinityBundle\Entity\Importer $importer)
    {
        $this->importer = $importer;

        return $this;
    }

    /**
     * Get importer
     *
     * @return \Admin\InfinityBundle\Entity\Importer 
     */
    public function getImporter()
    {
        return $this->importer;
    }

    /**
     * Set shipping
     *
     * @param \Admin\InfinityBundle\Entity\Shipping $shipping
     * @return Orders
     */
    public function setShipping(\Admin\InfinityBundle\Entity\Shipping $shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get shipping
     *
     * @return \Admin\InfinityBundle\Entity\Shipping 
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Set payment
     *
     * @param \Admin\InfinityBundle\Entity\Payment $payment
     * @return Orders
     */
    public function setPayment(\Admin\InfinityBundle\Entity\Payment $payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return \Admin\InfinityBundle\Entity\Payment 
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set bank
     *
     * @param \Admin\InfinityBundle\Entity\Bank $bank
     * @return Orders
     */
    public function setBank(\Admin\InfinityBundle\Entity\Bank $bank)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Get bank
     *
     * @return \Admin\InfinityBundle\Entity\Bank 
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Set dci
     *
     * @param \Admin\InfinityBundle\Entity\Dci $dci
     * @return Orders
     */
    public function setDci(\Admin\InfinityBundle\Entity\Dci $dci)
    {
        $this->dci = $dci;

        return $this;
    }

    /**
     * Get dci
     *
     * @return \Admin\InfinityBundle\Entity\Dci 
     */
    public function getDci()
    {
        return $this->dci;
    }

    /**
     * Set purchase
     *
     * @param \Admin\InfinityBundle\Entity\Purchase $purchase
     * @return Orders
     */
    public function setPurchase(\Admin\InfinityBundle\Entity\Purchase $purchase = null)
    {
        $this->purchase = $purchase;

        return $this;
    }

    /**
     * Get purchase
     *
     * @return \Admin\InfinityBundle\Entity\Purchase 
     */
    public function getPurchase()
    {
        return $this->purchase;
    }

    /**
     * Set invoice
     *
     * @param \Admin\InfinityBundle\Entity\Invoice $invoice
     * @return Orders
     */
    public function setInvoice(\Admin\InfinityBundle\Entity\Invoice $invoice = null)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get invoice
     *
     * @return \Admin\InfinityBundle\Entity\Invoice 
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Add coas
     *
     * @param \Admin\InfinityBundle\Entity\Coa $coas
     * @return Orders
     */
    public function addCoa(\Admin\InfinityBundle\Entity\Coa $coas)
    {
        $this->coas[] = $coas;

        return $this;
    }

    /**
     * Remove coas
     *
     * @param \Admin\InfinityBundle\Entity\Coa $coas
     */
    public function removeCoa(\Admin\InfinityBundle\Entity\Coa $coas)
    {
        $this->coas->removeElement($coas);
    }

    /**
     * Get coas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCoas()
    {
        return $this->coas;
    }

    /**
     * Add packingLists
     *
     * @param \Admin\InfinityBundle\Entity\PackingList $packingLists
     * @return Orders
     */
    public function addPackingList(\Admin\InfinityBundle\Entity\PackingList $packingLists)
    {
        $this->packingLists[] = $packingLists;

        return $this;
    }

    /**
     * Remove packingLists
     *
     * @param \Admin\InfinityBundle\Entity\PackingList $packingLists
     */
    public function removePackingList(\Admin\InfinityBundle\Entity\PackingList $packingLists)
    {
        $this->packingLists->removeElement($packingLists);
    }

    /**
     * Get packingLists
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPackingLists()
    {
        return $this->packingLists;
    }
}
