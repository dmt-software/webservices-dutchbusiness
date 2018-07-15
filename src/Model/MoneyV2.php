<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class MoneyV2
 *
 * @JMS\AccessType("public_method")
 */
class MoneyV2
{

    /**
     * @JMS\SerializedName("amount")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $amount;

    /**
     * @JMS\SerializedName("currency")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $currency;

    /**
     * @JMS\SerializedName("formatted")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $formatted;

    /**
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getFormatted(): ?string
    {
        return $this->formatted;
    }

    /**
     * @param string $formatted
     */
    public function setFormatted(string $formatted): void
    {
        $this->formatted = $formatted;
    }
}
