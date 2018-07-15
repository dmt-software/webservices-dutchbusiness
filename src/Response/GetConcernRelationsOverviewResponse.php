<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetConcernRelationsOverviewResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetConcernRelationsOverviewResponse
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\GetConcernRelationsOverviewResult")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return GetConcernRelationsOverviewResult
     */
    public function getOut(): ?GetConcernRelationsOverviewResult
    {
        return $this->out;
    }

    /**
     * @param GetConcernRelationsOverviewResult $out
     */
    public function setOut(GetConcernRelationsOverviewResult $out): void
    {
        $this->out = $out;
    }
}
