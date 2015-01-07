<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Drums
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Drums
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
     * @ORM\Column(name="nwt", type="decimal", precision=10, scale=3, nullable=false)
     */
    private $nwt;

    /**
     * @var string
     *
     * @ORM\Column(name="gwt", type="decimal", precision=10, scale=3, nullable=false)
     */
    private $gwt;

    /**
     * @var string
     *
     * @ORM\Column(name="numOfDrums", type="string", length=255, nullable=false)
     */
    private $numOfDrums;

    /**
     * @ORM\ManyToOne(targetEntity="Batch", inversedBy="drums")
     * @ORM\JoinColumn(name="Batch_id", referencedColumnName="id", nullable=false)
     */
    protected $batch;


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
     * Set nwt
     *
     * @param string $nwt
     * @return Drums
     */
    public function setNwt($nwt)
    {
        $this->nwt = $nwt;

        return $this;
    }

    /**
     * Get nwt
     *
     * @return string 
     */
    public function getNwt()
    {
        return $this->nwt;
    }

    /**
     * Set gwt
     *
     * @param string $gwt
     * @return Drums
     */
    public function setGwt($gwt)
    {
        $this->gwt = $gwt;

        return $this;
    }

    /**
     * Get gwt
     *
     * @return string 
     */
    public function getGwt()
    {
        return $this->gwt;
    }

    /**
     * Set numOfDrums
     *
     * @param string $numOfDrums
     * @return Drums
     */
    public function setNumOfDrums($numOfDrums)
    {
        $this->numOfDrums = $numOfDrums;

        return $this;
    }

    /**
     * Get numOfDrums
     *
     * @return string 
     */
    public function getNumOfDrums()
    {
        return $this->numOfDrums;
    }

    /**
     * Set batch
     *
     * @param \Admin\InfinityBundle\Entity\Batch $batch
     * @return Drums
     */
    public function setBatch(\Admin\InfinityBundle\Entity\Batch $batch)
    {
        $this->batch = $batch;

        return $this;
    }

    /**
     * Get batch
     *
     * @return \Admin\InfinityBundle\Entity\Batch 
     */
    public function getBatch()
    {
        return $this->batch;
    }
}
