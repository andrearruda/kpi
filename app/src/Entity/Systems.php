<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Systems
 *
 * @ORM\Table(name="systems", indexes={@ORM\Index(name="fk_systems_kpi_type1_idx", columns={"kpi_type_id"}), @ORM\Index(name="fk_systems_kpi1_idx", columns={"kpi_id"})})
 * @ORM\Entity
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class Systems
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
     * @ORM\Column(name="lu_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $luValue;

    /**
     * @var float
     *
     * @ORM\Column(name="lu_percentage", type="float", precision=10, scale=0, nullable=false)
     */
    private $luPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="lum_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $lumValue;

    /**
     * @var float
     *
     * @ORM\Column(name="lum_percentage", type="float", precision=10, scale=0, nullable=false)
     */
    private $lumPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="implantation_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $implantationValue;

    /**
     * @var float
     *
     * @ORM\Column(name="implantation_percentage", type="float", precision=10, scale=0, nullable=false)
     */
    private $implantationPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="sms_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $smsValue;

    /**
     * @var float
     *
     * @ORM\Column(name="sms_percentage", type="float", precision=10, scale=0, nullable=false)
     */
    private $smsPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="royaltes_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $royaltesValue;

    /**
     * @var float
     *
     * @ORM\Column(name="royaltes_percentage", type="float", precision=10, scale=0, nullable=false)
     */
    private $royaltesPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="maintenance_pc_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $maintenancePcValue;

    /**
     * @var float
     *
     * @ORM\Column(name="maintenance_pc_percentage", type="float", precision=10, scale=0, nullable=false)
     */
    private $maintenancePcPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="outsourcing_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $outsourcingValue;

    /**
     * @var float
     *
     * @ORM\Column(name="outsourcing_percentage", type="float", precision=10, scale=0, nullable=false)
     */
    private $outsourcingPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="bpo_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $bpoValue;

    /**
     * @var float
     *
     * @ORM\Column(name="bpo_percentage", type="float", precision=10, scale=0, nullable=false)
     */
    private $bpoPercentage;

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
     * @var \Kpi
     *
     * @ORM\ManyToOne(targetEntity="Kpi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="kpi_id", referencedColumnName="id")
     * })
     */
    private $kpi;

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
     * @return Systems
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
     * @return Systems
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
     * @return Systems
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
     * @return Systems
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
     * @return Systems
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
     * @return Systems
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
     * @return Systems
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
     * @return Systems
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
     * @return Systems
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
     * @return Systems
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
     * @return Systems
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
     * @return Systems
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
     * Set luValue
     *
     * @param float $luValue
     *
     * @return Systems
     */
    public function setLuValue($luValue)
    {
        $this->luValue = $luValue;

        return $this;
    }

    /**
     * Get luValue
     *
     * @return float
     */
    public function getLuValue()
    {
        return $this->luValue;
    }

    /**
     * Set luPercentage
     *
     * @param float $luPercentage
     *
     * @return Systems
     */
    public function setLuPercentage($luPercentage)
    {
        $this->luPercentage = $luPercentage;

        return $this;
    }

    /**
     * Get luPercentage
     *
     * @return float
     */
    public function getLuPercentage()
    {
        return $this->luPercentage;
    }

    /**
     * Set lumValue
     *
     * @param float $lumValue
     *
     * @return Systems
     */
    public function setLumValue($lumValue)
    {
        $this->lumValue = $lumValue;

        return $this;
    }

    /**
     * Get lumValue
     *
     * @return float
     */
    public function getLumValue()
    {
        return $this->lumValue;
    }

    /**
     * Set lumPercentage
     *
     * @param float $lumPercentage
     *
     * @return Systems
     */
    public function setLumPercentage($lumPercentage)
    {
        $this->lumPercentage = $lumPercentage;

        return $this;
    }

    /**
     * Get lumPercentage
     *
     * @return float
     */
    public function getLumPercentage()
    {
        return $this->lumPercentage;
    }

    /**
     * Set implantationValue
     *
     * @param float $implantationValue
     *
     * @return Systems
     */
    public function setImplantationValue($implantationValue)
    {
        $this->implantationValue = $implantationValue;

        return $this;
    }

    /**
     * Get implantationValue
     *
     * @return float
     */
    public function getImplantationValue()
    {
        return $this->implantationValue;
    }

    /**
     * Set implantationPercentage
     *
     * @param float $implantationPercentage
     *
     * @return Systems
     */
    public function setImplantationPercentage($implantationPercentage)
    {
        $this->implantationPercentage = $implantationPercentage;

        return $this;
    }

    /**
     * Get implantationPercentage
     *
     * @return float
     */
    public function getImplantationPercentage()
    {
        return $this->implantationPercentage;
    }

    /**
     * Set smsValue
     *
     * @param float $smsValue
     *
     * @return Systems
     */
    public function setSmsValue($smsValue)
    {
        $this->smsValue = $smsValue;

        return $this;
    }

    /**
     * Get smsValue
     *
     * @return float
     */
    public function getSmsValue()
    {
        return $this->smsValue;
    }

    /**
     * Set smsPercentage
     *
     * @param float $smsPercentage
     *
     * @return Systems
     */
    public function setSmsPercentage($smsPercentage)
    {
        $this->smsPercentage = $smsPercentage;

        return $this;
    }

    /**
     * Get smsPercentage
     *
     * @return float
     */
    public function getSmsPercentage()
    {
        return $this->smsPercentage;
    }

    /**
     * Set royaltesValue
     *
     * @param float $royaltesValue
     *
     * @return Systems
     */
    public function setRoyaltesValue($royaltesValue)
    {
        $this->royaltesValue = $royaltesValue;

        return $this;
    }

    /**
     * Get royaltesValue
     *
     * @return float
     */
    public function getRoyaltesValue()
    {
        return $this->royaltesValue;
    }

    /**
     * Set royaltesPercentage
     *
     * @param float $royaltesPercentage
     *
     * @return Systems
     */
    public function setRoyaltesPercentage($royaltesPercentage)
    {
        $this->royaltesPercentage = $royaltesPercentage;

        return $this;
    }

    /**
     * Get royaltesPercentage
     *
     * @return float
     */
    public function getRoyaltesPercentage()
    {
        return $this->royaltesPercentage;
    }

    /**
     * Set maintenancePcValue
     *
     * @param float $maintenancePcValue
     *
     * @return Systems
     */
    public function setMaintenancePcValue($maintenancePcValue)
    {
        $this->maintenancePcValue = $maintenancePcValue;

        return $this;
    }

    /**
     * Get maintenancePcValue
     *
     * @return float
     */
    public function getMaintenancePcValue()
    {
        return $this->maintenancePcValue;
    }

    /**
     * Set maintenancePcPercentage
     *
     * @param float $maintenancePcPercentage
     *
     * @return Systems
     */
    public function setMaintenancePcPercentage($maintenancePcPercentage)
    {
        $this->maintenancePcPercentage = $maintenancePcPercentage;

        return $this;
    }

    /**
     * Get maintenancePcPercentage
     *
     * @return float
     */
    public function getMaintenancePcPercentage()
    {
        return $this->maintenancePcPercentage;
    }

    /**
     * Set outsourcingValue
     *
     * @param float $outsourcingValue
     *
     * @return Systems
     */
    public function setOutsourcingValue($outsourcingValue)
    {
        $this->outsourcingValue = $outsourcingValue;

        return $this;
    }

    /**
     * Get outsourcingValue
     *
     * @return float
     */
    public function getOutsourcingValue()
    {
        return $this->outsourcingValue;
    }

    /**
     * Set outsourcingPercentage
     *
     * @param float $outsourcingPercentage
     *
     * @return Systems
     */
    public function setOutsourcingPercentage($outsourcingPercentage)
    {
        $this->outsourcingPercentage = $outsourcingPercentage;

        return $this;
    }

    /**
     * Get outsourcingPercentage
     *
     * @return float
     */
    public function getOutsourcingPercentage()
    {
        return $this->outsourcingPercentage;
    }

    /**
     * Set bpoValue
     *
     * @param float $bpoValue
     *
     * @return Systems
     */
    public function setBpoValue($bpoValue)
    {
        $this->bpoValue = $bpoValue;

        return $this;
    }

    /**
     * Get bpoValue
     *
     * @return float
     */
    public function getBpoValue()
    {
        return $this->bpoValue;
    }

    /**
     * Set bpoPercentage
     *
     * @param float $bpoPercentage
     *
     * @return Systems
     */
    public function setBpoPercentage($bpoPercentage)
    {
        $this->bpoPercentage = $bpoPercentage;

        return $this;
    }

    /**
     * Get bpoPercentage
     *
     * @return float
     */
    public function getBpoPercentage()
    {
        return $this->bpoPercentage;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Systems
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
     * @return Systems
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
     * @return Systems
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
     * @param \Kpi $kpi
     *
     * @return Systems
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

    /**
     * Set kpiType
     *
     * @param \KpiType $kpiType
     *
     * @return Systems
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
}
