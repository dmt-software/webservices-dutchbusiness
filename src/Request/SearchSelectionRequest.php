<?php

namespace DMT\WebservicesNl\DutchBusiness\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class SearchSelectionRequest
 *
 * Search for businesses matching all of the given criteria.
 *
 * @JMS\AccessType("public_method")
 */
class SearchSelectionRequest
{

    /**
     * @JMS\SerializedName("city")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $city;

    /**
     * @JMS\SerializedName("postcode")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $postcode;

    /**
     * @JMS\SerializedName("sbi")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $sbi;

    /**
     * @JMS\SerializedName("primary_sbi_only")
     * @JMS\Type("boolean")
     * @JMS\XmlElement(cdata=false)
     *
     * @var bool
     */
    protected $primarySbiOnly;

    /**
     * @JMS\SerializedName("legal_form")
     * @JMS\Type("array<integer>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $legalForm;

    /**
     * @JMS\SerializedName("employees_min")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $employeesMin;

    /**
     * @JMS\SerializedName("employees_max")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $employeesMax;

    /**
     * @JMS\SerializedName("economically_active")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $economicallyActive;

    /**
     * @JMS\SerializedName("financial_status")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $financialStatus;

    /**
     * @JMS\SerializedName("changed_since")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $changedSince;

    /**
     * @JMS\SerializedName("new_since")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $newSince;

    /**
     * @JMS\SerializedName("page")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $page;

    /**
     * @JMS\SerializedName("provinces")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $provinces;

    /**
     * @JMS\SerializedName("sbi_match_type")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $sbiMatchType;

    /**
     * @return array
     */
    public function getCity(): ?array
    {
        return $this->city;
    }

    /**
     * @param array $city
     */
    public function setCity(array $city): void
    {
        $this->city = $city;
    }

    /**
     * @return array
     */
    public function getPostcode(): ?array
    {
        return $this->postcode;
    }

    /**
     * @param array $postcode
     */
    public function setPostcode(array $postcode): void
    {
        $this->postcode = $postcode;
    }

    /**
     * @return array
     */
    public function getSbi(): ?array
    {
        return $this->sbi;
    }

    /**
     * @param array $sbi
     */
    public function setSbi(array $sbi): void
    {
        $this->sbi = $sbi;
    }

    /**
     * @return bool
     */
    public function isPrimarySbiOnly(): ?bool
    {
        return $this->primarySbiOnly;
    }

    /**
     * @param bool $primarySbiOnly
     */
    public function setPrimarySbiOnly(bool $primarySbiOnly): void
    {
        $this->primarySbiOnly = $primarySbiOnly;
    }

    /**
     * @return array
     */
    public function getLegalForm(): ?array
    {
        return $this->legalForm;
    }

    /**
     * @param array $legalForm
     */
    public function setLegalForm(array $legalForm): void
    {
        $this->legalForm = $legalForm;
    }

    /**
     * @return int
     */
    public function getEmployeesMin(): ?int
    {
        return $this->employeesMin;
    }

    /**
     * @param int $employeesMin
     */
    public function setEmployeesMin(int $employeesMin): void
    {
        $this->employeesMin = $employeesMin;
    }

    /**
     * @return int
     */
    public function getEmployeesMax(): ?int
    {
        return $this->employeesMax;
    }

    /**
     * @param int $employeesMax
     */
    public function setEmployeesMax(int $employeesMax): void
    {
        $this->employeesMax = $employeesMax;
    }

    /**
     * @return string
     */
    public function getEconomicallyActive(): ?string
    {
        return $this->economicallyActive;
    }

    /**
     * @param string $economicallyActive
     */
    public function setEconomicallyActive(string $economicallyActive): void
    {
        $this->economicallyActive = $economicallyActive;
    }

    /**
     * @return string
     */
    public function getFinancialStatus(): ?string
    {
        return $this->financialStatus;
    }

    /**
     * @param string $financialStatus
     */
    public function setFinancialStatus(string $financialStatus): void
    {
        $this->financialStatus = $financialStatus;
    }

    /**
     * @return string
     */
    public function getChangedSince(): ?string
    {
        return $this->changedSince;
    }

    /**
     * @param string $changedSince
     */
    public function setChangedSince(string $changedSince): void
    {
        $this->changedSince = $changedSince;
    }

    /**
     * @return string
     */
    public function getNewSince(): ?string
    {
        return $this->newSince;
    }

    /**
     * @param string $newSince
     */
    public function setNewSince(string $newSince): void
    {
        $this->newSince = $newSince;
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

    /**
     * @return array
     */
    public function getProvinces(): ?array
    {
        return $this->provinces;
    }

    /**
     * @param array $provinces
     */
    public function setProvinces(array $provinces): void
    {
        $this->provinces = $provinces;
    }

    /**
     * @return string
     */
    public function getSbiMatchType(): ?string
    {
        return $this->sbiMatchType;
    }

    /**
     * @param string $sbiMatchType
     */
    public function setSbiMatchType(string $sbiMatchType): void
    {
        $this->sbiMatchType = $sbiMatchType;
    }
}
