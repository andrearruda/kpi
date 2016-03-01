<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Employees
 *
 * @ORM\Table(name="employees", indexes={@ORM\Index(name="fk_employees_kpi1_idx", columns={"kpi_id"})})
 * @ORM\Entity
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class Employees
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="contributors_1_year_number_of_employees", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $contributors1YearNumberOfEmployees;

    /**
     * @var integer
     *
     * @ORM\Column(name="contributors_2_year_number_of_employees", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $contributors2YearNumberOfEmployees;

    /**
     * @var integer
     *
     * @ORM\Column(name="contributors_1_year_icons", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $contributors1YearIcons;

    /**
     * @var integer
     *
     * @ORM\Column(name="contributors_2_year_icons", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $contributors2YearIcons;

    /**
     * @var float
     *
     * @ORM\Column(name="contributors_1_year_billing_by_employees", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $contributors1YearBillingByEmployees;

    /**
     * @var float
     *
     * @ORM\Column(name="contributors_2_year_billing_by_employees", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $contributors2YearBillingByEmployees;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     * @Gedmo\Timestampable(on="create")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     * @Gedmo\Timestampable(on="update")
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", precision=0, scale=0, nullable=true, unique=false)
     */
    private $deletedAt;

    /**
     * @var \App\Entity\Kpi
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Kpi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="kpi_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $kpi;


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
     * Set contributors1YearNumberOfEmployees
     *
     * @param integer $contributors1YearNumberOfEmployees
     *
     * @return Employees
     */
    public function setContributors1YearNumberOfEmployees($contributors1YearNumberOfEmployees)
    {
        $this->contributors1YearNumberOfEmployees = $contributors1YearNumberOfEmployees;

        return $this;
    }

    /**
     * Get contributors1YearNumberOfEmployees
     *
     * @return integer
     */
    public function getContributors1YearNumberOfEmployees()
    {
        return $this->contributors1YearNumberOfEmployees;
    }

    /**
     * Set contributors2YearNumberOfEmployees
     *
     * @param integer $contributors2YearNumberOfEmployees
     *
     * @return Employees
     */
    public function setContributors2YearNumberOfEmployees($contributors2YearNumberOfEmployees)
    {
        $this->contributors2YearNumberOfEmployees = $contributors2YearNumberOfEmployees;

        return $this;
    }

    /**
     * Get contributors2YearNumberOfEmployees
     *
     * @return integer
     */
    public function getContributors2YearNumberOfEmployees()
    {
        return $this->contributors2YearNumberOfEmployees;
    }

    /**
     * Set contributors1YearIcons
     *
     * @param integer $contributors1YearIcons
     *
     * @return Employees
     */
    public function setContributors1YearIcons($contributors1YearIcons)
    {
        $this->contributors1YearIcons = $contributors1YearIcons;

        return $this;
    }

    /**
     * Get contributors1YearIcons
     *
     * @return integer
     */
    public function getContributors1YearIcons()
    {
        return $this->contributors1YearIcons;
    }

    /**
     * Set contributors2YearIcons
     *
     * @param integer $contributors2YearIcons
     *
     * @return Employees
     */
    public function setContributors2YearIcons($contributors2YearIcons)
    {
        $this->contributors2YearIcons = $contributors2YearIcons;

        return $this;
    }

    /**
     * Get contributors2YearIcons
     *
     * @return integer
     */
    public function getContributors2YearIcons()
    {
        return $this->contributors2YearIcons;
    }

    /**
     * Set contributors1YearBillingByEmployees
     *
     * @param float $contributors1YearBillingByEmployees
     *
     * @return Employees
     */
    public function setContributors1YearBillingByEmployees($contributors1YearBillingByEmployees)
    {
        $this->contributors1YearBillingByEmployees = $contributors1YearBillingByEmployees;

        return $this;
    }

    /**
     * Get contributors1YearBillingByEmployees
     *
     * @return float
     */
    public function getContributors1YearBillingByEmployees()
    {
        return $this->contributors1YearBillingByEmployees;
    }

    /**
     * Set contributors2YearBillingByEmployees
     *
     * @param float $contributors2YearBillingByEmployees
     *
     * @return Employees
     */
    public function setContributors2YearBillingByEmployees($contributors2YearBillingByEmployees)
    {
        $this->contributors2YearBillingByEmployees = $contributors2YearBillingByEmployees;

        return $this;
    }

    /**
     * Get contributors2YearBillingByEmployees
     *
     * @return float
     */
    public function getContributors2YearBillingByEmployees()
    {
        return $this->contributors2YearBillingByEmployees;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Employees
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
     * @return Employees
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
     * @return Employees
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
     * Set kpi
     *
     * @param \App\Entity\Kpi $kpi
     *
     * @return Employees
     */
    public function setKpi(\App\Entity\Kpi $kpi = null)
    {
        $this->kpi = $kpi;

        return $this;
    }

    /**
     * Get kpi
     *
     * @return \App\Entity\Kpi
     */
    public function getKpi()
    {
        return $this->kpi;
    }
}

