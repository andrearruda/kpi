<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * OminousManagement
 *
 * @ORM\Table(name="ominous_management", indexes={@ORM\Index(name="fk_ominous_management_kpi_type1_idx", columns={"kpi_type_id"}), @ORM\Index(name="fk_ominous_management_kpi1_idx", columns={"kpi_id"})})
 * @ORM\Entity
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class OminousManagement
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
     * @var float
     *
     * @ORM\Column(name="revenues_initial", type="float", precision=10, scale=0, nullable=false)
     */
    private $revenuesInitial;

    /**
     * @var float
     *
     * @ORM\Column(name="revenues_end", type="float", precision=10, scale=0, nullable=false)
     */
    private $revenuesEnd;

    /**
     * @var float
     *
     * @ORM\Column(name="revenues_target", type="float", precision=10, scale=0, nullable=false)
     */
    private $revenuesTarget;

    /**
     * @var float
     *
     * @ORM\Column(name="revenues_percentage", type="float", precision=10, scale=0, nullable=false)
     */
    private $revenuesPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="ebtida_initial", type="float", precision=10, scale=0, nullable=false)
     */
    private $ebtidaInitial;

    /**
     * @var float
     *
     * @ORM\Column(name="ebtida_end", type="float", precision=10, scale=0, nullable=false)
     */
    private $ebtidaEnd;

    /**
     * @var float
     *
     * @ORM\Column(name="ebtida_target", type="float", precision=10, scale=0, nullable=false)
     */
    private $ebtidaTarget;

    /**
     * @var float
     *
     * @ORM\Column(name="ebtida_percentage", type="float", precision=10, scale=0, nullable=false)
     */
    private $ebtidaPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="net_profit_initial", type="float", precision=10, scale=0, nullable=false)
     */
    private $netProfitInitial;

    /**
     * @var float
     *
     * @ORM\Column(name="net_profit_end", type="float", precision=10, scale=0, nullable=false)
     */
    private $netProfitEnd;

    /**
     * @var float
     *
     * @ORM\Column(name="net_profit_target", type="float", precision=10, scale=0, nullable=false)
     */
    private $netProfitTarget;

    /**
     * @var float
     *
     * @ORM\Column(name="net_profit_percentage", type="float", precision=10, scale=0, nullable=false)
     */
    private $netProfitPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="services_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $servicesValue;

    /**
     * @var float
     *
     * @ORM\Column(name="services_percentage", type="float", precision=10, scale=0, nullable=false)
     */
    private $servicesPercentage;

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
     * @var \KpiType
     *
     * @ORM\ManyToOne(targetEntity="KpiType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="kpi_type_id", referencedColumnName="id")
     * })
     */
    private $kpiType;

    /**
     * @var \Kpi
     *
     * @ORM\ManyToOne(targetEntity="Kpi", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="kpi_id", referencedColumnName="id")
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
     * Set revenuesInitial
     *
     * @param float $revenuesInitial
     *
     * @return OminousManagement
     */
    public function setRevenuesInitial($revenuesInitial)
    {
        $this->revenuesInitial = $revenuesInitial;

        return $this;
    }

    /**
     * Get revenuesInitial
     *
     * @return float
     */
    public function getRevenuesInitial()
    {
        return $this->revenuesInitial;
    }

    /**
     * Set revenuesEnd
     *
     * @param float $revenuesEnd
     *
     * @return OminousManagement
     */
    public function setRevenuesEnd($revenuesEnd)
    {
        $this->revenuesEnd = $revenuesEnd;

        return $this;
    }

    /**
     * Get revenuesEnd
     *
     * @return float
     */
    public function getRevenuesEnd()
    {
        return $this->revenuesEnd;
    }

    /**
     * Set revenuesTarget
     *
     * @param float $revenuesTarget
     *
     * @return OminousManagement
     */
    public function setRevenuesTarget($revenuesTarget)
    {
        $this->revenuesTarget = $revenuesTarget;

        return $this;
    }

    /**
     * Get revenuesTarget
     *
     * @return float
     */
    public function getRevenuesTarget()
    {
        return $this->revenuesTarget;
    }

    /**
     * Set revenuesPercentage
     *
     * @param float $revenuesPercentage
     *
     * @return OminousManagement
     */
    public function setRevenuesPercentage($revenuesPercentage)
    {
        $this->revenuesPercentage = $revenuesPercentage;

        return $this;
    }

    /**
     * Get revenuesPercentage
     *
     * @return float
     */
    public function getRevenuesPercentage()
    {
        return $this->revenuesPercentage;
    }

    /**
     * Set ebtidaInitial
     *
     * @param float $ebtidaInitial
     *
     * @return OminousManagement
     */
    public function setEbtidaInitial($ebtidaInitial)
    {
        $this->ebtidaInitial = $ebtidaInitial;

        return $this;
    }

    /**
     * Get ebtidaInitial
     *
     * @return float
     */
    public function getEbtidaInitial()
    {
        return $this->ebtidaInitial;
    }

    /**
     * Set ebtidaEnd
     *
     * @param float $ebtidaEnd
     *
     * @return OminousManagement
     */
    public function setEbtidaEnd($ebtidaEnd)
    {
        $this->ebtidaEnd = $ebtidaEnd;

        return $this;
    }

    /**
     * Get ebtidaEnd
     *
     * @return float
     */
    public function getEbtidaEnd()
    {
        return $this->ebtidaEnd;
    }

    /**
     * Set ebtidaTarget
     *
     * @param float $ebtidaTarget
     *
     * @return OminousManagement
     */
    public function setEbtidaTarget($ebtidaTarget)
    {
        $this->ebtidaTarget = $ebtidaTarget;

        return $this;
    }

    /**
     * Get ebtidaTarget
     *
     * @return float
     */
    public function getEbtidaTarget()
    {
        return $this->ebtidaTarget;
    }

    /**
     * Set ebtidaPercentage
     *
     * @param float $ebtidaPercentage
     *
     * @return OminousManagement
     */
    public function setEbtidaPercentage($ebtidaPercentage)
    {
        $this->ebtidaPercentage = $ebtidaPercentage;

        return $this;
    }

    /**
     * Get ebtidaPercentage
     *
     * @return float
     */
    public function getEbtidaPercentage()
    {
        return $this->ebtidaPercentage;
    }

    /**
     * Set netProfitInitial
     *
     * @param float $netProfitInitial
     *
     * @return OminousManagement
     */
    public function setNetProfitInitial($netProfitInitial)
    {
        $this->netProfitInitial = $netProfitInitial;

        return $this;
    }

    /**
     * Get netProfitInitial
     *
     * @return float
     */
    public function getNetProfitInitial()
    {
        return $this->netProfitInitial;
    }

    /**
     * Set netProfitEnd
     *
     * @param float $netProfitEnd
     *
     * @return OminousManagement
     */
    public function setNetProfitEnd($netProfitEnd)
    {
        $this->netProfitEnd = $netProfitEnd;

        return $this;
    }

    /**
     * Get netProfitEnd
     *
     * @return float
     */
    public function getNetProfitEnd()
    {
        return $this->netProfitEnd;
    }

    /**
     * Set netProfitTarget
     *
     * @param float $netProfitTarget
     *
     * @return OminousManagement
     */
    public function setNetProfitTarget($netProfitTarget)
    {
        $this->netProfitTarget = $netProfitTarget;

        return $this;
    }

    /**
     * Get netProfitTarget
     *
     * @return float
     */
    public function getNetProfitTarget()
    {
        return $this->netProfitTarget;
    }

    /**
     * Set netProfitPercentage
     *
     * @param float $netProfitPercentage
     *
     * @return OminousManagement
     */
    public function setNetProfitPercentage($netProfitPercentage)
    {
        $this->netProfitPercentage = $netProfitPercentage;

        return $this;
    }

    /**
     * Get netProfitPercentage
     *
     * @return float
     */
    public function getNetProfitPercentage()
    {
        return $this->netProfitPercentage;
    }

    /**
     * Set servicesValue
     *
     * @param float $servicesValue
     *
     * @return OminousManagement
     */
    public function setServicesValue($servicesValue)
    {
        $this->servicesValue = $servicesValue;

        return $this;
    }

    /**
     * Get servicesValue
     *
     * @return float
     */
    public function getServicesValue()
    {
        return $this->servicesValue;
    }

    /**
     * Set servicesPercentage
     *
     * @param float $servicesPercentage
     *
     * @return OminousManagement
     */
    public function setServicesPercentage($servicesPercentage)
    {
        $this->servicesPercentage = $servicesPercentage;

        return $this;
    }

    /**
     * Get servicesPercentage
     *
     * @return float
     */
    public function getServicesPercentage()
    {
        return $this->servicesPercentage;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return OminousManagement
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
     * @return OminousManagement
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
     * @return OminousManagement
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
     * Set kpiType
     *
     * @param \KpiType $kpiType
     *
     * @return OminousManagement
     */
    public function setKpiType(\App\Entity\KpiType $kpiType = null)
    {
        $this->kpiType = $kpiType;

        return $this;
    }

    /**
     * Get kpiType
     *
     * @return \KpiType
     */
    public function getKpiType()
    {
        return $this->kpiType;
    }

    /**
     * Set kpi
     *
     * @param \Kpi $kpi
     *
     * @return OminousManagement
     */
    public function setKpi(\App\Entity\Kpi $kpi = null)
    {
        $this->kpi = $kpi;

        return $this;
    }

    /**
     * Get kpi
     *
     * @return \Kpi
     */
    public function getKpi()
    {
        return $this->kpi;
    }
}
