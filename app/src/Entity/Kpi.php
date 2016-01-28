<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Kpi
 *
 * @ORM\Table(name="kpi")
 * @ORM\Entity(repositoryClass="App\Repository\KpiRepository")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class Kpi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="responsible", type="string", length=45, nullable=false)
     */
    private $responsible;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="period_first_initial", type="date", nullable=false)
     */
    private $periodFirstInitial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="period_first_end", type="date", nullable=false)
     */
    private $periodFirstEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="period_second_initial", type="date", nullable=false)
     */
    private $periodSecondInitial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="period_second_end", type="date", nullable=false)
     */
    private $periodSecondEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     * @Gedmo\Timestampable(on="create")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     * @Gedmo\Timestampable(on="update")
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active = '0';



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
     * Set responsible
     *
     * @param string $responsible
     *
     * @return Kpi
     */
    public function setResponsible($responsible)
    {
        $this->responsible = $responsible;

        return $this;
    }

    /**
     * Get responsible
     *
     * @return string
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * Set periodFirstInitial
     *
     * @param \DateTime $periodFirstInitial
     *
     * @return Kpi
     */
    public function setPeriodFirstInitial($periodFirstInitial)
    {
        $this->periodFirstInitial = $periodFirstInitial;

        return $this;
    }

    /**
     * Get periodFirstInitial
     *
     * @return \DateTime
     */
    public function getPeriodFirstInitial()
    {
        return $this->periodFirstInitial;
    }

    /**
     * Set periodFirstEnd
     *
     * @param \DateTime $periodFirstEnd
     *
     * @return Kpi
     */
    public function setPeriodFirstEnd($periodFirstEnd)
    {
        $this->periodFirstEnd = $periodFirstEnd;

        return $this;
    }

    /**
     * Get periodFirstEnd
     *
     * @return \DateTime
     */
    public function getPeriodFirstEnd()
    {
        return $this->periodFirstEnd;
    }

    /**
     * Set periodSecondInitial
     *
     * @param \DateTime $periodSecondInitial
     *
     * @return Kpi
     */
    public function setPeriodSecondInitial($periodSecondInitial)
    {
        $this->periodSecondInitial = $periodSecondInitial;

        return $this;
    }

    /**
     * Get periodSecondInitial
     *
     * @return \DateTime
     */
    public function getPeriodSecondInitial()
    {
        return $this->periodSecondInitial;
    }

    /**
     * Set periodSecondEnd
     *
     * @param \DateTime $periodSecondEnd
     *
     * @return Kpi
     */
    public function setPeriodSecondEnd($periodSecondEnd)
    {
        $this->periodSecondEnd = $periodSecondEnd;

        return $this;
    }

    /**
     * Get periodSecondEnd
     *
     * @return \DateTime
     */
    public function getPeriodSecondEnd()
    {
        return $this->periodSecondEnd;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Kpi
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Kpi
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set deletedAt
     *
     * @param \DateTime $deletedAt
     *
     * @return Kpi
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Get deletedAt
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Kpi
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }
}
