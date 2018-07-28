<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use DMT\WebservicesNl\Client\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GetExtractHistoryDocumentDataV3ByDossierRequest
 *
 * Retrieve a Chamber of Commerce extract document (Dutch: Uittreksel Handelsregister)
 *
 * @JMS\AccessType("public_method")
 */
class GetExtractHistoryDocumentDataV3ByDossierRequest implements RequestInterface
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
     * @JMS\SerializedName("include_source")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $includeSource;
                                    
    /**
     * @JMS\SerializedName("period_start")
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $periodStart;
                                    
    /**
     * @JMS\SerializedName("period_end")
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $periodEnd;
                                    
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
     * @return bool
     */
    public function isIncludeSource(): ?bool
    {
        return $this->includeSource;
    }

    /**
     * @param bool $includeSource
     */
    public function setIncludeSource(bool $includeSource): void
    {
        $this->includeSource = $includeSource;
    }
                                    
    /**
     * @return \DateTime
     */
    public function getPeriodStart(): ?\DateTime
    {
        return $this->periodStart;
    }

    /**
     * @param \DateTime $periodStart
     */
    public function setPeriodStart(\DateTime $periodStart): void
    {
        $this->periodStart = $periodStart;
    }
                                    
    /**
     * @return \DateTime
     */
    public function getPeriodEnd(): ?\DateTime
    {
        return $this->periodEnd;
    }

    /**
     * @param \DateTime $periodEnd
     */
    public function setPeriodEnd(\DateTime $periodEnd): void
    {
        $this->periodEnd = $periodEnd;
    }
}
