<?php

namespace Admin\InfinityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dci
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Dci
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="priceClient", type="decimal")
     */
    private $priceClient;

    /**
     * @var string
     *
     * @ORM\Column(name="priceProvider", type="decimal")
     */
    private $priceProvider;


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
     * @return Dci
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
     * Set priceClient
     *
     * @param string $priceClient
     * @return Dci
     */
    public function setPriceClient($priceClient)
    {
        $this->priceClient = $priceClient;

        return $this;
    }

    /**
     * Get priceClient
     *
     * @return string 
     */
    public function getPriceClient()
    {
        return $this->priceClient;
    }

    /**
     * Set priceProvider
     *
     * @param string $priceProvider
     * @return Dci
     */
    public function setPriceProvider($priceProvider)
    {
        $this->priceProvider = $priceProvider;

        return $this;
    }

    /**
     * Get priceProvider
     *
     * @return string 
     */
    public function getPriceProvider()
    {
        return $this->priceProvider;
    }
}
