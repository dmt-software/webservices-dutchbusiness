<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UpdateGetDossiersRequest
 *
 * Returns a list of all dossiers that have been updated since they were last retrieved by the user
 *
 * @JMS\AccessType("public_method")
 */
class UpdateGetDossiersRequest
{

    /**
     * @JMS\SerializedName("update_types")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $updateTypes;

    /**
     * @JMS\SerializedName("page")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $page;

    /**
     * @return array
     */
    public function getUpdateTypes(): ?array
    {
        return $this->updateTypes;
    }

    /**
     * @param array $updateTypes
     */
    public function setUpdateTypes(array $updateTypes): void
    {
        $this->updateTypes = $updateTypes;
    }

    /**
     * @return int
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }
}
