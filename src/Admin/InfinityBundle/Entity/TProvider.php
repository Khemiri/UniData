<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TProvider
 *
 * @ORM\Table(name="TProvider")
 * @ORM\Entity
 */
class TProvider
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
     * @Assert\NotBlank(message="Type name must not be empty")
     *
     * @Assert\Length(
     *      min = "3",
     *      max = "20",
     *      minMessage = "Type name must be at least {{ limit }} characters long",
     *      maxMessage = "Type name cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="name", type="string", length=20)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Provider", mappedBy="type")
     */
    protected $providers;

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
     * @return TProvider
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
        $this->providers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add providers
     *
     * @param \Admin\InfinityBundle\Entity\Provider $providers
     * @return TProvider
     */
    public function addProvider(\Admin\InfinityBundle\Entity\Provider $providers)
    {
        $this->providers[] = $providers;

        return $this;
    }

    /**
     * Remove providers
     *
     * @param \Admin\InfinityBundle\Entity\Provider $providers
     */
    public function removeProvider(\Admin\InfinityBundle\Entity\Provider $providers)
    {
        $this->providers->removeElement($providers);
    }

    /**
     * Get providers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProviders()
    {
        return $this->providers;
    }
}
