<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tests
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tests
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
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="GTests", inversedBy="tests")
     * @ORM\JoinColumn(name="GTests_id", referencedColumnName="id")
     */
    protected $groupe;

    /**
     * @ORM\ManyToOne(targetEntity="TTests", inversedBy="tests")
     * @ORM\JoinColumn(name="TTests_id", referencedColumnName="id")
     */
    protected $type;


    /**
     * @ORM\OneToMany(targetEntity="Specification", mappedBy="test")
     */
    protected $specifications;

    /**
     * @ORM\OneToMany(targetEntity="CoaDetails", mappedBy="test")
     */
    protected $coaDetails;

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
     * Set name
     *
     * @param string $name
     * @return Tests
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
