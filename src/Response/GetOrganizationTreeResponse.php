<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetOrganizationTreeResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetOrganizationTreeResponse
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\OrganizationTree")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return OrganizationTree
     */
    public function getOut(): ?OrganizationTree
    {
        return $this->out;
    }

    /**
     * @param OrganizationTree $out
     */
    public function setOut(OrganizationTree $out): void
    {
        $this->out = $out;
    }
}
