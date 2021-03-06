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
     * @ORM\Column(name="resultValue", type="string", length=255, nullable=false)
     */
    private $resultValue;

    /**
     * @var string
     *
     * @ORM\Column(name="specification", type="string", length=255, nullable=true)
     */
    private $specification;

    /**
     * @ORM\ManyToOne(targetEntity="Tests", inversedBy="coaDetails")
     * @ORM\JoinColumn(name="Tests_id", referencedColumnName="id", nullable=false)
     */
    protected $test;

    /**
     * @ORM\ManyToOne(targetEntity="Coa", inversedBy="coaDetails")
     * @ORM\JoinColumn(name="Coa_id", referencedColumnName="id", nullable=false)
     */
    protected $coa;

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

    /**
     * Set test
     *
     * @param \Admin\InfinityBundle\Entity\Tests $test
     * @return CoaDetails
     */
    public function setTest(\Admin\InfinityBundle\Entity\Tests $test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return \Admin\InfinityBundle\Entity\Tests 
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Set coa
     *
     * @param \Admin\InfinityBundle\Entity\Coa $coa
     * @return CoaDetails
     */
    public function setCoa(\Admin\InfinityBundle\Entity\Coa $coa)
    {
        $this->coa = $coa;

        return $this;
    }

    /**
     * Get coa
     *
     * @return \Admin\InfinityBundle\Entity\Coa 
     */
    public function getCoa()
    {
        return $this->coa;
    }
}
