<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOInvestigationStatus
 *
 * @JMS\AccessType("public_method")
 */
class UBOInvestigationStatus
{
                        
    /**
     * @JMS\SerializedName("status")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $status;
                                    
    /**
     * @JMS\SerializedName("date_since")
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $dateSince;
                                    
    /**
     * @JMS\SerializedName("description")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $description;
                                    
    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
                                    
    /**
     * @return \DateTime
     */
    public function getDateSince(): ?\DateTime
    {
        return $this->dateSince;
    }

    /**
     * @param \DateTime $dateSince
     */
    public function setDateSince(\DateTime $dateSince): void
    {
        $this->dateSince = $dateSince;
    }
                                    
    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
