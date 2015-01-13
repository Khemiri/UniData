<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Purchase
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Purchase
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
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateExpLc", type="date", nullable=true)
     */
    private $dateExpLc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLc", type="date", nullable=true)
     */
    private $dateLc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateUltime", type="date", nullable=true)
     */
    private $dateUltime;

    /**
     * @var string
     *
     * @ORM\Column(name="lcn", type="string", length=100, nullable=true)
     */
    private $lcn;

    /**
     * @var string
     *
     * @ORM\Column(name="shipment", type="string", length=100, nullable=true)
     */
    private $shipment;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=100, nullable=true)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="bankLc", type="string", length=255, nullable=true)
     */
    private $bankLc;

    /**
     * @var string
     *
     * @ORM\Column(name="pathFile", type="string", length=255, nullable=true)
     */
    private $pathFile;

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
     * @return Purchase
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
     * Set dateExpLc
     *
     * @param \DateTime $dateExpLc
     * @return Purchase
     */
    public function setDateExpLc($dateExpLc)
    {
        $this->dateExpLc = $dateExpLc;

        return $this;
    }

    /**
     * Get dateExpLc
     *
     * @return \DateTime 
     */
    public function getDateExpLc()
    {
        return $this->dateExpLc;
    }

    /**
     * Set dateLc
     *
     * @param \DateTime $dateLc
     * @return Purchase
     */
    public function setDateLc($dateLc)
    {
        $this->dateLc = $dateLc;

        return $this;
    }

    /**
     * Get dateLc
     *
     * @return \DateTime 
     */
    public function getDateLc()
    {
        return $this->dateLc;
    }

    /**
     * Set dateUltime
     *
     * @param \DateTime $dateUltime
     * @return Purchase
     */
    public function setDateUltime($dateUltime)
    {
        $this->dateUltime = $dateUltime;

        return $this;
    }

    /**
     * Get dateUltime
     *
     * @return \DateTime 
     */
    public function getDateUltime()
    {
        return $this->dateUltime;
    }

    /**
     * Set lcn
     *
     * @param string $lcn
     * @return Purchase
     */
    public function setLcn($lcn)
    {
        $this->lcn = $lcn;

        return $this;
    }

    /**
     * Get lcn
     *
     * @return string 
     */
    public function getLcn()
    {
        return $this->lcn;
    }

    /**
     * Set shipment
     *
     * @param string $shipment
     * @return Purchase
     */
    public function setShipment($shipment)
    {
        $this->shipment = $shipment;

        return $this;
    }

    /**
     * Get shipment
     *
     * @return string 
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Set ref
     *
     * @param string $ref
     * @return Purchase
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string 
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set bankLc
     *
     * @param string $bankLc
     * @return Purchase
     */
    public function setBankLc($bankLc)
    {
        $this->bankLc = $bankLc;

        return $this;
    }

    /**
     * Get bankLc
     *
     * @return string 
     */
    public function getBankLc()
    {
        return $this->bankLc;
    }

    /**
     * Set pathFile
     *
     * @param string $pathFile
     * @return Purchase
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
