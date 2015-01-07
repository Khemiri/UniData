<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Countries
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Countries
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
     * @Assert\NotBlank(message="Country name must not be empty")
     *
     * @Assert\Length(
     *      min = "2",
     *      max = "50",
     *      minMessage = "Country name must be at least {{ limit }} characters long",
     *      maxMessage = "Country name cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="alpha 2 must not be empty")
     *
     * @Assert\Length(
     *      min = "2",
     *      max = "2",
     *      minMessage = "alpha 2 should have exactly {{ limit }} characters",
     * )
     *
     * @ORM\Column(name="alpha_2", type="string", length=2)
     */
    private $alpha2;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="alpha 3 name must not be empty")
     *
     * @Assert\Length(
     *      min = "3",
     *      max = "3",
     *      minMessage = "alpha 3 should have exactly {{ limit }} characters",
     * )
     *
     *
     * @ORM\Column(name="alpha_3", type="string", length=3)
     */
    private $alpha3;

    /**
     * @ORM\OneToMany(targetEntity="Provider", mappedBy="country")
     */
    protected $providers;

    /**
     * @ORM\OneToMany(targetEntity="Laboratories", mappedBy="country")
     */
    protected $laboratory;


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
     * @return Countries
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
     * Set alpha2
     *
     * @param string $alpha2
     * @return Countries
     */
    public function setAlpha2($alpha2)
    {
        $this->alpha2 = $alpha2;

        return $this;
    }

    /**
     * Get alpha2
     *
     * @return string 
     */
    public function getAlpha2()
    {
        return $this->alpha2;
    }

    /**
     * Set alpha3
     *
     * @param string $alpha3
     * @return Countries
     */
    public function setAlpha3($alpha3)
    {
        $this->alpha3 = $alpha3;

        return $this;
    }

    /**
     * Get alpha3
     *
     * @return string 
     */
    public function getAlpha3()
    {
        return $this->alpha3;
    }
}
