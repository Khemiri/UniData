<?php

namespace Admin\InfinityBundle\Entity;
test
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Company
 *
 * @ORM\Table(name="Company")
 * @ORM\Entity
 */
class Company
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
     * @Assert\NotBlank(message="Company name must not be empty")
     *
     * @Assert\Length(
     *      min = "3",
     *      max = "255",
     *      minMessage = "Company name must be at least {{ limit }} characters long",
     *      maxMessage = "Company name cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Abbreviation must not be empty")
     *
     * @Assert\Length(
     *      min = "3",
     *      max = "255",
     *      minMessage = "Abbreviation must be at least {{ limit }} characters long",
     *      maxMessage = "abbreviation name cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="abbreviation", type="string", length=20)
     */
    private $abbreviation;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Address must not be empty")
     *
     * @Assert\Length(
     *      min = "4",
     *      max = "255",
     *      minMessage = "Address must be at least {{ limit }} characters long",
     *      maxMessage = "Address name cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @Assert\NotBlank(message="Path file must not be empty")
     *
     * @Assert\Length(
     *      min = "4",
     *      max = "255",
     *      minMessage = "Path file must be at least {{ limit }} characters long",
     *      maxMessage = "Path file cannot be longer than {{ limit }} characters long"
     * )
     *
     * @ORM\Column(name="logoPath", type="string", unique = true, nullable= false, length=255)
     */
    private $logoPath;

    /**
     * @ORM\OneToMany(targetEntity="Bank", mappedBy="company")
     */
    protected $banks;



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
     * @return Company
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
     * Set abreviation
     *
     * @param string $abbreviation
     * @return Company
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;

        return $this;
    }

    /**
     * Get abreviation
     *
     * @return string 
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Company
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * set LogoPath
     *
     * @param string $logoPath
     * @return Company
     */
    public function setLogoPath($logoPath)
    {
        $this->logoPath = $logoPath;

        return $this;
    }

    /**
     * @return string
     */
    public function getLogoPath()
    {
        return $this->logoPath;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->banks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add banks
     *
     * @param \Admin\InfinityBundle\Entity\Bank $banks
     * @return Company
     */
    public function addBank(\Admin\InfinityBundle\Entity\Bank $banks)
    {
        $this->banks[] = $banks;

        return $this;
    }

    /**
     * Remove banks
     *
     * @param \Admin\InfinityBundle\Entity\Bank $banks
     */
    public function removeBank(\Admin\InfinityBundle\Entity\Bank $banks)
    {
        $this->banks->removeElement($banks);
    }

    /**
     * Get banks
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBanks()
    {
        return $this->banks;
    }
}
