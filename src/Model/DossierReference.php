<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class DossierReference
 *
 * @JMS\AccessType("public_method")
 */
class DossierReference
{
                        
    /**
     * @JMS\SerializedName("update_date")
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $updateDate;
                                    
    /**
     * @JMS\SerializedName("change_set")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\ChangeSet")
     * @JMS\XmlElement(cdata=false)
     *
     * @var ChangeSet
     */
    protected $changeSet;
                                    
    /**
     * @return \DateTime
     */
    public function getUpdateDate(): ?\DateTime
    {
        return $this->updateDate;
    }

    /**
     * @param \DateTime $updateDate
     */
    public function setUpdateDate(\DateTime $updateDate): void
    {
        $this->updateDate = $updateDate;
    }
                                    
    /**
     * @return ChangeSet
     */
    public function getChangeSet(): ?ChangeSet
    {
        return $this->changeSet;
    }

    /**
     * @param ChangeSet $changeSet
     */
    public function setChangeSet(ChangeSet $changeSet): void
    {
        $this->changeSet = $changeSet;
    }
}
