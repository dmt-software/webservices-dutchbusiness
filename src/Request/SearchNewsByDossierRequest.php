<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use DMT\WebservicesNl\Client\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class SearchNewsByDossierRequest
 *
 * Get a paged result of all news items found.
 *
 * @JMS\AccessType("public_method")
 */
class SearchNewsByDossierRequest implements RequestInterface
{
                        
    /**
     * @JMS\SerializedName("dossier_number")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $dossierNumber;
                                    
    /**
     * @JMS\SerializedName("period_start")
     * @JMS\Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $periodStart;
                                    
    /**
     * @JMS\SerializedName("period_end")
     * @JMS\Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $periodEnd;
                                    
    /**
     * @JMS\SerializedName("sort_order")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $sortOrder;
                                    
    /**
     * @JMS\SerializedName("page")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $page;
                                    
    /**
     * @return int
     */
    public function getDossierNumber(): ?int
    {
        return $this->dossierNumber;
    }

    /**
     * @param int $dossierNumber
     */
    public function setDossierNumber(int $dossierNumber): void
    {
        $this->dossierNumber = $dossierNumber;
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
                                    
    /**
     * @return string
     */
    public function getSortOrder(): ?string
    {
        return $this->sortOrder;
    }

    /**
     * @param string $sortOrder
     */
    public function setSortOrder(string $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }
                                    
    /**
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }
}
