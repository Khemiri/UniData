<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Specification
 *
 * @ORM\Table(name="Specification")
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
     * @Assert\NotBlank(message="Limit Value Must Not Be Empty")
     *
     * @Assert\Length(
     *      min = "3",
     *      max = "255",
     *      minMessage = "Limit Value must be at least {{ limit }} characters long",
     *      maxMessage = "Limit Value cannot be longer than {{ limit }} characters long"
     * )
     * @ORM\Column(name="limitValue", type="string", length=255)
     */
    private $limitValue;

    /**
     * @ORM\ManyToOne(targetEntity="Provider", inversedBy="specifications")
     * @ORM\JoinColumn(name="Provider_id", referencedColumnName="id")
     */
    protected $provider;

    /**
     * @ORM\ManyToOne(targetEntity="Dci", inversedBy="specifications")
     * @ORM\JoinColumn(name="Dci_id", referencedColumnName="id", nullable=false)
     */
    protected $dci;

    /**
     * @ORM\ManyToOne(targetEntity="Norme", inversedBy="specifications")
     * @ORM\JoinColumn(name="Norme_id", referencedColumnName="id", nullable=false)
     */
    protected $norme;

    /**
     * @ORM\ManyToOne(targetEntity="Tests", inversedBy="specifications")
     * @ORM\JoinColumn(name="Tests_id", referencedColumnName="id", nullable=false)
     */
    protected $test;

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
