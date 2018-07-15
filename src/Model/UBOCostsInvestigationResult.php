<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOCostsInvestigationResult
 *
 * @JMS\AccessType("public_method")
 */
class UBOCostsInvestigationResult
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
     * @JMS\SerializedName("status")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $status;

    /**
     * @JMS\SerializedName("receipt")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\UBOReceipt")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $receipt;

    /**
     * @JMS\SerializedName("payment")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\UBOPayment")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $payment;

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
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return UBOReceipt
     */
    public function getReceipt(): ?UBOReceipt
    {
        return $this->receipt;
    }

    /**
     * @param UBOReceipt $receipt
     */
    public function setReceipt(UBOReceipt $receipt): void
    {
        $this->receipt = $receipt;
    }

    /**
     * @return UBOPayment
     */
    public function getPayment(): ?UBOPayment
    {
        return $this->payment;
    }

    /**
     * @param UBOPayment $payment
     */
    public function setPayment(UBOPayment $payment): void
    {
        $this->payment = $payment;
    }
}
