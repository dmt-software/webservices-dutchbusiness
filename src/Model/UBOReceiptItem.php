<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOReceiptItem
 *
 * @JMS\AccessType("public_method")
 */
class UBOReceiptItem
{
                        
    /**
     * @JMS\SerializedName("description")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $description;
                                    
    /**
     * @JMS\SerializedName("quantity")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $quantity;
                                    
    /**
     * @JMS\SerializedName("unit_price")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $unitPrice;
                                    
    /**
     * @JMS\SerializedName("total_price")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $totalPrice;
                                    
    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
                                    
    /**
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }
                                    
    /**
     * @return string
     */
    public function getUnitPrice(): ?string
    {
        return $this->unitPrice;
    }

    /**
     * @param string $unitPrice
     */
    public function setUnitPrice(string $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }
                                    
    /**
     * @return string
     */
    public function getTotalPrice(): ?string
    {
        return $this->totalPrice;
    }

    /**
     * @param string $totalPrice
     */
    public function setTotalPrice(string $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }
}
