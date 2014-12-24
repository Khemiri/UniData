<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coa
 *
 * @ORM\Table()
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
     * @ORM\Column(name="batchNum", type="string", length=100)
     */
    private $batchNum;

    /**
     * @var string
     *
     * @ORM\Column(name="batchSize", type="decimal")
     */
    private $batchSize;

    /**
     * @var string
     *
     * @ORM\Column(name="arn", type="string", length=100)
     */
    private $arn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mfg", type="date")
     */
    private $mfg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="retest", type="date")
     */
    private $retest;

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
}
