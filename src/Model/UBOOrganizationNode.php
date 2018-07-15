<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOOrganizationNode
 *
 * @JMS\AccessType("public_method")
 */
class UBOOrganizationNode
{

    /**
     * @JMS\SerializedName("level")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $level;

    /**
     * @JMS\SerializedName("id")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $id;

    /**
     * @JMS\SerializedName("type")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $type;

    /**
     * @JMS\SerializedName("role_type")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $roleType;

    /**
     * @JMS\SerializedName("registered_in")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $registeredIn;

    /**
     * @JMS\SerializedName("name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $name;

    /**
     * @JMS\SerializedName("parents")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\UBOOrganizationNode>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var UBOOrganizationNode[]
     */
    protected $parents;

    /**
     * @return int
     */
    public function getLevel(): ?int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level): void
    {
        $this->level = $level;
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
    public function getRoleType(): ?string
    {
        return $this->roleType;
    }

    /**
     * @param string $roleType
     */
    public function setRoleType(string $roleType): void
    {
        $this->roleType = $roleType;
    }

    /**
     * @return string
     */
    public function getRegisteredIn(): ?string
    {
        return $this->registeredIn;
    }

    /**
     * @param string $registeredIn
     */
    public function setRegisteredIn(string $registeredIn): void
    {
        $this->registeredIn = $registeredIn;
    }

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
     * @return UBOOrganizationNode[]
     */
    public function getParents(): ?array
    {
        return $this->parents;
    }

    /**
     * @param UBOOrganizationNode[] $parents
     */
    public function setParents(array $parents): void
    {
        $this->parents = $parents;
    }
}
