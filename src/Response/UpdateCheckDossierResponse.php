<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class UpdateCheckDossierResponse
 *
 * @JMS\AccessType("public_method")
 */
class UpdateCheckDossierResponse implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\UpdateReference")
     * @JMS\XmlElement(cdata=false)
     *
     * @var UpdateReference
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
