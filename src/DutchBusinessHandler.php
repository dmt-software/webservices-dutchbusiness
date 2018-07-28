<?php

namespace DMT\WebservicesNl\DutchBusiness;

use DMT\WebservicesNl\Client\ClientHandler;
use DMT\WebservicesNl\Client\Request\RequestInterface;
use DMT\WebservicesNl\Client\Response\ResponseInterface;
use DMT\WebservicesNl\DutchBusiness\Request\GetConcernRelationsDetailsRequest;
use DMT\WebservicesNl\DutchBusiness\Request\GetConcernRelationsOverviewRequest;
use DMT\WebservicesNl\DutchBusiness\Request\GetDossierRequest;
use DMT\WebservicesNl\DutchBusiness\Request\GetDossierHistoryRequest;
use DMT\WebservicesNl\DutchBusiness\Request\GetDossierV2Request;
use DMT\WebservicesNl\DutchBusiness\Request\GetDossierV3Request;
use DMT\WebservicesNl\DutchBusiness\Request\GetExtractDocumentDataRequest;
use DMT\WebservicesNl\DutchBusiness\Request\GetExtractDocumentDataV2Request;
use DMT\WebservicesNl\DutchBusiness\Request\GetExtractDocumentDataV3Request;
use DMT\WebservicesNl\DutchBusiness\Request\GetExtractDocumentRequest;
use DMT\WebservicesNl\DutchBusiness\Request\GetExtractHistoryChangedRequest;
use DMT\WebservicesNl\DutchBusiness\Request\GetExtractHistoryDocumentDataRequest;
use DMT\WebservicesNl\DutchBusiness\Request\GetExtractHistoryDocumentDataV2Request;
use DMT\WebservicesNl\DutchBusiness\Request\GetExtractHistoryDocumentDataV3ByDossierRequest;
use DMT\WebservicesNl\DutchBusiness\Request\GetExtractHistoryDocumentDataV3Request;
use DMT\WebservicesNl\DutchBusiness\Request\GetExtractHistoryRequest;
use DMT\WebservicesNl\DutchBusiness\Request\GetLegalEntityRequest;
use DMT\WebservicesNl\DutchBusiness\Request\GetLegalExtractDocumentDataV2Request;
use DMT\WebservicesNl\DutchBusiness\Request\GetLegalExtractDocumentDataV3Request;
use DMT\WebservicesNl\DutchBusiness\Request\GetOrganizationTreeRequest;
use DMT\WebservicesNl\DutchBusiness\Request\GetPositionsRequest;
use DMT\WebservicesNl\DutchBusiness\Request\GetSBIDescriptionRequest;
use DMT\WebservicesNl\DutchBusiness\Request\GetSBIRequest;
use DMT\WebservicesNl\DutchBusiness\Request\GetVatNumberRequest;
use DMT\WebservicesNl\DutchBusiness\Request\SearchDossierNumberRequest;
use DMT\WebservicesNl\DutchBusiness\Request\SearchEstablishmentsRequest;
use DMT\WebservicesNl\DutchBusiness\Request\SearchRequest;
use DMT\WebservicesNl\DutchBusiness\Request\SearchNewsByDossierRequest;
use DMT\WebservicesNl\DutchBusiness\Request\SearchParametersRequest;
use DMT\WebservicesNl\DutchBusiness\Request\SearchParametersV2Request;
use DMT\WebservicesNl\DutchBusiness\Request\SearchPostcodeRequest;
use DMT\WebservicesNl\DutchBusiness\Request\SearchSelectionRequest;
use DMT\WebservicesNl\DutchBusiness\Request\SearchSelectionSimpleRequest;
use DMT\WebservicesNl\DutchBusiness\Request\UBOCheckInvestigationRequest;
use DMT\WebservicesNl\DutchBusiness\Request\UBOCostsInvestigationRequest;
use DMT\WebservicesNl\DutchBusiness\Request\UBOPickupInvestigationRequest;
use DMT\WebservicesNl\DutchBusiness\Request\UBOStartInvestigationRequest;
use DMT\WebservicesNl\DutchBusiness\Request\UpdateAddDossierRequest;
use DMT\WebservicesNl\DutchBusiness\Request\UpdateCheckDossierRequest;
use DMT\WebservicesNl\DutchBusiness\Request\UpdateGetChangedDossiersRequest;
use DMT\WebservicesNl\DutchBusiness\Request\UpdateGetDossiersRequest;
use DMT\WebservicesNl\DutchBusiness\Request\UpdateGetOverviewRequest;
use DMT\WebservicesNl\DutchBusiness\Request\UpdateRemoveDossierRequest;
use DMT\WebservicesNl\DutchBusiness\Response\GetConcernRelationsDetailsResponse;
use DMT\WebservicesNl\DutchBusiness\Response\GetConcernRelationsOverviewResponse;
use DMT\WebservicesNl\DutchBusiness\Response\GetDossierResponse;
use DMT\WebservicesNl\DutchBusiness\Response\GetDossierHistoryResponse;
use DMT\WebservicesNl\DutchBusiness\Response\GetDossierV2Response;
use DMT\WebservicesNl\DutchBusiness\Response\GetDossierV3Response;
use DMT\WebservicesNl\DutchBusiness\Response\GetExtractDocumentDataResponse;
use DMT\WebservicesNl\DutchBusiness\Response\GetExtractDocumentDataV2Response;
use DMT\WebservicesNl\DutchBusiness\Response\GetExtractDocumentDataV3Response;
use DMT\WebservicesNl\DutchBusiness\Response\GetExtractDocumentResponse;
use DMT\WebservicesNl\DutchBusiness\Response\GetExtractHistoryChangedResponse;
use DMT\WebservicesNl\DutchBusiness\Response\GetExtractHistoryDocumentDataResponse;
use DMT\WebservicesNl\DutchBusiness\Response\GetExtractHistoryDocumentDataV2Response;
use DMT\WebservicesNl\DutchBusiness\Response\GetExtractHistoryDocumentDataV3ByDossierResponse;
use DMT\WebservicesNl\DutchBusiness\Response\GetExtractHistoryDocumentDataV3Response;
use DMT\WebservicesNl\DutchBusiness\Response\GetExtractHistoryResponse;
use DMT\WebservicesNl\DutchBusiness\Response\GetLegalEntityResponse;
use DMT\WebservicesNl\DutchBusiness\Response\GetLegalExtractDocumentDataV2Response;
use DMT\WebservicesNl\DutchBusiness\Response\GetLegalExtractDocumentDataV3Response;
use DMT\WebservicesNl\DutchBusiness\Response\GetOrganizationTreeResponse;
use DMT\WebservicesNl\DutchBusiness\Response\GetPositionsResponse;
use DMT\WebservicesNl\DutchBusiness\Response\GetSBIDescriptionResponse;
use DMT\WebservicesNl\DutchBusiness\Response\GetSBIResponse;
use DMT\WebservicesNl\DutchBusiness\Response\GetVatNumberResponse;
use DMT\WebservicesNl\DutchBusiness\Response\SearchDossierNumberResponse;
use DMT\WebservicesNl\DutchBusiness\Response\SearchEstablishmentsResponse;
use DMT\WebservicesNl\DutchBusiness\Response\SearchResponse;
use DMT\WebservicesNl\DutchBusiness\Response\SearchNewsByDossierResponse;
use DMT\WebservicesNl\DutchBusiness\Response\SearchParametersResponse;
use DMT\WebservicesNl\DutchBusiness\Response\SearchParametersV2Response;
use DMT\WebservicesNl\DutchBusiness\Response\SearchPostcodeResponse;
use DMT\WebservicesNl\DutchBusiness\Response\SearchSelectionResponse;
use DMT\WebservicesNl\DutchBusiness\Response\SearchSelectionSimpleResponse;
use DMT\WebservicesNl\DutchBusiness\Response\UBOCheckInvestigationResponse;
use DMT\WebservicesNl\DutchBusiness\Response\UBOCostsInvestigationResponse;
use DMT\WebservicesNl\DutchBusiness\Response\UBOPickupInvestigationResponse;
use DMT\WebservicesNl\DutchBusiness\Response\UBOStartInvestigationResponse;
use DMT\WebservicesNl\DutchBusiness\Response\UpdateAddDossierResponse;
use DMT\WebservicesNl\DutchBusiness\Response\UpdateCheckDossierResponse;
use DMT\WebservicesNl\DutchBusiness\Response\UpdateGetChangedDossiersResponse;
use DMT\WebservicesNl\DutchBusiness\Response\UpdateGetDossiersResponse;
use DMT\WebservicesNl\DutchBusiness\Response\UpdateGetOverviewResponse;
use DMT\WebservicesNl\DutchBusiness\Response\UpdateRemoveDossierResponse;

