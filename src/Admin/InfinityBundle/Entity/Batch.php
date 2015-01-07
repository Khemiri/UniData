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
     * @ORM\ManyToOne(targetEntity="PackingList", inversedBy="orders")
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
}
