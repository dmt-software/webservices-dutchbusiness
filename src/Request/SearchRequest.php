<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SearchRequest
 *
 * Find business establishments using a variety of parameters
 *
 * @JMS\AccessType("public_method")
 */
class SearchRequest
{

    /**
     * @JMS\SerializedName("dossier_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $dossierNumber;

    /**
     * @JMS\SerializedName("trade_name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $tradeName;

    /**
     * @JMS\SerializedName("city")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $city;

    /**
     * @JMS\SerializedName("street")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $street;

    /**
     * @JMS\SerializedName("postcode")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $postcode;

    /**
     * @JMS\SerializedName("house_number")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $houseNumber;

    /**
     * @JMS\SerializedName("house_number_addition")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $houseNumberAddition;

    /**
     * @JMS\SerializedName("telephone_number")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $telephoneNumber;

    /**
     * @JMS\SerializedName("domain_name")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $domainName;

    /**
     * @JMS\SerializedName("strict_search")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $strictSearch;

    /**
     * @JMS\SerializedName("page")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $page;

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
     * @return string
     */
    public function getTradeName(): ?string
    {
        return $this->tradeName;
    }

    /**
     * @param string $tradeName
     */
    public function setTradeName(string $tradeName): void
    {
        $this->tradeName = $tradeName;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    /**
     * @param string $postcode
     */
    public function setPostcode(string $postcode): void
    {
        $this->postcode = $postcode;
    }

    /**
     * @return int
     */
    public function getHouseNumber(): ?int
    {
        return $this->houseNumber;
    }

    /**
     * @param int $houseNumber
     */
    public function setHouseNumber(int $houseNumber): void
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * @return string
     */
    public function getHouseNumberAddition(): ?string
    {
        return $this->houseNumberAddition;
    }

    /**
     * @param string $houseNumberAddition
     */
    public function setHouseNumberAddition(string $houseNumberAddition): void
    {
        $this->houseNumberAddition = $houseNumberAddition;
    }

    /**
     * @return string
     */
    public function getTelephoneNumber(): ?string
    {
        return $this->telephoneNumber;
    }

    /**
     * @param string $telephoneNumber
     */
    public function setTelephoneNumber(string $telephoneNumber): void
    {
        $this->telephoneNumber = $telephoneNumber;
    }

    /**
     * @return string
     */
    public function getDomainName(): ?string
    {
        return $this->domainName;
    }

    /**
     * @param string $domainName
     */
    public function setDomainName(string $domainName): void
    {
        $this->domainName = $domainName;
    }

    /**
     * @return bool
     */
    public function isStrictSearch(): ?bool
    {
        return $this->strictSearch;
    }

    /**
     * @param bool $strictSearch
     */
    public function setStrictSearch(bool $strictSearch): void
    {
        $this->strictSearch = $strictSearch;
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