/**
 * Class DutchBusiness
 *
 * @package DMT\WebservicesNl\DutchBusiness
 */
class DutchBusinessHandler extends ClientHandler
{
    /**
     * Get all known details of a Corporate Group Relationships (concernrelaties) for specified dossier number.
     *
     * @param GetConcernRelationsDetailsRequest $request
     *
     * @return GetConcernRelationsDetailsResponse
     */
    public function getConcernRelationsDetails(
        GetConcernRelationsDetailsRequest $request
    ): GetConcernRelationsDetailsResponse {
        return $this->process($request, GetConcernRelationsDetailsResponse::class);
    }
    /**
     * Search for an overview of Corporate Group Relationships aka `concern relaties` for specified dossier number.
     *
     * @param GetConcernRelationsOverviewRequest $request
     *
     * @return GetConcernRelationsOverviewResponse
     */
    public function getConcernRelationsOverview(
        GetConcernRelationsOverviewRequest $request
    ): GetConcernRelationsOverviewResponse {
        return $this->process($request, GetConcernRelationsOverviewResponse::class);
    }
    /**
     * Retrieve data on a business establishment.
     *
     * @param GetDossierRequest $request
     *
     * @return GetDossierResponse
     */
    public function getDossier(GetDossierRequest $request): GetDossierResponse
    {
        return $this->process($request, GetDossierResponse::class);
    }
    /**
     * Get a list of logged updates for a specific business dossier.
     *
     * @param GetDossierHistoryRequest $request
     *
     * @return GetDossierHistoryResponse
     */
    public function getDossierHistory(GetDossierHistoryRequest $request): GetDossierHistoryResponse
    {
        return $this->process($request, GetDossierHistoryResponse::class);
    }
    /**
     * Retrieve data on a business establishment.
     *
     * @param GetDossierV2Request $request
     *
     * @return GetDossierV2Response
     */
    public function getDossierV2(GetDossierV2Request $request): GetDossierV2Response
    {
        return $this->process($request, GetDossierV2Response::class);
    }
    /**
     * Retrieve data on a business establishment.
     *
     * @param GetDossierV3Request $request
     *
     * @return GetDossierV3Response
     */
    public function getDossierV3(GetDossierV3Request $request): GetDossierV3Response
    {
        return $this->process($request, GetDossierV3Response::class);
    }
    /**
     * Retrieve a Chamber of Commerce extract document (Dutch: Uittreksel Handelsregister).
     *
     * @param GetExtractDocumentDataRequest $request
     *
     * @return GetExtractDocumentDataResponse
     */
    public function getExtractDocumentData(GetExtractDocumentDataRequest $request): GetExtractDocumentDataResponse
    {
        return $this->process($request, GetExtractDocumentDataResponse::class);
    }
    /**
     * Retrieve a Chamber of Commerce extract document (Dutch: Uittreksel Handelsregister).
     *
     * @param GetExtractDocumentDataV2Request $request
     *
     * @return GetExtractDocumentDataV2Response
     */
    public function getExtractDocumentDataV2(GetExtractDocumentDataV2Request $request): GetExtractDocumentDataV2Response
    {
        return $this->process($request, GetExtractDocumentDataV2Response::class);
    }
    /**
     * Retrieve a Chamber of Commerce extract document (Dutch: Uittreksel Handelsregister).
     *
     * @param GetExtractDocumentDataV3Request $request
     *
     * @return GetExtractDocumentDataV3Response
     */
    public function getExtractDocumentDataV3(GetExtractDocumentDataV3Request $request): GetExtractDocumentDataV3Response
    {
        return $this->process($request, GetExtractDocumentDataV3Response::class);
    }
    /**
     * Retrieve a Chamber of Commerce extract document (Dutch: Uittreksel Handelsregister).
     *
     * @param GetExtractDocumentRequest $request
     *
     * @return GetExtractDocumentResponse
     */
    public function getExtractDocument(GetExtractDocumentRequest $request): GetExtractDocumentResponse
    {
        return $this->process($request, GetExtractDocumentResponse::class);
    }
    /**
     * Retrieve a list of extract document references.
     *
     * @param GetExtractHistoryChangedRequest $request
     *
     * @return GetExtractHistoryChangedResponse
     */
    public function getExtractHistoryChanged(GetExtractHistoryChangedRequest $request): GetExtractHistoryChangedResponse
    {
        return $this->process($request, GetExtractHistoryChangedResponse::class);
    }
    /**
     * Retrieve a Chamber of Commerce extract document (Dutch: Uittreksel Handelsregister).
     *
     * @param GetExtractHistoryDocumentDataRequest $request
     *
     * @return GetExtractHistoryDocumentDataResponse
     */
    public function getExtractHistoryDocumentData(
        GetExtractHistoryDocumentDataRequest $request
    ): GetExtractHistoryDocumentDataResponse {
        return $this->process($request, GetExtractHistoryDocumentDataResponse::class);
    }
    /**
     * Retrieve a Chamber of Commerce extract document (Dutch: Uittreksel Handelsregister).
     *
     * @param GetExtractHistoryDocumentDataV2Request $request
     *
     * @return GetExtractHistoryDocumentDataV2Response
     */
    public function getExtractHistoryDocumentDataV2(
        GetExtractHistoryDocumentDataV2Request $request
    ): GetExtractHistoryDocumentDataV2Response {
        return $this->process($request, GetExtractHistoryDocumentDataV2Response::class);
    }
    /**
     * Retrieve a Chamber of Commerce extract document (Dutch: Uittreksel Handelsregister).
     *
     * @param GetExtractHistoryDocumentDataV3ByDossierRequest $request
     *
     * @return GetExtractHistoryDocumentDataV3ByDossierResponse
     */
    public function getExtractHistoryDocumentDataV3ByDossier(
        GetExtractHistoryDocumentDataV3ByDossierRequest $request
    ): GetExtractHistoryDocumentDataV3ByDossierResponse {
        return $this->process($request, GetExtractHistoryDocumentDataV3ByDossierResponse::class);
    }
    /**
     * Retrieve a Chamber of Commerce extract document (Dutch: Uittreksel Handelsregister).
     *
     * @param GetExtractHistoryDocumentDataV3Request $request
     *
     * @return GetExtractHistoryDocumentDataV3Response
     */
    public function getExtractHistoryDocumentDataV3(
        GetExtractHistoryDocumentDataV3Request $request
    ): GetExtractHistoryDocumentDataV3Response {
        return $this->process($request, GetExtractHistoryDocumentDataV3Response::class);
    }
    /**
     * Retrieve a list of extract document references.
     *
     * @param GetExtractHistoryRequest $request
     *
     * @return GetExtractHistoryResponse
     */
    public function getExtractHistory(GetExtractHistoryRequest $request): GetExtractHistoryResponse
    {
        return $this->process($request, GetExtractHistoryResponse::class);
    }
    /**
     * Retrieve legal entity data on a business establishment.
     *
     * @param GetLegalEntityRequest $request
     *
     * @return GetLegalEntityResponse
     */
    public function getLegalEntity(GetLegalEntityRequest $request): GetLegalEntityResponse
    {
        return $this->process($request, GetLegalEntityResponse::class);
    }
    /**
     * Retrieve a Chamber of Commerce extract document (Dutch: Uittreksel Handelsregister).
     *
     * @param GetLegalExtractDocumentDataV2Request $request
     *
     * @return GetLegalExtractDocumentDataV2Response
     */
    public function getLegalExtractDocumentDataV2(
        GetLegalExtractDocumentDataV2Request $request
    ): GetLegalExtractDocumentDataV2Response {
        return $this->process($request, GetLegalExtractDocumentDataV2Response::class);
    }
    /**
     * Retrieve a Chamber of Commerce extract document (Dutch: Uittreksel Handelsregister).
     *
     * @param GetLegalExtractDocumentDataV3Request $request
     *
     * @return GetLegalExtractDocumentDataV3Response
     */
    public function getLegalExtractDocumentDataV3(
        GetLegalExtractDocumentDataV3Request $request
    ): GetLegalExtractDocumentDataV3Response {
        return $this->process($request, GetLegalExtractDocumentDataV3Response::class);
    }
    /**
     * Retrieve the organization tree of a company.
     *
     * @param GetOrganizationTreeRequest $request
     *
     * @return GetOrganizationTreeResponse
     */
    public function getOrganizationTree(GetOrganizationTreeRequest $request): GetOrganizationTreeResponse
    {
        return $this->process($request, GetOrganizationTreeResponse::class);
    }
    /**
     * Retrieve position data on a business establishment.
     *
     * @param GetPositionsRequest $request
     *
     * @return GetPositionsResponse
     */
    public function getPositions(GetPositionsRequest $request): GetPositionsResponse
    {
        return $this->process($request, GetPositionsResponse::class);
    }
    /**
     * Look up a SBI (`Standaard Bedrijfs Indeling 2008`) code.
     *
     * @param GetSBIDescriptionRequest $request
     *
     * @return GetSBIDescriptionResponse
     */
    public function getSBIDescription(GetSBIDescriptionRequest $request): GetSBIDescriptionResponse
    {
        return $this->process($request, GetSBIDescriptionResponse::class);
    }
    /**
     * Retrieve SBI Information on a company.
     *
     * @param GetSBIRequest $request
     *
     * @return GetSBIResponse
     */
    public function getSBI(GetSBIRequest $request): GetSBIResponse
    {
        return $this->process($request, GetSBIResponse::class);
    }
    /**
     * Retrieve data on a business establishment.
     *
     * @param GetVatNumberRequest $request
     *
     * @return GetVatNumberResponse
     */
    public function getVatNumber(GetVatNumberRequest $request): GetVatNumberResponse
    {
        return $this->process($request, GetVatNumberResponse::class);
    }
    /**
     * Search for business establishments using a known identifier.
     *
     * @param SearchDossierNumberRequest $request
     *
     * @return SearchDossierNumberResponse
     */
    public function searchDossierNumber(SearchDossierNumberRequest $request): SearchDossierNumberResponse
    {
        return $this->process($request, SearchDossierNumberResponse::class);
    }
    /**
     * Search for business establishments using a known identifier.
     *
     * @param SearchEstablishmentsRequest $request
     *
     * @return SearchEstablishmentsResponse
     */
    public function searchEstablishments(SearchEstablishmentsRequest $request): SearchEstablishmentsResponse
    {
        return $this->process($request, SearchEstablishmentsResponse::class);
    }
    /**
     * Find business establishments using a variety of parameters.
     *
     * @param SearchRequest $request
     *
     * @return SearchResponse
     */
    public function search(SearchRequest $request): SearchResponse
    {
        return $this->process($request, SearchResponse::class);
    }
    /**
     * Get a paged result of all news items found.
     *
     * @param SearchNewsByDossierRequest $request
     *
     * @return SearchNewsByDossierResponse
     */
    public function searchNewsByDossier(SearchNewsByDossierRequest $request): SearchNewsByDossierResponse
    {
        return $this->process($request, SearchNewsByDossierResponse::class);
    }
    /**
     * Find business establishments using a variety of parameters.
     *
     * @param SearchParametersRequest $request
     *
     * @return SearchParametersResponse
     */
    public function searchParameters(SearchParametersRequest $request): SearchParametersResponse
    {
        return $this->process($request, SearchParametersResponse::class);
    }
    /**
     * Find business establishments using a variety of parameters.
     *
     * @param SearchParametersV2Request $request
     *
     * @return SearchParametersV2Response
     */
    public function searchParametersV2(SearchParametersV2Request $request): SearchParametersV2Response
    {
        return $this->process($request, SearchParametersV2Response::class);
    }
    /**
     * Find business establishments based on postcode and house number.
     *
     * @param SearchPostcodeRequest $request
     *
     * @return SearchPostcodeResponse
     */
    public function searchPostcode(SearchPostcodeRequest $request): SearchPostcodeResponse
    {
        return $this->process($request, SearchPostcodeResponse::class);
    }
    /**
     * Search for businesses matching all of the given criteria.
     *
     * @param SearchSelectionRequest $request
     *
     * @return SearchSelectionResponse
     */
    public function searchSelection(SearchSelectionRequest $request): SearchSelectionResponse
    {
        return $this->process($request, SearchSelectionResponse::class);
    }
    /**
     * Simple search for businesses matching all of the given criteria.
     *
     * @param SearchSelectionSimpleRequest $request
     *
     * @return SearchSelectionSimpleResponse
     */
    public function searchSelectionSimple(SearchSelectionSimpleRequest $request): SearchSelectionSimpleResponse
    {
        return $this->process($request, SearchSelectionSimpleResponse::class);
    }
    /**
     * Checks the status of an UBO investigation.
     *
     * @param UBOCheckInvestigationRequest $request
     *
     * @return UBOCheckInvestigationResponse
     */
    public function uBOCheckInvestigation(UBOCheckInvestigationRequest $request): UBOCheckInvestigationResponse
    {
        return $this->process($request, UBOCheckInvestigationResponse::class);
    }
    /**
     * Return the costs of a finished UBO investigation.
     *
     * @param UBOCostsInvestigationRequest $request
     *
     * @return UBOCostsInvestigationResponse
     */
    public function uBOCostsInvestigation(UBOCostsInvestigationRequest $request): UBOCostsInvestigationResponse
    {
        return $this->process($request, UBOCostsInvestigationResponse::class);
    }
    /**
     * Pickup the result of an UBO investigation.
     *
     * @param UBOPickupInvestigationRequest $request
     *
     * @return UBOPickupInvestigationResponse
     */
    public function uBOPickupInvestigation(UBOPickupInvestigationRequest $request): UBOPickupInvestigationResponse
    {
        return $this->process($request, UBOPickupInvestigationResponse::class);
    }
    /**
     * Starts an UBO investigation for given dossierNumber and establishmentNumber.
     *
     * @param UBOStartInvestigationRequest $request
     *
     * @return UBOStartInvestigationResponse
     */
    public function uBOStartInvestigation(UBOStartInvestigationRequest $request): UBOStartInvestigationResponse
    {
        return $this->process($request, UBOStartInvestigationResponse::class);
    }

