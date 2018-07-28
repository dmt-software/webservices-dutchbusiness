<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class AnnualFinancialStatementSummary
 *
 * @JMS\AccessType("public_method")
 */
class AnnualFinancialStatementSummary
{
                        
    /**
     * @JMS\SerializedName("year")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $year;
                                    
    /**
     * @JMS\SerializedName("turnover")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\MoneyV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var MoneyV2
     */
    protected $turnover;
                                    
    /**
     * @JMS\SerializedName("profit")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\MoneyV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var MoneyV2
     */
    protected $profit;
                                    
    /**
     * @JMS\SerializedName("assets")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\MoneyV2")
     * @JMS\XmlElement(cdata=false)
     *
     * @var MoneyV2
     */
    protected $assets;
                                    
    /**
     * @return int
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * @param int $year
     */
    public function setYear(int $year): void
    {
        $this->year = $year;
    }
                                    
    /**
     * @return MoneyV2
     */
    public function getTurnover(): ?MoneyV2
    {
        return $this->turnover;
    }

    /**
     * @param MoneyV2 $turnover
     */
    public function setTurnover(MoneyV2 $turnover): void
    {
        $this->turnover = $turnover;
    }
                                    
    /**
     * @return MoneyV2
     */
    public function getProfit(): ?MoneyV2
    {
        return $this->profit;
    }

    /**
     * @param MoneyV2 $profit
     */
    public function setProfit(MoneyV2 $profit): void
    {
        $this->profit = $profit;
    }
                                    
    /**
     * @return MoneyV2
     */
    public function getAssets(): ?MoneyV2
    {
        return $this->assets;
    }

    /**
     * @param MoneyV2 $assets
     */
    public function setAssets(MoneyV2 $assets): void
    {
        $this->assets = $assets;
    }
}
