<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use DMT\WebservicesNl\Client\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOCheckInvestigationRequest
 *
 * Checks the status of an UBO investigation
 *
 * @JMS\AccessType("public_method")
 */
class UBOCheckInvestigationRequest implements RequestInterface
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
