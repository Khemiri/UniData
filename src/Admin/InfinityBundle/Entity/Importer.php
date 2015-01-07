<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Importer
 *
 * @ORM\Table(name="Importer")
 * @ORM\Entity
 */
class Importer
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
     * @Assert\NotBlank(message="Importer name must not be empty")
     *
     * @Assert\Length(
     *      min = "3",
     *      max = "50",
     *      minMessage = "Importer name must be at least {{ limit }} characters long",
     *      maxMessage = "Importer name cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Orders", mappedBy="importer")
     */
    protected $orders;

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
     * @return Importer
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
