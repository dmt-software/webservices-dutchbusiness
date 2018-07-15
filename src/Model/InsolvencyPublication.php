<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class InsolvencyPublication
 *
 * @JMS\AccessType("public_method")
 */
class InsolvencyPublication
{

    /**
     * @JMS\SerializedName("publication_id")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $publicationId;

    /**
     * @JMS\SerializedName("description")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $description;

    /**
     * @JMS\SerializedName("date")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\DateV3")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $date;

    /**
     * @return string
     */
    public function getPublicationId(): ?string
    {
        return $this->publicationId;
    }

    /**
     * @param string $publicationId
     */
    public function setPublicationId(string $publicationId): void
    {
        $this->publicationId = $publicationId;
    }

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
     * @return DateV3
     */
    public function getDate(): ?DateV3
    {
        return $this->date;
    }

    /**
     * @param DateV3 $date
     */
    public function setDate(DateV3 $date): void
    {
        $this->date = $date;
    }
}
