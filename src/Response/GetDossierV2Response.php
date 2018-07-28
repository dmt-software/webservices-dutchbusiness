<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GetDossierV2Response
 *
 * @JMS\AccessType("public_method")
 */
class GetDossierV2Response implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DossierV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DossierV2
     */
    protected $out;
                                    
    /**
     * @return DossierV2
     */
    public function getOut(): ?DossierV2
    {
        return $this->out;
    }

    /**
     * @param DossierV2 $out
     */
    public function setOut(DossierV2 $out): void
    {
        $this->out = $out;
    }
}
