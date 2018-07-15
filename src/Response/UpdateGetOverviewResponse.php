<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UpdateGetOverviewResponse
 *
 * @JMS\AccessType("public_method")
 */
class UpdateGetOverviewResponse
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\UpdateSubscriptionPagedResult")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return UpdateSubscriptionPagedResult
     */
    public function getOut(): ?UpdateSubscriptionPagedResult
    {
        return $this->out;
    }

    /**
     * @param UpdateSubscriptionPagedResult $out
     */
    public function setOut(UpdateSubscriptionPagedResult $out): void
    {
        $this->out = $out;
    }
}
