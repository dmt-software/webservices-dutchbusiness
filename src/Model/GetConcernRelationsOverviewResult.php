<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetConcernRelationsOverviewResult
 *
 * @JMS\AccessType("public_method")
 */
class GetConcernRelationsOverviewResult
{

    /**
     * @JMS\SerializedName("references")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\GetConcernRelationsOverviewReference>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var GetConcernRelationsOverviewReference[]
     */
    protected $references;

    /**
     * @return GetConcernRelationsOverviewReference[]
     */
    public function getReferences(): ?array
    {
        return $this->references;
    }

    /**
     * @param GetConcernRelationsOverviewReference[] $references
     */
    public function setReferences(array $references): void
    {
        $this->references = $references;
    }
}
