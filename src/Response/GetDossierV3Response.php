<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GetDossierV3Response
 *
 * @JMS\AccessType("public_method")
 */
class GetDossierV3Response implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DossierV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var DossierV3
     */
    protected $out;
                                    
    /**
     * @return DossierV3
     */
    public function getOut(): ?DossierV3
    {
        return $this->out;
    }

    /**
     * @param DossierV3 $out
     */
    public function setOut(DossierV3 $out): void
    {
        $this->out = $out;
    }
}
