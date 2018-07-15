<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Structure
 *
 * @JMS\AccessType("public_method")
 */
class Structure
{

    /**
     * @JMS\SerializedName("ultimate_parent")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $ultimateParent;

    /**
     * @JMS\SerializedName("number_of_subsidiaries")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $numberOfSubsidiaries;

    /**
     * @JMS\SerializedName("parent")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $parent;

    /**
     * @return string
     */
    public function getUltimateParent(): ?string
    {
        return $this->ultimateParent;
    }

    /**
     * @param string $ultimateParent
     */
    public function setUltimateParent(string $ultimateParent): void
    {
        $this->ultimateParent = $ultimateParent;
    }

    /**
     * @return int
     */
    public function getNumberOfSubsidiaries(): ?int
    {
        return $this->numberOfSubsidiaries;
    }

    /**
     * @param int $numberOfSubsidiaries
     */
    public function setNumberOfSubsidiaries(int $numberOfSubsidiaries): void
    {
        $this->numberOfSubsidiaries = $numberOfSubsidiaries;
    }

    /**
     * @return string
     */
    public function getParent(): ?string
    {
        return $this->parent;
    }

    /**
     * @param string $parent
     */
    public function setParent(string $parent): void
    {
        $this->parent = $parent;
    }
}