    /**
     * Add a dossier to the list of dossiers for which the user (the user whose credentials are used to make the call)
     * wants to receive updates.
     *
     * @param UpdateAddDossierRequest $request
     * @return null
     */
    public function updateAddDossier(UpdateAddDossierRequest $request)
    {
        return $this->process($request);
    }
    /**
     * Retrieve information on the last change of a business establishment.
     *
     * @param UpdateCheckDossierRequest $request
     *
     * @return UpdateCheckDossierResponse
     */
    public function updateCheckDossier(UpdateCheckDossierRequest $request): UpdateCheckDossierResponse
    {
        return $this->process($request, UpdateCheckDossierResponse::class);
    }
    /**
     * Retrieve all dossiers changed since the given date.
     *
     * @param UpdateGetChangedDossiersRequest $request
     *
     * @return UpdateGetChangedDossiersResponse
     */
    public function updateGetChangedDossiers(UpdateGetChangedDossiersRequest $request): UpdateGetChangedDossiersResponse
    {
        return $this->process($request, UpdateGetChangedDossiersResponse::class);
    }
    /**
     * Returns a list of all dossiers that have been updated since they were last retrieved by the user.
     *
     * @param UpdateGetDossiersRequest $request
     *
     * @return UpdateGetDossiersResponse
     */
    public function updateGetDossiers(UpdateGetDossiersRequest $request): UpdateGetDossiersResponse
    {
        return $this->process($request, UpdateGetDossiersResponse::class);
    }
    /**
     * Get a paged result of all the dossier the logged on user is subscribed to.
     *
     * @param UpdateGetOverviewRequest $request
     *
     * @return UpdateGetOverviewResponse
     */
    public function updateGetOverview(UpdateGetOverviewRequest $request): UpdateGetOverviewResponse
    {
        return $this->process($request, UpdateGetOverviewResponse::class);
    }

    /**
     * Remove a dossier from the list of dossiers for which the user (the user whose credentials are used to make the
     * call) wants to receive updates.
     *
     * @param UpdateRemoveDossierRequest $request
     * @return null
     */
    public function updateRemoveDossier(UpdateRemoveDossierRequest $request)
    {
        return $this->process($request);
    }
}
