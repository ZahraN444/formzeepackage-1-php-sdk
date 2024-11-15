<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use Form3PublicAPILib\Exceptions\ApiErrorException;
use Form3PublicAPILib\Exceptions\ApiException;
use Form3PublicAPILib\Models\MandateAdmissionDetailsResponse;
use Form3PublicAPILib\Models\MandateAmendment;
use Form3PublicAPILib\Models\MandateCreation;
use Form3PublicAPILib\Models\MandateCreationResponse;
use Form3PublicAPILib\Models\MandateDetailsListResponse;
use Form3PublicAPILib\Models\MandateDetailsResponse;
use Form3PublicAPILib\Models\MandateReturnCreation;
use Form3PublicAPILib\Models\MandateReturnCreationResponse;
use Form3PublicAPILib\Models\MandateReturnDetailsResponse;
use Form3PublicAPILib\Models\MandateReturnSubmissionCreation;
use Form3PublicAPILib\Models\MandateReturnSubmissionCreationResponse;
use Form3PublicAPILib\Models\MandateReturnSubmissionDetailsResponse;
use Form3PublicAPILib\Models\MandateSubmissionCreation;
use Form3PublicAPILib\Models\MandateSubmissionDetailsResponse;
use Form3PublicAPILib\Utils\DateTimeHelper;

