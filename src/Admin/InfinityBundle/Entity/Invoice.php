<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Invoice
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Invoice
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
     * @Assert\DateTime()
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     * @Assert\DateTime()
     * @ORM\Column(name="datePayment", type="date", nullable=true)
     */
    private $datePayment;

    /**
     * @var \DateTime
     * @Assert\DateTime()
     * @ORM\Column(name="dpcb", type="date", nullable=true)
     */
    private $dpcb;

    /**
     * @var \DateTime
     * @Assert\DateTime()
     * @ORM\Column(name="dateSortie", type="date", nullable=true)
     */
    private $dateSortie;

    /**
     * @var string
     *
     * @ORM\Column(name="airwaybill", type="string", length=255, nullable=true)
     */
    private $airwaybill;


    /**
     * @ORM\OneToOne(targetEntity="Orders", mappedBy="invoice")
     */
    protected $order;


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
     * @return Invoice
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
     * Set datePayment
     *
     * @param \DateTime $datePayment
     * @return Invoice
     */
    public function setDatePayment($datePayment)
    {
        $this->datePayment = $datePayment;

        return $this;
    }

    /**
     * Get datePayment
     *
     * @return \DateTime 
     */
    public function getDatePayment()
    {
        return $this->datePayment;
    }

    /**
     * Set dpcb
     *
     * @param \DateTime $dpcb
     * @return Invoice
     */
    public function setDpcb($dpcb)
    {
        $this->dpcb = $dpcb;

        return $this;
    }

    /**
     * Get dpcb
     *
     * @return \DateTime 
     */
    public function getDpcb()
    {
        return $this->dpcb;
    }

    /**
     * Set airwaybill
     *
     * @param string $airwaybill
     * @return Invoice
     */
    public function setAirwaybill($airwaybill)
    {
        $this->airwaybill = $airwaybill;

        return $this;
    }

    /**
     * Get airwaybill
     *
     * @return string 
     */
    public function getAirwaybill()
    {
        return $this->airwaybill;
    }

    /**
     * Set dateSortie
     *
     * @param \DateTime $dateSortie
     * @return Invoice
     */
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    /**
     * Get dateSortie
     *
     * @return \DateTime 
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }
}
