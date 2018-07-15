<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class DossierHistory
 *
 * @JMS\AccessType("public_method")
 */
class DossierHistory
{

    /**
     * @JMS\SerializedName("references")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\DossierReference>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var DossierReference[]
     */
    protected $references;

    /**
     * @return DossierReference[]
     */
    public function getReferences(): ?array
    {
        return $this->references;
    }

    /**
     * @param DossierReference[] $references
     */
    public function setReferences(array $references): void
    {
        $this->references = $references;
    }
}
