<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use DMT\WebservicesNl\Client\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class GetDossierResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetDossierResponse implements ResponseInterface
{
                        
    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Dossier")
     * @JMS\XmlElement(cdata=false)
     *
     * @var Dossier
     */
    protected $out;
                                    
    /**
     * @return Dossier
     */
    public function getOut(): ?Dossier
    {
        return $this->out;
    }

    /**
     * @param Dossier $out
     */
    public function setOut(Dossier $out): void
    {
        $this->out = $out;
    }
}
