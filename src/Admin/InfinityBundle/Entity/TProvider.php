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
}
