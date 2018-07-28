<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class UBOInvestigationResult
 *
 * @JMS\AccessType("public_method")
 */
class UBOInvestigationResult
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
     * @JMS\SerializedName("persons")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\UBOPerson>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var UBOPerson[]
     */
    protected $persons;
                                    
    /**
     * @JMS\SerializedName("organisations")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\UBOOrganisation>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var UBOOrganisation[]
     */
    protected $organisations;
                                    
    /**
     * @JMS\SerializedName("tree")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\UBOOrganizationNode")
     * @JMS\XmlElement(cdata=false)
     *
     * @var UBOOrganizationNode
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
     * @return UBOPerson[]
     */
    public function getPersons(): ?array
    {
        return $this->persons;
    }

    /**
     * @param UBOPerson[] $persons
     */
    public function setPersons(array $persons): void
    {
        $this->persons = $persons;
    }
                                    
    /**
     * @return UBOOrganisation[]
     */
    public function getOrganisations(): ?array
    {
        return $this->organisations;
    }

    /**
     * @param UBOOrganisation[] $organisations
     */
    public function setOrganisations(array $organisations): void
    {
        $this->organisations = $organisations;
    }
                                    
    /**
     * @return UBOOrganizationNode
     */
    public function getTree(): ?UBOOrganizationNode
    {
        return $this->tree;
    }

    /**
     * @param UBOOrganizationNode $tree
     */
    public function setTree(UBOOrganizationNode $tree): void
    {
        $this->tree = $tree;
    }
}
