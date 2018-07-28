<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetConcernRelationsDetailsGraph
 *
 * @JMS\AccessType("public_method")
 */
class GetConcernRelationsDetailsGraph
{
                        
    /**
     * @JMS\SerializedName("nodes")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\GetConcernRelationsDetailsGraphNode>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var GetConcernRelationsDetailsGraphNode[]
     */
    protected $nodes;
                                    
    /**
     * @JMS\SerializedName("links")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\GetConcernRelationsDetailsGraphLink>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var GetConcernRelationsDetailsGraphLink[]
     */
    protected $links;
                                    
    /**
     * @return GetConcernRelationsDetailsGraphNode[]
     */
    public function getNodes(): ?array
    {
        return $this->nodes;
    }

    /**
     * @param GetConcernRelationsDetailsGraphNode[] $nodes
     */
    public function setNodes(array $nodes): void
    {
        $this->nodes = $nodes;
    }
                                    
    /**
     * @return GetConcernRelationsDetailsGraphLink[]
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * @param GetConcernRelationsDetailsGraphLink[] $links
     */
    public function setLinks(array $links): void
    {
        $this->links = $links;
    }
}
