<?php

namespace DMT\WebservicesNl\DutchBusiness\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Class GetConcernRelationsDetailsResult
 *
 * @JMS\AccessType("public_method")
 */
class GetConcernRelationsDetailsResult
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
     * @JMS\SerializedName("graph")
     * @JMS\Type("DMT\WebservicesNl\DutchBusiness\Model\GetConcernRelationsDetailsGraph")
     * @JMS\XmlElement(cdata=false)
     *
     * @var array
     */
    protected $graph;

    /**
     * @JMS\SerializedName("pdf")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $pdf;

    /**
     * @JMS\SerializedName("source")
     * @JMS\Type("string")
     * @JMS\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $source;

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
     * @return GetConcernRelationsDetailsGraph
     */
    public function getGraph(): ?GetConcernRelationsDetailsGraph
    {
        return $this->graph;
    }

    /**
     * @param GetConcernRelationsDetailsGraph $graph
     */
    public function setGraph(GetConcernRelationsDetailsGraph $graph): void
    {
        $this->graph = $graph;
    }

    /**
     * @return string
     */
    public function getPdf(): ?string
    {
        return $this->pdf;
    }

    /**
     * @param string $pdf
     */
    public function setPdf(string $pdf): void
    {
        $this->pdf = $pdf;
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
}
