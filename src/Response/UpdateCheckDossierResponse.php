<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UpdateCheckDossierResponse
 *
 * @JMS\AccessType("public_method")
 */
class UpdateCheckDossierResponse
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\UpdateReference")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $out;

    /**
     * @return UpdateReference
     */
    public function getOut(): ?UpdateReference
    {
        return $this->out;
    }

    /**
     * @param UpdateReference $out
     */
    public function setOut(UpdateReference $out): void
    {
        $this->out = $out;
    }
}
