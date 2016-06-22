<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * HealthOperators
 *
 * @ORM\Table(name="health_operators", indexes={@ORM\Index(name="fk_health_operators_kpi_type1_idx", columns={"kpi_type_id"}), @ORM\Index(name="fk_health_operators_kpi1_idx", columns={"kpi_id"})})
 * @ORM\Entity
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class HealthOperators
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
     * @ORM\Column(name="revenues_initial", type="float", precision=10, scale=0, nullable=true)
     */
    private $revenuesInitial;

    /**
     * @var float
     *
     * @ORM\Column(name="revenues_end", type="float", precision=10, scale=0, nullable=true)
     */
    private $revenuesEnd;

    /**
     * @var float
     *
     * @ORM\Column(name="revenues_target", type="float", precision=10, scale=0, nullable=true)
     */
    private $revenuesTarget;

    /**
     * @var float
     *
     * @ORM\Column(name="revenues_percentage", type="float", precision=10, scale=0, nullable=true)
     */
    private $revenuesPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="ebtida_initial", type="float", precision=10, scale=0, nullable=true)
     */
    private $ebtidaInitial;

    /**
     * @var float
     *
     * @ORM\Column(name="ebtida_end", type="float", precision=10, scale=0, nullable=true)
     */
    private $ebtidaEnd;

    /**
     * @var float
     *
     * @ORM\Column(name="ebtida_target", type="float", precision=10, scale=0, nullable=true)
     */
    private $ebtidaTarget;

    /**
     * @var float
     *
     * @ORM\Column(name="ebtida_percentage", type="float", precision=10, scale=0, nullable=true)
     */
    private $ebtidaPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="net_profit_initial", type="float", precision=10, scale=0, nullable=true)
     */
    private $netProfitInitial;

    /**
     * @var float
     *
     * @ORM\Column(name="net_profit_end", type="float", precision=10, scale=0, nullable=true)
     */
    private $netProfitEnd;

    /**
     * @var float
     *
     * @ORM\Column(name="net_profit_target", type="float", precision=10, scale=0, nullable=true)
     */
    private $netProfitTarget;

    /**
     * @var float
     *
     * @ORM\Column(name="net_profit_percentage", type="float", precision=10, scale=0, nullable=true)
     */
    private $netProfitPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="lu_value", type="float", precision=10, scale=0, nullable=true)
     */
    private $luValue;

    /**
     * @var float
     *
     * @ORM\Column(name="lu_percentage", type="float", precision=10, scale=0, nullable=true)
     */
    private $luPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="lum_value", type="float", precision=10, scale=0, nullable=true)
     */
    private $lumValue;

    /**
     * @var float
     *
     * @ORM\Column(name="lum_percentage", type="float", precision=10, scale=0, nullable=true)
     */
    private $lumPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="implantation_value", type="float", precision=10, scale=0, nullable=true)
     */
    private $implantationValue;

    /**
     * @var float
     *
     * @ORM\Column(name="implantation_percentage", type="float", precision=10, scale=0, nullable=true)
     */
    private $implantationPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="sms_value", type="float", precision=10, scale=0, nullable=true)
     */
    private $smsValue;

    /**
     * @var float
     *
     * @ORM\Column(name="sms_percentage", type="float", precision=10, scale=0, nullable=true)
     */
    private $smsPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="medical_services_value", type="float", precision=10, scale=0, nullable=true)
     */
    private $medicalServicesValue;

    /**
     * @var float
     *
     * @ORM\Column(name="medical_services_percentage", type="float", precision=10, scale=0, nullable=true)
     */
    private $medicalServicesPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="workout_value", type="float", precision=10, scale=0, nullable=true)
     */
    private $workoutValue;

    /**
     * @var float
     *
     * @ORM\Column(name="workout_percentage", type="float", precision=10, scale=0, nullable=true)
     */
    private $workoutPercentage;

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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * Set medicalServicesValue
     *
     * @param float $medicalServicesValue
     *
     * @return HealthOperators
     */
    public function setMedicalServicesValue($medicalServicesValue)
    {
        $this->medicalServicesValue = $medicalServicesValue;

        return $this;
    }

    /**
     * Get medicalServicesValue
     *
     * @return float
     */
    public function getMedicalServicesValue()
    {
        return $this->medicalServicesValue;
    }

    /**
     * Set medicalServicesPercentage
     *
     * @param float $medicalServicesPercentage
     *
     * @return HealthOperators
     */
    public function setMedicalServicesPercentage($medicalServicesPercentage)
    {
        $this->medicalServicesPercentage = $medicalServicesPercentage;

        return $this;
    }

    /**
     * Get medicalServicesPercentage
     *
     * @return float
     */
    public function getMedicalServicesPercentage()
    {
        return $this->medicalServicesPercentage;
    }

    /**
     * Set workoutValue
     *
     * @param float $workoutValue
     *
     * @return HealthOperators
     */
    public function setWorkoutValue($workoutValue)
    {
        $this->workoutValue = $workoutValue;

        return $this;
    }

    /**
     * Get workoutValue
     *
     * @return float
     */
    public function getWorkoutValue()
    {
        return $this->workoutValue;
    }

    /**
     * Set workoutPercentage
     *
     * @param float $workoutPercentage
     *
     * @return HealthOperators
     */
    public function setWorkoutPercentage($workoutPercentage)
    {
        $this->workoutPercentage = $workoutPercentage;

        return $this;
    }

    /**
     * Get workoutPercentage
     *
     * @return float
     */
    public function getWorkoutPercentage()
    {
        return $this->workoutPercentage;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
     * @return HealthOperators
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
