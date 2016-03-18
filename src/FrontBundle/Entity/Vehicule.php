<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity
 */
class Vehicule
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    protected $nom;

    /**
     * @ORM\ManyToOne(targetEntity="FrontBundle\Entity\Gamme", inversedBy="vehicules")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $gamme;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_disponible", type="boolean")
     */
    protected $isDisponible;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", nullable=true)
     */
    protected $color;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Vehicule
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }


    /**
     * Set isDisponible
     *
     * @param boolean $isDisponible
     *
     * @return Vehicule
     */
    public function setIsDisponible($isDisponible)
    {
        $this->isDisponible = $isDisponible;

        return $this;
    }

    /**
     * Get isDisponible
     *
     * @return boolean
     */
    public function getIsDisponible()
    {
        return $this->isDisponible;
    }

    /**
     * Set gamme
     *
     * @param \FrontBundle\Entity\Gamme $gamme
     *
     * @return Vehicule
     */
    public function setGamme(\FrontBundle\Entity\Gamme $gamme = null)
    {
        $this->gamme = $gamme;

        return $this;
    }

    /**
     * Get gamme
     *
     * @return \FrontBundle\Entity\Gamme
     */
    public function getGamme()
    {
        return $this->gamme;
    }

    public function __toString()
    {
        return $this->gamme;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Vehicule
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
}
