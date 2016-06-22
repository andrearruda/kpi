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
     * @ORM\Column(name="first_year_number_of_employees", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $firstYearNumberOfEmployees;

    /**
     * @var integer
     *
     * @ORM\Column(name="first_year_icons", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $firstYearIcons;

    /**
     * @var integer
     *
     * @ORM\Column(name="second_year_number_of_employees", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $secondYearNumberOfEmployees;

    /**
     * @var integer
     *
     * @ORM\Column(name="second_year_icons", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $secondYearIcons;

    /**
     * @var float
     *
     * @ORM\Column(name="first_year_billing_by_employees", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $firstYearBillingByEmployees;

    /**
     * @var float
     *
     * @ORM\Column(name="second_year_billing_by_employees", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $secondYearBillingByEmployees;

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
     * Set firstYearNumberOfEmployees
     *
     * @param integer $firstYearNumberOfEmployees
     *
     * @return Employees
     */
    public function setFirstYearNumberOfEmployees($firstYearNumberOfEmployees)
    {
        $this->firstYearNumberOfEmployees = $firstYearNumberOfEmployees;

        return $this;
    }

    /**
     * Get firstYearNumberOfEmployees
     *
     * @return integer
     */
    public function getFirstYearNumberOfEmployees()
    {
        return $this->firstYearNumberOfEmployees;
    }

    /**
     * Set secondYearNumberOfEmployees
     *
     * @param integer $secondYearNumberOfEmployees
     *
     * @return Employees
     */
    public function setSecondYearNumberOfEmployees($secondYearNumberOfEmployees)
    {
        $this->secondYearNumberOfEmployees = $secondYearNumberOfEmployees;

        return $this;
    }

    /**
     * Get secondYearNumberOfEmployees
     *
     * @return integer
     */
    public function getSecondYearNumberOfEmployees()
    {
        return $this->secondYearNumberOfEmployees;
    }

    /**
     * Set firstYearIcons
     *
     * @param integer $firstYearIcons
     *
     * @return Employees
     */
    public function setFirstYearIcons($firstYearIcons)
    {
        $this->firstYearIcons = $firstYearIcons;

        return $this;
    }

    /**
     * Get firstYearIcons
     *
     * @return integer
     */
    public function getFirstYearIcons()
    {
        return $this->firstYearIcons;
    }

    /**
     * Set secondYearIcons
     *
     * @param integer $secondYearIcons
     *
     * @return Employees
     */
    public function setSecondYearIcons($secondYearIcons)
    {
        $this->secondYearIcons = $secondYearIcons;

        return $this;
    }

    /**
     * Get secondYearIcons
     *
     * @return integer
     */
    public function getSecondYearIcons()
    {
        return $this->secondYearIcons;
    }

    /**
     * Set firstYearBillingByEmployees
     *
     * @param float $firstYearBillingByEmployees
     *
     * @return Employees
     */
    public function setFirstYearBillingByEmployees($firstYearBillingByEmployees)
    {
        $this->firstYearBillingByEmployees = $firstYearBillingByEmployees;

        return $this;
    }

    /**
     * Get firstYearBillingByEmployees
     *
     * @return float
     */
    public function getFirstYearBillingByEmployees()
    {
        return $this->firstYearBillingByEmployees;
    }

    /**
     * Set secondYearBillingByEmployees
     *
     * @param float $secondYearBillingByEmployees
     *
     * @return Employees
     */
    public function setSecondYearBillingByEmployees($secondYearBillingByEmployees)
    {
        $this->secondYearBillingByEmployees = $secondYearBillingByEmployees;

        return $this;
    }

    /**
     * Get secondYearBillingByEmployees
     *
     * @return float
     */
    public function getSecondYearBillingByEmployees()
    {
        return $this->secondYearBillingByEmployees;
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

