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
use Form3PublicAPILib\Models\ClaimCreation;
use Form3PublicAPILib\Models\ClaimDetailsListResponse;
use Form3PublicAPILib\Models\ClaimDetailsResponse;
use Form3PublicAPILib\Models\ClaimReversalCreation;
use Form3PublicAPILib\Models\ClaimReversalDetailsResponse;
use Form3PublicAPILib\Models\ClaimReversalSubmissionCreation;
use Form3PublicAPILib\Models\ClaimReversalSubmissionDetailsResponse;
use Form3PublicAPILib\Models\ClaimSubmissionCreation;
use Form3PublicAPILib\Models\ClaimSubmissionDetailsResponse;
use Form3PublicAPILib\Utils\DateTimeHelper;

class ClaimsController extends BaseController
{
    /**
     * List claims
     *
     * @param int|null $pageNumber Which page to select
     * @param int|null $pageSize Number of items to select
     * @param string[]|null $filterOrganisationId Filter by organisation id
     * @param string|null $filterPaymentScheme
     * @param string|null $filterClearingId
     * @param string|null $filterReference
     * @param string|null $filterReasonCode
     * @param string|null $filterContactName
     * @param string|null $filterDebtorPartyAccountNumber
     * @param string|null $filterDebtorPartyBankId
     * @param string|null $filterBeneficiaryPartyAccountNumber
     * @param string|null $filterBeneficiaryPartyBankId
     * @param string|null $filterOriginalInstructionReference
     * @param string|null $filterSubmissionStatus
     * @param \DateTime|null $filterSubmissionSubmissionDateFrom
     * @param \DateTime|null $filterSubmissionSubmissionDateTo
     * @param string|null $filterReversalStatus
     * @param \DateTime|null $filterReversalSubmissionDateFrom
     * @param \DateTime|null $filterReversalSubmissionDateTo
     *
     * @return ClaimDetailsListResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listClaims(
        ?int $pageNumber = null,
        ?int $pageSize = null,
        ?array $filterOrganisationId = null,
        ?string $filterPaymentScheme = null,
        ?string $filterClearingId = null,
        ?string $filterReference = null,
        ?string $filterReasonCode = null,
        ?string $filterContactName = null,
        ?string $filterDebtorPartyAccountNumber = null,
        ?string $filterDebtorPartyBankId = null,
        ?string $filterBeneficiaryPartyAccountNumber = null,
        ?string $filterBeneficiaryPartyBankId = null,
        ?string $filterOriginalInstructionReference = null,
        ?string $filterSubmissionStatus = null,
        ?\DateTime $filterSubmissionSubmissionDateFrom = null,
        ?\DateTime $filterSubmissionSubmissionDateTo = null,
        ?string $filterReversalStatus = null,
        ?\DateTime $filterReversalSubmissionDateFrom = null,
        ?\DateTime $filterReversalSubmissionDateTo = null
    ): ClaimDetailsListResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/transaction/claims')
            ->auth('OAuth2')
            ->parameters(
                QueryParam::init('page[number]', $pageNumber),
                QueryParam::init('page[size]', $pageSize),
                QueryParam::init('filter[organisation_id]', $filterOrganisationId),
                QueryParam::init('filter[payment_scheme]', $filterPaymentScheme),
                QueryParam::init('filter[clearing_id]', $filterClearingId),
                QueryParam::init('filter[reference]', $filterReference),
                QueryParam::init('filter[reason_code]', $filterReasonCode),
                QueryParam::init('filter[contact_name]', $filterContactName),
                QueryParam::init('filter[debtor_party.account_number]', $filterDebtorPartyAccountNumber),
                QueryParam::init('filter[debtor_party.bank_id]', $filterDebtorPartyBankId),
                QueryParam::init('filter[beneficiary_party.account_number]', $filterBeneficiaryPartyAccountNumber),
                QueryParam::init('filter[beneficiary_party.bank_id]', $filterBeneficiaryPartyBankId),
                QueryParam::init('filter[original_instruction.reference]', $filterOriginalInstructionReference),
                QueryParam::init('filter[submission.status]', $filterSubmissionStatus),
                QueryParam::init('filter[submission.submission_date_from]', $filterSubmissionSubmissionDateFrom)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('filter[submission.submission_date_to]', $filterSubmissionSubmissionDateTo)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('filter[reversal.status]', $filterReversalStatus),
                QueryParam::init('filter[reversal.submission_date_from]', $filterReversalSubmissionDateFrom)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('filter[reversal.submission_date_to]', $filterReversalSubmissionDateTo)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime'])
            );

        $_resHandler = $this->responseHandler()->type(ClaimDetailsListResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create Claim
     *
     * @param ClaimCreation|null $claimCreationRequest
     *
     * @return ClaimDetailsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createClaim(?ClaimCreation $claimCreationRequest = null): ClaimDetailsResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/transaction/claims')
            ->auth('OAuth2')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/vnd.api+json'),
                BodyParam::init($claimCreationRequest)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Claim creation error', ApiErrorException::class))
            ->type(ClaimDetailsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Fetch claim
     *
     * @param string $id Claim Id
     *
     * @return ClaimDetailsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function fetchClaim(string $id): ClaimDetailsResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/transaction/claims/{id}')
            ->auth('OAuth2')
            ->parameters(TemplateParam::init('id', $id));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error', ApiErrorException::class))
            ->type(ClaimDetailsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create Claim Reversal
     *
     * @param string $id Claim Id
     * @param ClaimReversalCreation|null $claimReversalCreationRequest
     *
     * @return ClaimReversalDetailsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createClaimReversal(
        string $id,
        ?ClaimReversalCreation $claimReversalCreationRequest = null
    ): ClaimReversalDetailsResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/transaction/claims/{id}/reversals')
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('id', $id),
                HeaderParam::init('Content-Type', 'application/vnd.api+json'),
                BodyParam::init($claimReversalCreationRequest)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Claim Reversal creation error', ApiErrorException::class))
            ->type(ClaimReversalDetailsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Fetch Claim Reversal
     *
     * @param string $id Claim Id
     * @param string $reversalId Claim Reversal Id
     *
     * @return ClaimReversalDetailsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function fetchClaimReversal(string $id, string $reversalId): ClaimReversalDetailsResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/transaction/claims/{id}/reversals/{reversalId}')
            ->auth('OAuth2')
            ->parameters(TemplateParam::init('id', $id), TemplateParam::init('reversalId', $reversalId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error', ApiErrorException::class))
            ->type(ClaimReversalDetailsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create Claim Reversal Submission
     *
     * @param string $id Claim Id
     * @param string $reversalId Claim Reversal Id
     * @param ClaimReversalSubmissionCreation|null $claimReversalSubmissionCreationRequest
     *
     * @return ClaimReversalSubmissionDetailsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createClaimReversalSubmission(
        string $id,
        string $reversalId,
        ?ClaimReversalSubmissionCreation $claimReversalSubmissionCreationRequest = null
    ): ClaimReversalSubmissionDetailsResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/transaction/claims/{id}/reversals/{reversalId}/submissions'
        )
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('id', $id),
                TemplateParam::init('reversalId', $reversalId),
                HeaderParam::init('Content-Type', 'application/vnd.api+json'),
                BodyParam::init($claimReversalSubmissionCreationRequest)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Claim Reversal creation error', ApiErrorException::class))
            ->type(ClaimReversalSubmissionDetailsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Fetch Claim Reversal Submission
     *
     * @param string $id Claim Id
     * @param string $reversalId Claim Reversal Id
     * @param string $submissionId Claim Reversal Submission Id
     *
     * @return ClaimReversalSubmissionDetailsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function fetchClaimReversalSubmission(
        string $id,
        string $reversalId,
        string $submissionId
    ): ClaimReversalSubmissionDetailsResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/transaction/claims/{id}/reversals/{reversalId}/submissions/{submissionId}'
        )
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('id', $id),
                TemplateParam::init('reversalId', $reversalId),
                TemplateParam::init('submissionId', $submissionId)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error', ApiErrorException::class))
            ->type(ClaimReversalSubmissionDetailsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create Claim Submission
     *
     * @param string $id Claim Id
     * @param ClaimSubmissionCreation|null $claimSubmissionCreationRequest
     *
     * @return ClaimSubmissionDetailsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createClaimSubmission(
        string $id,
        ?ClaimSubmissionCreation $claimSubmissionCreationRequest = null
    ): ClaimSubmissionDetailsResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/transaction/claims/{id}/submissions')
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('id', $id),
                HeaderParam::init('Content-Type', 'application/vnd.api+json'),
                BodyParam::init($claimSubmissionCreationRequest)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Claim Submission creation error', ApiErrorException::class))
            ->type(ClaimSubmissionDetailsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Fetch Claim Submission
     *
     * @param string $id Claim Id
     * @param string $submissionId Claim Submission Id
     *
     * @return ClaimSubmissionDetailsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function fetchClaimSubmission(string $id, string $submissionId): ClaimSubmissionDetailsResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/transaction/claims/{id}/submissions/{submissionId}'
        )
            ->auth('OAuth2')
            ->parameters(TemplateParam::init('id', $id), TemplateParam::init('submissionId', $submissionId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error', ApiErrorException::class))
            ->type(ClaimSubmissionDetailsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
