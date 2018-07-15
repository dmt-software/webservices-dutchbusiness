<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetExtractHistoryDocumentDataV3Request
 *
 * Retrieve a Chamber of Commerce extract document (Dutch: Uittreksel Handelsregister)
 *
 * @JMS\AccessType("public_method")
 */
class GetExtractHistoryDocumentDataV3Request
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
