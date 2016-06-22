<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * GroupBenner
 *
 * @ORM\Table(name="group_benner", indexes={@ORM\Index(name="fk_grupo_benner_kpi_type_idx", columns={"kpi_type_id"}), @ORM\Index(name="fk_group_benner_kpi1_idx", columns={"kpi_id"})})
 * @ORM\Entity
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class GroupBenner
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
     * @return GroupBenner
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
     * @return GroupBenner
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
     * @return GroupBenner
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
     * @return GroupBenner
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
     * @return GroupBenner
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
     * @return GroupBenner
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
     * @return GroupBenner
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
     * @return GroupBenner
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
     * @return GroupBenner
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
     * @return GroupBenner
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
     * @return GroupBenner
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
     * @return GroupBenner
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return GroupBenner
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
     * @return GroupBenner
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
     * @return GroupBenner
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
     * @return GroupBenner
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
     * @return GroupBenner
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
