<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Coa
 *
 * @ORM\Table(name="Coa")
 * @ORM\Entity
 */
class Coa
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
     * @Assert\NotBlank(
     *      message="Batch Number must not be empty"
     * )
     *
     * @Assert\Length(
     *      min = "4",
     *      max = "100",
     *      minMessage = "Batch Number must be at least {{ limit }} characters long",
     *      maxMessage = "Batch Number cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="batchNum", type="string", length=100, nullable=false)
     */
    private $batchNum;

    /**
     * @var string
     *
     * @Assert\NotBlank(
     *      message="Batch Size must be decimal value"
     * )
     * @ORM\Column(name="batchSize", type="decimal", precision=10, scale=3, nullable=false)
     */
    private $batchSize;

    /**
     * @var string
     *
     * @Assert\Length(
     *      min = "4",
     *      max = "100",
     *      minMessage = "ARN must be at least {{ limit }} characters long",
     *      maxMessage = "ARN cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="arn", type="string", length=100, nullable=true)
     */
    private $arn;

    /**
     * @var \DateTime
     * @Assert\DateTime(
     *      message = "Manufacturing Date is not a valid date"
     * )
     * @ORM\Column(name="mfg", type="date")
     */
    private $mfg;

    /**
     * @var \DateTime
     * @Assert\DateTime(
     *      message = "Retest Date is not a valid date"
     * )
     * @ORM\Column(name="retest", type="date")
     */
    private $retest;

    /**
     * @var string
     *
     * @ORM\Column(name="pathFile", type="string", length=255, unique=true, nullable=true)
     */
    private $pathFile;

    /**
     * @ORM\OneToMany(targetEntity="CoaDetails", mappedBy="coa")
     */
    protected $coaDetails;


    /**
     * @ORM\ManyToOne(targetEntity="Norme", inversedBy="coas")
     * @ORM\JoinColumn(name="Norme_id", referencedColumnName="id", nullable=false)
     */
    protected $norme;

    /**
     * @ORM\ManyToOne(targetEntity="Orders", inversedBy="coas")
     * @ORM\JoinColumn(name="Orders_id", referencedColumnName="id", nullable=false)
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
     * Set batchNum
     *
     * @param string $batchNum
     * @return Coa
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
     * Set batchSize
     *
     * @param string $batchSize
     * @return Coa
     */
    public function setBatchSize($batchSize)
    {
        $this->batchSize = $batchSize;

        return $this;
    }

    /**
     * Get batchSize
     *
     * @return string 
     */
    public function getBatchSize()
    {
        return $this->batchSize;
    }

    /**
     * Set arn
     *
     * @param string $arn
     * @return Coa
     */
    public function setArn($arn)
    {
        $this->arn = $arn;

        return $this;
    }

    /**
     * Get arn
     *
     * @return string 
     */
    public function getArn()
    {
        return $this->arn;
    }

    /**
     * Set mfg
     *
     * @param \DateTime $mfg
     * @return Coa
     */
    public function setMfg($mfg)
    {
        $this->mfg = $mfg;

        return $this;
    }

    /**
     * Get mfg
     *
     * @return \DateTime 
     */
    public function getMfg()
    {
        return $this->mfg;
    }

    /**
     * Set retest
     *
     * @param \DateTime $retest
     * @return Coa
     */
    public function setRetest($retest)
    {
        $this->retest = $retest;

        return $this;
    }

    /**
     * Get retest
     *
     * @return \DateTime 
     */
    public function getRetest()
    {
        return $this->retest;
    }

    /**
     * Set pathFile
     *
     * @param string $pathFile
     * @return Coa
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
        $this->coaDetails = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add coaDetails
     *
     * @param \Admin\InfinityBundle\Entity\CoaDetails $coaDetails
     * @return Coa
     */
    public function addCoaDetail(\Admin\InfinityBundle\Entity\CoaDetails $coaDetails)
    {
        $this->coaDetails[] = $coaDetails;

        return $this;
    }

    /**
     * Remove coaDetails
     *
     * @param \Admin\InfinityBundle\Entity\CoaDetails $coaDetails
     */
    public function removeCoaDetail(\Admin\InfinityBundle\Entity\CoaDetails $coaDetails)
    {
        $this->coaDetails->removeElement($coaDetails);
    }

    /**
     * Get coaDetails
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCoaDetails()
    {
        return $this->coaDetails;
    }

    /**
     * Set norme
     *
     * @param \Admin\InfinityBundle\Entity\Norme $norme
     * @return Coa
     */
    public function setNorme(\Admin\InfinityBundle\Entity\Norme $norme)
    {
        $this->norme = $norme;

        return $this;
    }

    /**
     * Get norme
     *
     * @return \Admin\InfinityBundle\Entity\Norme 
     */
    public function getNorme()
    {
        return $this->norme;
    }

    /**
     * Set orders
     *
     * @param \Admin\InfinityBundle\Entity\Orders $orders
     * @return Coa
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
}
