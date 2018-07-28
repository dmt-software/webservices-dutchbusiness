<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class PersonnelInfoV3
 *
 * @JMS\AccessType("public_method")
 */
class PersonnelInfoV3
{
                        
    /**
     * @JMS\SerializedName("fulltime")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $fulltime;
                                    
    /**
     * @JMS\SerializedName("parttime")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $parttime;
                                    
    /**
     * @JMS\SerializedName("total")
     * @JMS\Type("integer")
     * @JMS\XmlElement(cdata=false)
     *
     * @var int
     */
    protected $total;
                                    
    /**
     * @return int
     */
    public function getFulltime(): ?int
    {
        return $this->fulltime;
    }

    /**
     * @param int $fulltime
     */
    public function setFulltime(int $fulltime): void
    {
        $this->fulltime = $fulltime;
    }
                                    
    /**
     * @return int
     */
    public function getParttime(): ?int
    {
        return $this->parttime;
    }

    /**
     * @param int $parttime
     */
    public function setParttime(int $parttime): void
    {
        $this->parttime = $parttime;
    }
                                    
    /**
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal(int $total): void
    {
        $this->total = $total;
    }
}
