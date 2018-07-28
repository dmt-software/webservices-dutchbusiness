<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use DMT\WebservicesNl\Client\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class UpdateGetChangedDossiersRequest
 *
 * Retrieve all dossiers changed since the given date.
 *
 * @JMS\AccessType("public_method")
 */
class UpdateGetChangedDossiersRequest implements RequestInterface
{
                        
    /**
     * @JMS\SerializedName("changed_since")
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $changedSince;
                                    
    /**
     * @JMS\SerializedName("update_types")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $updateTypes;
                                    
    /**
     * @JMS\SerializedName("page")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $page;
                                    
    /**
     * @return \DateTime
     */
    public function getChangedSince(): ?\DateTime
    {
        return $this->changedSince;
    }

    /**
     * @param \DateTime $changedSince
     */
    public function setChangedSince(\DateTime $changedSince): void
    {
        $this->changedSince = $changedSince;
    }
                                    
    /**
     * @return array
     */
    public function getUpdateTypes(): ?array
    {
        return $this->updateTypes;
    }

    /**
     * @param array $updateTypes
     */
    public function setUpdateTypes(array $updateTypes): void
    {
        $this->updateTypes = $updateTypes;
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
