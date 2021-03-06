<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Batch
 *
 * @ORM\Table(name="Batch")
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
     * @Assert\NotBlank(message="Batch Number must not be empty")
     *
     * @Assert\Length(
     *      min = "2",
     *      max = "10",
     *      minMessage = "Batch Number must be at least {{ limit }} characters long",
     *      maxMessage = "Batch Number cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="batchNum", type="string", length=10)
     */
    private $batchNum;

    /**
     * @var \DateTime
     * @Assert\DateTime(
     *      message = "Manufacturing Date is not a valid date"
     * )
     * @ORM\Column(name="dateMFG", type="date")
     */
    private $dateMFG;

    /**
     * @var \DateTime
     * @Assert\DateTime(
     *      message = "Expiry Date is not a valid date"
     * )
     * @ORM\Column(name="dateEXP", type="date")
     */
    private $dateEXP;

    /**
     * @ORM\ManyToOne(targetEntity="PackingList", inversedBy="batchs")
     * @ORM\JoinColumn(name="PackingList_id", referencedColumnName="id", nullable=false)
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->drums = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set packingList
     *
     * @param \Admin\InfinityBundle\Entity\PackingList $packingList
     * @return Batch
     */
    public function setPackingList(\Admin\InfinityBundle\Entity\PackingList $packingList)
    {
        $this->packingList = $packingList;

        return $this;
    }

    /**
     * Get packingList
     *
     * @return \Admin\InfinityBundle\Entity\PackingList 
     */
    public function getPackingList()
    {
        return $this->packingList;
    }

    /**
     * Add drums
     *
     * @param \Admin\InfinityBundle\Entity\Drums $drums
     * @return Batch
     */
    public function addDrum(\Admin\InfinityBundle\Entity\Drums $drums)
    {
        $this->drums[] = $drums;

        return $this;
    }

    /**
     * Remove drums
     *
     * @param \Admin\InfinityBundle\Entity\Drums $drums
     */
    public function removeDrum(\Admin\InfinityBundle\Entity\Drums $drums)
    {
        $this->drums->removeElement($drums);
    }

    /**
     * Get drums
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDrums()
    {
        return $this->drums;
    }
}
