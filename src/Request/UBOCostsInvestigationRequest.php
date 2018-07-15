<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOCostsInvestigationRequest
 *
 * Return the costs of a finished UBO investigation
 *
 * @JMS\AccessType("public_method")
 */
class UBOCostsInvestigationRequest
{

    /**
     * @JMS\SerializedName("token")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $token;

    /**
     * @return string
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }
}
