<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Norme
 *
 * @ORM\Table(name="Norme")
 * @ORM\Entity
 */
class Norme
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
     * @Assert\NotBlank(message="Norme must not be empty")
     *
     * @Assert\Length(
     *      min = "1",
     *      max = "20",
     *      minMessage = "Norme must be at least {{ limit }} characters long",
     *      maxMessage = "Norme cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="name", type="string", length=20)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Specification", mappedBy="norme")
     */
    protected $specifications;

    /**
     * @ORM\OneToMany(targetEntity="Coa", mappedBy="norme")
     */
    protected $coas;

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
     * @return Norme
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->specifications = new \Doctrine\Common\Collections\ArrayCollection();
        $this->coas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add specifications
     *
     * @param \Admin\InfinityBundle\Entity\Specification $specifications
     * @return Norme
     */
    public function addSpecification(\Admin\InfinityBundle\Entity\Specification $specifications)
    {
        $this->specifications[] = $specifications;

        return $this;
    }

    /**
     * Remove specifications
     *
     * @param \Admin\InfinityBundle\Entity\Specification $specifications
     */
    public function removeSpecification(\Admin\InfinityBundle\Entity\Specification $specifications)
    {
        $this->specifications->removeElement($specifications);
    }

    /**
     * Get specifications
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSpecifications()
    {
        return $this->specifications;
    }

    /**
     * Add coas
     *
     * @param \Admin\InfinityBundle\Entity\Coa $coas
     * @return Norme
     */
    public function addCoa(\Admin\InfinityBundle\Entity\Coa $coas)
    {
        $this->coas[] = $coas;

        return $this;
    }

    /**
     * Remove coas
     *
     * @param \Admin\InfinityBundle\Entity\Coa $coas
     */
    public function removeCoa(\Admin\InfinityBundle\Entity\Coa $coas)
    {
        $this->coas->removeElement($coas);
    }

    /**
     * Get coas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCoas()
    {
        return $this->coas;
    }
}
