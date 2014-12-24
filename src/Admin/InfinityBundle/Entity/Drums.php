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
     * @ORM\Column(name="nwt", type="decimal")
     */
    private $nwt;

    /**
     * @var string
     *
     * @ORM\Column(name="gwt", type="decimal")
     */
    private $gwt;

    /**
     * @var string
     *
     * @ORM\Column(name="numOfDrums", type="string", length=255)
     */
    private $numOfDrums;


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
}