class MandatesController extends BaseController
{
    /**
     * List mandates
     *
     * @param string|null $pageNumber Which page to select
     * @param int|null $pageSize Number of items to select
     * @param string[]|null $filterOrganisationId Filter by organisation id
     * @param string|null $filterDebtorPartyAccountNumber
     * @param string|null $filterDebtorPartyBankId
     * @param string|null $filterBeneficiaryPartyAccountNumber
     * @param string|null $filterBeneficiaryPartyBankId
     * @param string|null $filterCurrency
     * @param string|null $filterPaymentScheme
     * @param string|null $filterSchemePaymentType
     * @param \DateTime|null $filterProcessingDateFrom
     * @param \DateTime|null $filterProcessingDateTo
     * @param \DateTime|null $filterSchemeProcessingDateFrom
     * @param \DateTime|null $filterSchemeProcessingDateTo
     * @param string|null $filterClearingId
     * @param \DateTime|null $filterAdmissionAdmissionDateFrom
     * @param \DateTime|null $filterAdmissionAdmissionDateTo
     * @param string|null $filterAdmissionStatus Filter by admission status
     * @param string|null $filterAdmissionSchemeStatusCode Filter by admission scheme status code
     * @param string|null $filterAmount Filter by amount
     * @param string|null $filterReference Filter by reference
     * @param string|null $filterUniqueSchemeId Filter by unique scheme id
     * @param bool|null $filterAllVersions Include old versions of mandates
     * @param \DateTime|null $filterSubmissionSubmissionDateFrom
     * @param \DateTime|null $filterSubmissionSubmissionDateTo
     * @param string|null $filterStatus Filter by mandate status
     * @param string|null $filterStatusReason Filter by mandate status reason
     *
     * @return MandateDetailsListResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getMandates(
        ?string $pageNumber = null,
        ?int $pageSize = null,
        ?array $filterOrganisationId = null,
        ?string $filterDebtorPartyAccountNumber = null,
        ?string $filterDebtorPartyBankId = null,
        ?string $filterBeneficiaryPartyAccountNumber = null,
        ?string $filterBeneficiaryPartyBankId = null,
        ?string $filterCurrency = null,
        ?string $filterPaymentScheme = null,
        ?string $filterSchemePaymentType = null,
        ?\DateTime $filterProcessingDateFrom = null,
        ?\DateTime $filterProcessingDateTo = null,
        ?\DateTime $filterSchemeProcessingDateFrom = null,
        ?\DateTime $filterSchemeProcessingDateTo = null,
        ?string $filterClearingId = null,
        ?\DateTime $filterAdmissionAdmissionDateFrom = null,
        ?\DateTime $filterAdmissionAdmissionDateTo = null,
        ?string $filterAdmissionStatus = null,
        ?string $filterAdmissionSchemeStatusCode = null,
        ?string $filterAmount = null,
        ?string $filterReference = null,
        ?string $filterUniqueSchemeId = null,
        ?bool $filterAllVersions = null,
        ?\DateTime $filterSubmissionSubmissionDateFrom = null,
        ?\DateTime $filterSubmissionSubmissionDateTo = null,
        ?string $filterStatus = null,
        ?string $filterStatusReason = null
    ): MandateDetailsListResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/transaction/mandates')
            ->auth('OAuth2')
            ->parameters(
                QueryParam::init('page[number]', $pageNumber),
                QueryParam::init('page[size]', $pageSize),
                QueryParam::init('filter[organisation_id]', $filterOrganisationId),
                QueryParam::init('filter[debtor_party.account_number]', $filterDebtorPartyAccountNumber),
                QueryParam::init('filter[debtor_party.bank_id]', $filterDebtorPartyBankId),
                QueryParam::init('filter[beneficiary_party.account_number]', $filterBeneficiaryPartyAccountNumber),
                QueryParam::init('filter[beneficiary_party.bank_id]', $filterBeneficiaryPartyBankId),
                QueryParam::init('filter[currency]', $filterCurrency),
                QueryParam::init('filter[payment_scheme]', $filterPaymentScheme),
                QueryParam::init('filter[scheme_payment_type]', $filterSchemePaymentType),
                QueryParam::init('filter[processing_date_from]', $filterProcessingDateFrom)
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('filter[processing_date_to]', $filterProcessingDateTo)
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('filter[scheme_processing_date_from]', $filterSchemeProcessingDateFrom)
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('filter[scheme_processing_date_to]', $filterSchemeProcessingDateTo)
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('filter[clearing_id]', $filterClearingId),
                QueryParam::init('filter[admission.admission_date_from]', $filterAdmissionAdmissionDateFrom)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('filter[admission.admission_date_to]', $filterAdmissionAdmissionDateTo)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('filter[admission.status]', $filterAdmissionStatus),
                QueryParam::init('filter[admission.scheme_status_code]', $filterAdmissionSchemeStatusCode),
                QueryParam::init('filter[amount]', $filterAmount),
                QueryParam::init('filter[reference]', $filterReference),
                QueryParam::init('filter[unique_scheme_id]', $filterUniqueSchemeId),
                QueryParam::init('filter[all_versions]', $filterAllVersions),
                QueryParam::init('filter[submission.submission_date_from]', $filterSubmissionSubmissionDateFrom)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('filter[submission.submission_date_to]', $filterSubmissionSubmissionDateTo)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('filter[status]', $filterStatus),
                QueryParam::init('filter[status_reason]', $filterStatusReason)
            );

        $_resHandler = $this->responseHandler()->type(MandateDetailsListResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create Mandate
     *
     * @param MandateCreation|null $mandateCreationRequest
     *
     * @return MandateCreationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function postMandates(?MandateCreation $mandateCreationRequest = null): MandateCreationResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/transaction/mandates')
            ->auth('OAuth2')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/vnd.api+json'),
                BodyParam::init($mandateCreationRequest)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Mandate creation error', ApiErrorException::class))
            ->throwErrorOn('409', ErrorType::init('Mandate creation conflict Error', ApiErrorException::class))
            ->type(MandateCreationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Fetch mandate
     *
     * @param string $id Mandate Id
     *
     * @return MandateDetailsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getMandatesID(string $id): MandateDetailsResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/transaction/mandates/{id}')
            ->auth('OAuth2')
            ->parameters(TemplateParam::init('id', $id));

        $_resHandler = $this->responseHandler()->type(MandateDetailsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Update mandate
     *
     * @param string $id Mandate Id
     * @param MandateAmendment|null $mandateAmendment
     *
     * @return MandateDetailsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function patchMandatesID(string $id, ?MandateAmendment $mandateAmendment = null): MandateDetailsResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PATCH, '/transaction/mandates/{id}')
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('id', $id),
                HeaderParam::init('Content-Type', 'application/vnd.api+json'),
                BodyParam::init($mandateAmendment)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Mandate update error', ApiErrorException::class))
            ->type(MandateDetailsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Fetch Mandate Admission
     *
     * @param string $id Mandate Id
     * @param string $admissionId Mandate Admission Id
     *
     * @return MandateAdmissionDetailsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getMandatesIDAdmissionsAdmissionID(
        string $id,
        string $admissionId
    ): MandateAdmissionDetailsResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/transaction/mandates/{id}/admissions/{admissionId}'
        )
            ->auth('OAuth2')
            ->parameters(TemplateParam::init('id', $id), TemplateParam::init('admissionId', $admissionId));

        $_resHandler = $this->responseHandler()->type(MandateAdmissionDetailsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create mandate return
     *
     * @param string $id Mandate Id
     * @param MandateReturnCreation|null $returnCreationRequest
     *
     * @return MandateReturnCreationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function postMandatesIDReturns(
        string $id,
        ?MandateReturnCreation $returnCreationRequest = null
    ): MandateReturnCreationResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/transaction/mandates/{id}/returns')
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('id', $id),
                HeaderParam::init('Content-Type', 'application/vnd.api+json'),
                BodyParam::init($returnCreationRequest)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Return creation error', ApiErrorException::class))
            ->type(MandateReturnCreationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Fetch mandate return
     *
     * @param string $id Mandate Id
     * @param string $returnId Return Id
     *
     * @return MandateReturnDetailsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getMandatesIDReturnsReturnID(string $id, string $returnId): MandateReturnDetailsResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/transaction/mandates/{id}/returns/{returnId}')
            ->auth('OAuth2')
            ->parameters(TemplateParam::init('id', $id), TemplateParam::init('returnId', $returnId));

        $_resHandler = $this->responseHandler()->type(MandateReturnDetailsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create mandate return submission
     *
     * @param string $id Mandate Id
     * @param string $returnId Return Id
     * @param MandateReturnSubmissionCreation|null $returnSubmissionCreationRequest
     *
     * @return MandateReturnSubmissionCreationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function postMandatesIDReturnsReturnIDSubmissions(
        string $id,
        string $returnId,
        ?MandateReturnSubmissionCreation $returnSubmissionCreationRequest = null
    ): MandateReturnSubmissionCreationResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/transaction/mandates/{id}/returns/{returnId}/submissions'
        )
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('id', $id),
                TemplateParam::init('returnId', $returnId),
                HeaderParam::init('Content-Type', 'application/vnd.api+json'),
                BodyParam::init($returnSubmissionCreationRequest)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Return submission creation error', ApiErrorException::class))
            ->type(MandateReturnSubmissionCreationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Fetch return submission
     *
     * @param string $id Mandate Id
     * @param string $returnId Return Id
     * @param string $submissionId Submission Id
     *
     * @return MandateReturnSubmissionDetailsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getMandatesIDReturnsReturnIDSubmissionsSubmissionID(
        string $id,
        string $returnId,
        string $submissionId
    ): MandateReturnSubmissionDetailsResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/transaction/mandates/{id}/returns/{returnId}/submissions/{submissionId}'
        )
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('id', $id),
                TemplateParam::init('returnId', $returnId),
                TemplateParam::init('submissionId', $submissionId)
            );

        $_resHandler = $this->responseHandler()->type(MandateReturnSubmissionDetailsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create Mandate Submission
     *
     * @param string $id Mandate Id
     * @param MandateSubmissionCreation|null $mandateSubmissionCreationRequest
     *
     * @return MandateSubmissionDetailsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function postMandatesIDSubmissions(
        string $id,
        ?MandateSubmissionCreation $mandateSubmissionCreationRequest = null
    ): MandateSubmissionDetailsResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/transaction/mandates/{id}/submissions')
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('id', $id),
                HeaderParam::init('Content-Type', 'application/vnd.api+json'),
                BodyParam::init($mandateSubmissionCreationRequest)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Mandate Submission creation error', ApiErrorException::class))
            ->type(MandateSubmissionDetailsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Fetch Mandate Submission
     *
     * @param string $id Mandate Id
     * @param string $submissionId Mandate Submission Id
     *
     * @return MandateSubmissionDetailsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getMandatesIDSubmissionsSubmissionID(
        string $id,
        string $submissionId
    ): MandateSubmissionDetailsResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/transaction/mandates/{id}/submissions/{submissionId}'
        )
            ->auth('OAuth2')
            ->parameters(TemplateParam::init('id', $id), TemplateParam::init('submissionId', $submissionId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error', ApiErrorException::class))
            ->type(MandateSubmissionDetailsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
