<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * PackingList
 *
 * @ORM\Table(name="PackingList")
 * @ORM\Entity
 */
class PackingList
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
     * @var \DateTime
     * @Assert\DateTime(
     *      message = "Date Packing List is not a valid date"
     * )
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     * @Assert\NotBlank(message="Invoice Number must not be empty")
     *
     * @Assert\Length(
     *      min = "4",
     *      max = "100",
     *      minMessage = "Invoice Number must be at least {{ limit }} characters long",
     *      maxMessage = "Invoice Number cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="invoiceNum", type="string", length=100)
     */
    private $invoiceNum;

    /**
     * @var string
     * @Assert\NotBlank(
     *          message="No. & kind of Pkgs must not be empty"
     * )
     *
     * @Assert\Length(
     *      min = "4",
     *      max = "100",
     *      minMessage = "No. & kind of Pkgs must be at least {{ limit }} characters long",
     *      maxMessage = "No. & kind of Pkgs cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="nkop", type="string", length=100)
     */
    private $nkop;

    /**
     * @var string
     *
     * @Assert\NotBlank(
     *      message="Port of discharge must not be empty"
     * )
     *
     * @Assert\Length(
     *      min = "4",
     *      max = "100",
     *      minMessage = "Port of discharge must be at least {{ limit }} characters long",
     *      maxMessage = "Port of discharge cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="portOfDischarge", type="string", length=100)
     */
    private $portOfDischarge;

    /**
     * @var string
     *
     * @Assert\NotBlank(
     *      message="Port of loading must not be empty"
     * )
     *
     * @Assert\Length(
     *      min = "4",
     *      max = "100",
     *      minMessage = "Port of loading must be at least {{ limit }} characters long",
     *      maxMessage = "Port of loading cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="portOfLoading", type="string", length=100)
     */
    private $portOfLoading;

    /**
     * @var string
     *
     * @Assert\NotBlank(
     *      message="Vessel / Voyage N° must not be empty"
     * )
     *
     * @Assert\Length(
     *      min = "4",
     *      max = "100",
     *      minMessage = "Vessel / Voyage N° must be at least {{ limit }} characters long",
     *      maxMessage = "Vessel / Voyage N° cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="vvno", type="string", length=100)
     */
    private $vvno;

    /**
     * @var string
     *
     * @ORM\Column(name="pathFile", type="string", length=255, nullable=true)
     */
    private $pathFile;

    /**
     * @ORM\ManyToOne(targetEntity="Orders", inversedBy="packingLists")
     * @ORM\JoinColumn(name="Orders_id", referencedColumnName="id", nullable=false)
     */
    protected $orders;

    /**
     * @ORM\OneToMany(targetEntity="Batch", mappedBy="packingList")
     */
    protected $batchs;


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
     * Set date
     *
     * @param \DateTime $date
     * @return PackingList
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
     * Set invoiceNum
     *
     * @param string $invoiceNum
     * @return PackingList
     */
    public function setInvoiceNum($invoiceNum)
    {
        $this->invoiceNum = $invoiceNum;

        return $this;
    }

    /**
     * Get invoiceNum
     *
     * @return string 
     */
    public function getInvoiceNum()
    {
        return $this->invoiceNum;
    }

    /**
     * Set nkop
     *
     * @param string $nkop
     * @return PackingList
     */
    public function setNkop($nkop)
    {
        $this->nkop = $nkop;

        return $this;
    }

    /**
     * Get nkop
     *
     * @return string 
     */
    public function getNkop()
    {
        return $this->nkop;
    }

    /**
     * Set portOfDischarge
     *
     * @param string $portOfDischarge
     * @return PackingList
     */
    public function setPortOfDischarge($portOfDischarge)
    {
        $this->portOfDischarge = $portOfDischarge;

        return $this;
    }

    /**
     * Get portOfDischarge
     *
     * @return string 
     */
    public function getPortOfDischarge()
    {
        return $this->portOfDischarge;
    }

    /**
     * Set portOfLoading
     *
     * @param string $portOfLoading
     * @return PackingList
     */
    public function setPortOfLoading($portOfLoading)
    {
        $this->portOfLoading = $portOfLoading;

        return $this;
    }

    /**
     * Get portOfLoading
     *
     * @return string 
     */
    public function getPortOfLoading()
    {
        return $this->portOfLoading;
    }

    /**
     * Set vvno
     *
     * @param string $vvno
     * @return PackingList
     */
    public function setVvno($vvno)
    {
        $this->vvno = $vvno;

        return $this;
    }

    /**
     * Get vvno
     *
     * @return string 
     */
    public function getVvno()
    {
        return $this->vvno;
    }

    /**
     * Set pathFile
     *
     * @param string $pathFile
     * @return PackingList
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
        $this->batchs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set orders
     *
     * @param \Admin\InfinityBundle\Entity\Orders $orders
     * @return PackingList
     */
    public function setOrders(\Admin\InfinityBundle\Entity\Orders $orders)
    {
        $this->orders = $orders;

        return $this;
    }

    /**
     * Get orders
     *
     * @return \Admin\InfinityBundle\Entity\Orders 
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Add batchs
     *
     * @param \Admin\InfinityBundle\Entity\Batch $batchs
     * @return PackingList
     */
    public function addBatch(\Admin\InfinityBundle\Entity\Batch $batchs)
    {
        $this->batchs[] = $batchs;

        return $this;
    }

    /**
     * Remove batchs
     *
     * @param \Admin\InfinityBundle\Entity\Batch $batchs
     */
    public function removeBatch(\Admin\InfinityBundle\Entity\Batch $batchs)
    {
        $this->batchs->removeElement($batchs);
    }

    /**
     * Get batchs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBatchs()
    {
        return $this->batchs;
    }
}
