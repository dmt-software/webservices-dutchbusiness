<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class NewsItem
 *
 * @JMS\AccessType("public_method")
 */
class NewsItem
{
                        
    /**
     * @JMS\SerializedName("title")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $title;
                                    
    /**
     * @JMS\SerializedName("date")
     * @JMS\Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @JMS\XmlElement(cdata=false)
     *
     * @var \DateTime
     */
    protected $date;
                                    
    /**
     * @JMS\SerializedName("short")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $short;
                                    
    /**
     * @JMS\SerializedName("url")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $url;
                                    
    /**
     * @JMS\SerializedName("source")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $source;
                                    
    /**
     * @JMS\SerializedName("type")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $type;
                                    
    /**
     * @JMS\SerializedName("sentiment")
     * @JMS\Type("double")
     * @JMS\XmlElement(cdata=false)
     *
     * @var float
     */
    protected $sentiment;
                                    
    /**
     * @JMS\SerializedName("topics")
     * @JMS\Type("array<string>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item")
     *
     * @var array
     */
    protected $topics;
                                    
    /**
     * @JMS\SerializedName("companies")
     * @JMS\Type("array<DMT\WebservicesNl\DutchBusiness\Model\NewsCompany>")
     * @JMS\XmlElement(cdata=false)
     * @JMS\XmlList(entry="item", inline=false)
     *
     * @var NewsCompany[]
     */
    protected $companies;
                                    
    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
                                    
    /**
     * @return \DateTime
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }
                                    
    /**
     * @return string
     */
    public function getShort(): ?string
    {
        return $this->short;
    }

    /**
     * @param string $short
     */
    public function setShort(string $short): void
    {
        $this->short = $short;
    }
                                    
    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }
                                    
    /**
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string $source
     */
    public function setSource(string $source): void
    {
        $this->source = $source;
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
     * @return float
     */
    public function getSentiment(): ?float
    {
        return $this->sentiment;
    }

    /**
     * @param float $sentiment
     */
    public function setSentiment(float $sentiment): void
    {
        $this->sentiment = $sentiment;
    }
                                    
    /**
     * @return array
     */
    public function getTopics(): ?array
    {
        return $this->topics;
    }

    /**
     * @param array $topics
     */
    public function setTopics(array $topics): void
    {
        $this->topics = $topics;
    }
                                    
    /**
     * @return NewsCompany[]
     */
    public function getCompanies(): ?array
    {
        return $this->companies;
    }

    /**
     * @param NewsCompany[] $companies
     */
    public function setCompanies(array $companies): void
    {
        $this->companies = $companies;
    }
}
