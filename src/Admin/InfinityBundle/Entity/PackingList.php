<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PackingList
 *
 * @ORM\Table()
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
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="invoiceNum", type="string", length=100)
     */
    private $invoiceNum;

    /**
     * @var string
     *
     * @ORM\Column(name="nkop", type="string", length=100)
     */
    private $nkop;

    /**
     * @var string
     *
     * @ORM\Column(name="portOfDischarge", type="string", length=100)
     */
    private $portOfDischarge;

    /**
     * @var string
     *
     * @ORM\Column(name="portOfLoading", type="string", length=100)
     */
    private $portOfLoading;

    /**
     * @var string
     *
     * @ORM\Column(name="vvno", type="string", length=100)
     */
    private $vvno;

    /**
     * @var string
     *
     * @ORM\Column(name="pathFile", type="string", length=255)
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
}
