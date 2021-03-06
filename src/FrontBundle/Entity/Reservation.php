<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="FrontBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @ORM\ManyToOne(targetEntity="FrontBundle\Entity\User", inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="FrontBundle\Entity\Vehicule")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $voiture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_at", type="datetime")
     */
    private $createAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime")
     */
    private $endDate;

    /**
     * @var boolean surclassement
     *
     * @ORM\Column(name="surclassement", type="boolean", options={"default": false})
     */
    private $surclassement;

    /**
     * Get id
     *
     * @return int
     */


    public function getId()
    {
        return $this->id;
    }

    public function __construct() {
        $this->surclassement = false;
        $this->startDate = new \DateTime();
        $this->endDate = new \DateTime();
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Reservation
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set voiture
     *
     * @param string $voiture
     *
     * @return Reservation
     */
    public function setVoiture($voiture)
    {
        $this->voiture = $voiture;

        return $this;
    }

    /**
     * Get voiture
     *
     * @return string
     */
    public function getVoiture()
    {
        return $this->voiture;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Reservation
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     *
     * @return Reservation
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Reservation
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set surclassement
     *
     * @param boolean $surclassement
     *
     * @return Reservation
     */
    public function setSurclassement($surclassement)
    {
        $this->surclassement = $surclassement;

        return $this;
    }

    /**
     * Get surclassement
     *
     * @return boolean
     */
    public function getSurclassement()
    {
        return $this->surclassement;
    }
}
