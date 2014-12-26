<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Batch
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Batch
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
     * @ORM\Column(name="batchNum", type="string", length=10)
     */
    private $batchNum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateMFG", type="date")
     */
    private $dateMFG;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEXP", type="date")
     */
    private $dateEXP;

    /**
     * @ORM\ManyToOne(targetEntity="PackingList", inversedBy="orders")
     * @ORM\JoinColumn(name="PackingList_id", referencedColumnName="id")
     */
    protected $packingList;

    /**
     * @ORM\OneToMany(targetEntity="Drums", mappedBy="batch")
     */
    protected $drums;


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
     * Set batchNum
     *
     * @param string $batchNum
     * @return Batch
     */
    public function setBatchNum($batchNum)
    {
        $this->batchNum = $batchNum;

        return $this;
    }

    /**
     * Get batchNum
     *
     * @return string 
     */
    public function getBatchNum()
    {
        return $this->batchNum;
    }

    /**
     * Set dateMFG
     *
     * @param \DateTime $dateMFG
     * @return Batch
     */
    public function setDateMFG($dateMFG)
    {
        $this->dateMFG = $dateMFG;

        return $this;
    }

    /**
     * Get dateMFG
     *
     * @return \DateTime 
     */
    public function getDateMFG()
    {
        return $this->dateMFG;
    }

    /**
     * Set dateEXP
     *
     * @param \DateTime $dateEXP
     * @return Batch
     */
    public function setDateEXP($dateEXP)
    {
        $this->dateEXP = $dateEXP;

        return $this;
    }

    /**
     * Get dateEXP
     *
     * @return \DateTime 
     */
    public function getDateEXP()
    {
        return $this->dateEXP;
    }
}
