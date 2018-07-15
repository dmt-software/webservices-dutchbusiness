<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetExtractHistoryDocumentDataRequest
 *
 * Retrieve a Chamber of Commerce extract document (Dutch: Uittreksel Handelsregister)
 *
 * @JMS\AccessType("public_method")
 */
class GetExtractHistoryDocumentDataRequest
{

    /**
     * @JMS\SerializedName("extract_id")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $extractId;

    /**
     * @return string
     */
    public function getExtractId(): ?string
    {
        return $this->extractId;
    }

    /**
     * @param string $extractId
     */
    public function setExtractId(string $extractId): void
    {
        $this->extractId = $extractId;
    }
}
