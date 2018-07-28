<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOPayment
 *
 * @JMS\AccessType("public_method")
 */
class UBOPayment
{
                        
    /**
     * @JMS\SerializedName("pre")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $pre;
                                    
    /**
     * @JMS\SerializedName("cost")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $cost;
                                    
    /**
     * @JMS\SerializedName("refund")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $refund;
                                    
    /**
     * @return string
     */
    public function getPre(): ?string
    {
        return $this->pre;
    }

    /**
     * @param string $pre
     */
    public function setPre(string $pre): void
    {
        $this->pre = $pre;
    }
                                    
    /**
     * @return string
     */
    public function getCost(): ?string
    {
        return $this->cost;
    }

    /**
     * @param string $cost
     */
    public function setCost(string $cost): void
    {
        $this->cost = $cost;
    }
                                    
    /**
     * @return string
     */
    public function getRefund(): ?string
    {
        return $this->refund;
    }

    /**
     * @param string $refund
     */
    public function setRefund(string $refund): void
    {
        $this->refund = $refund;
    }
}
