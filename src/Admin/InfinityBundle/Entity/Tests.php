<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tests
 *
 * @ORM\Table(name="Tests")
 * @ORM\Entity
 */
class Tests
{
    // region les champs
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
     * @Assert\NotBlank(message="Name must not be empty")
     *
     * @Assert\Length(
     *      min = "3",
     *      max = "50",
     *      minMessage = "Test name must be at least {{ limit }} characters long",
     *      maxMessage = "Test name cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="name", type="string", length=50)
     */

    private $name;

    // endregion

    //region foreign key Groupe Tests [GTests]
    /**
     * @ORM\ManyToOne(targetEntity="GTests", inversedBy="tests")
     * @ORM\JoinColumn(name="GTests_id", referencedColumnName="id", nullable=false)
     */

    protected $groupe;
    //endregion

    //region foreign key Type Tests [TTests]
    /**
     * @ORM\ManyToOne(targetEntity="TTests", inversedBy="tests")
     * @ORM\JoinColumn(name="TTests_id", referencedColumnName="id", nullable=false)
     */

    protected $type;
    //endregion

    //region foreign key Specification  [Specification]
    /**
     * @ORM\OneToMany(targetEntity="Specification", mappedBy="test")
     */

    protected $specifications;
    //endregion

    //region foreign key coaDetails [CoaDetails]
    /**
     * @ORM\OneToMany(targetEntity="CoaDetails", mappedBy="test")
     */

    protected $coaDetails;
    //endregion

    //region getteur ID
    /**
     * Get id
     *
     * @return integer 
     */

    public function getId()
    {
        return $this->id;
    }
    //endregion

    //region setteur Name
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
    //endregion

    //region getteur Name
    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    //endregion
}
