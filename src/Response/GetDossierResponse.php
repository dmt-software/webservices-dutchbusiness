<?php

namespace DMT\WebservicesNl\DutchBusiness\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetDossierResponse
 *
 * @JMS\AccessType("public_method")
 */
class GetDossierResponse
{

    /**
     * @JMS\SerializedName("out")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\Dossier")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
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
