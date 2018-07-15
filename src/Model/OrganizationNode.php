<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class OrganizationNode
 *
 * @JMS\AccessType("public_method")
 */
class OrganizationNode
{

    /**
     * @JMS\SerializedName("name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $name;

    /**
     * @JMS\SerializedName("type")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $type;

    /**
     * @JMS\SerializedName("id")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $id;

    /**
     * @JMS\SerializedName("children")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\OrganizationNode>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var OrganizationNode[]
     */
    protected $children;

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return OrganizationNode[]
     */
    public function getChildren(): ?array
    {
        return $this->children;
    }

    /**
     * @param OrganizationNode[] $children
     */
    public function setChildren(array $children): void
    {
        $this->children = $children;
    }
}
