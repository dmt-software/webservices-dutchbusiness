<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOPickupInvestigationRequest
 *
 * Pickup the result of an UBO investigation
 *
 * @JMS\AccessType("public_method")
 */
class UBOPickupInvestigationRequest
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
     * @JMS\SerializedName("include_source")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $includeSource;

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

    /**
     * @return bool
     */
    public function isIncludeSource(): ?bool
    {
        return $this->includeSource;
    }

    /**
     * @param bool $includeSource
     */
    public function setIncludeSource(bool $includeSource): void
    {
        $this->includeSource = $includeSource;
    }
}
