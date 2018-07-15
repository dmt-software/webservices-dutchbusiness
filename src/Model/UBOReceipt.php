<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOReceipt
 *
 * @JMS\AccessType("public_method")
 */
class UBOReceipt
{

    /**
     * @JMS\SerializedName("total_price")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $totalPrice;

    /**
     * @JMS\SerializedName("items")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\UBOReceiptItem>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var UBOReceiptItem[]
     */
    protected $items;

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

    /**
     * @return UBOReceiptItem[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param UBOReceiptItem[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }
}
