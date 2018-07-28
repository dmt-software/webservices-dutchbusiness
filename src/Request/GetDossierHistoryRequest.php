<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use DMT\WebservicesNl\Client\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GetDossierHistoryRequest
 *
 * Get a list of logged updates for a specific business dossier
 *
 * @JMS\AccessType("public_method")
 */
class GetDossierHistoryRequest implements RequestInterface
{
                        
    /**
     * @JMS\SerializedName("dossier_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $dossierNumber;
                                    
    /**
     * @JMS\SerializedName("period_start_date")
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $periodStartDate;
                                    
    /**
     * @JMS\SerializedName("period_end_date")
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $periodEndDate;
                                    
    /**
     * @return string
     */
    public function getDossierNumber(): ?string
    {
        return $this->dossierNumber;
    }

    /**
     * @param string $dossierNumber
     */
    public function setDossierNumber(string $dossierNumber): void
    {
        $this->dossierNumber = $dossierNumber;
    }
                                    
    /**
     * @return \DateTime
     */
    public function getPeriodStartDate(): ?\DateTime
    {
        return $this->periodStartDate;
    }

    /**
     * @param \DateTime $periodStartDate
     */
    public function setPeriodStartDate(\DateTime $periodStartDate): void
    {
        $this->periodStartDate = $periodStartDate;
    }
                                    
    /**
     * @return \DateTime
     */
    public function getPeriodEndDate(): ?\DateTime
    {
        return $this->periodEndDate;
    }

    /**
     * @param \DateTime $periodEndDate
     */
    public function setPeriodEndDate(\DateTime $periodEndDate): void
    {
        $this->periodEndDate = $periodEndDate;
    }
}
