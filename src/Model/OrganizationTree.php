<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class OrganizationTree
 *
 * @JMS\AccessType("public_method")
 */
class OrganizationTree
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
     * @JMS\SerializedName("dossier_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $dossierNumber;

    /**
     * @JMS\SerializedName("tree")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\OrganizationNode")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $tree;

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
    public function getDossierNumber(): ?string
    {
        return $this->dossierNumber;
    }

    /**
     * @param string $dossierNumber
     */
    public function setDossierNumber(string $dossierNumber): void
    {
        $this->dossierNumber = $dossierNumber;
    }

    /**
     * @return OrganizationNode
     */
    public function getTree(): ?OrganizationNode
    {
        return $this->tree;
    }

    /**
     * @param OrganizationNode $tree
     */
    public function setTree(OrganizationNode $tree): void
    {
        $this->tree = $tree;
    }
}
