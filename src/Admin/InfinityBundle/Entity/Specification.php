<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specification
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Specification
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
     * @ORM\Column(name="limitValue", type="string", length=255)
     */
    private $limitValue;


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
     * Set limitValue
     *
     * @param string $limitValue
     * @return Specification
     */
    public function setLimitValue($limitValue)
    {
        $this->limitValue = $limitValue;

        return $this;
    }

    /**
     * Get limitValue
     *
     * @return string 
     */
    public function getLimitValue()
    {
        return $this->limitValue;
    }
}
