<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoaDetails
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class CoaDetails
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
     * @ORM\Column(name="resultValue", type="string", length=255)
     */
    private $resultValue;

    /**
     * @var string
     *
     * @ORM\Column(name="specification", type="string", length=255)
     */
    private $specification;


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
     * Set value
     *
     * @param string $resultValue
     * @return CoaDetails
     */
    public function setResultValue($resultValue)
    {
        $this->resultValue = $resultValue;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getResultValue()
    {
        return $this->resultValue;
    }

    /**
     * Set specification
     *
     * @param string $specification
     * @return CoaDetails
     */
    public function setSpecification($specification)
    {
        $this->specification = $specification;

        return $this;
    }

    /**
     * Get specification
     *
     * @return string 
     */
    public function getSpecification()
    {
        return $this->specification;
    }
}
