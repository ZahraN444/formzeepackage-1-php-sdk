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
use Form3PublicAPILib\Models\QueryAdmissionResponse;
use Form3PublicAPILib\Models\QueryCreation;
use Form3PublicAPILib\Models\QueryFetchResponse;
use Form3PublicAPILib\Models\QueryListResponse;
use Form3PublicAPILib\Models\QueryResponseAdmissionResponse;
use Form3PublicAPILib\Models\QueryResponseCreation;
use Form3PublicAPILib\Models\QueryResponseResponse;
use Form3PublicAPILib\Models\QueryResponseSubmissionCreation;
use Form3PublicAPILib\Models\QueryResponseSubmissionResponse;
use Form3PublicAPILib\Models\QuerySubmissionCreation;
use Form3PublicAPILib\Models\QuerySubmissionResponse;
use Form3PublicAPILib\Models\ReportRequestStatusEnum;
use Form3PublicAPILib\Utils\DateTimeHelper;

class QueryApiController extends BaseController
{
    /**
     * Get Query
     *
     * @param string[]|null $filterOrganisationId The organisations to filter on
     * @param string|null $filterStatus Find all queries for a given status
     * @param string|null $filterQueryType Find all queries for a given query type
     * @param bool|null $filterAutoHandled Find all queries for given auto handled flag
     * @param \DateTime|null $filterProcessingDateFrom Find all queries from a certain value date.
     * @param \DateTime|null $filterProcessingDateTo Find all queries up to a certain value date.
     * @param \DateTime|null $filterCreatedOnFrom Find all queries from a certain created date.
     * @param \DateTime|null $filterCreatedOnTo Find all queries up to a certain created date.
     * @param string|null $filterPaymentId Find all queries with a certain payment id.
     * @param string|null $filterPaymentAdmissionId Find all queries with a certain payment
     *        admission id.
     * @param string|null $filterPaymentSubmissionId Find all queries with a certain payment
     *        submission id.
     * @param string|null $filterRecallId Find all queries with a certain recall id.
     * @param string|null $filterRecallSubmissionId Find all queries with a certain recall
     *        submission id.
     * @param string|null $filterQueryId Find all queries with a certain query id.
     * @param string|null $pageNumber Which page to select
     * @param int|null $pageSize Number of items to select
     *
     * @return QueryListResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listQueries(
        ?array $filterOrganisationId = null,
        ?string $filterStatus = null,
        ?string $filterQueryType = null,
        ?bool $filterAutoHandled = null,
        ?\DateTime $filterProcessingDateFrom = null,
        ?\DateTime $filterProcessingDateTo = null,
        ?\DateTime $filterCreatedOnFrom = null,
        ?\DateTime $filterCreatedOnTo = null,
        ?string $filterPaymentId = null,
        ?string $filterPaymentAdmissionId = null,
        ?string $filterPaymentSubmissionId = null,
        ?string $filterRecallId = null,
        ?string $filterRecallSubmissionId = null,
        ?string $filterQueryId = null,
        ?string $pageNumber = null,
        ?int $pageSize = null
    ): QueryListResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/transaction/queries')
            ->auth('OAuth2')
            ->parameters(
                QueryParam::init('filter[organisation_id]', $filterOrganisationId),
                QueryParam::init('filter[status]', $filterStatus)
                    ->serializeBy([ReportRequestStatusEnum::class, 'checkValue']),
                QueryParam::init('filter[query_type]', $filterQueryType),
                QueryParam::init('filter[auto_handled]', $filterAutoHandled),
                QueryParam::init('filter[processing_date_from]', $filterProcessingDateFrom)
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('filter[processing_date_to]', $filterProcessingDateTo)
                    ->serializeBy([DateTimeHelper::class, 'toSimpleDate']),
                QueryParam::init('filter[created_on_from]', $filterCreatedOnFrom)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('filter[created_on_to]', $filterCreatedOnTo)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('filter[payment.id]', $filterPaymentId),
                QueryParam::init('filter[payment_admission.id]', $filterPaymentAdmissionId),
                QueryParam::init('filter[payment_submission.id]', $filterPaymentSubmissionId),
                QueryParam::init('filter[recall.id]', $filterRecallId),
                QueryParam::init('filter[recall_submission.id]', $filterRecallSubmissionId),
                QueryParam::init('filter[query.id]', $filterQueryId),
                QueryParam::init('page[number]', $pageNumber),
                QueryParam::init('page[size]', $pageSize)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Query bad request', ApiErrorException::class))
            ->throwErrorOn('502', ErrorType::init('Query gateway issue', ApiErrorException::class))
            ->type(QueryListResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a Query
     *
     * @param QueryCreation|null $creationRequest
     *
     * @return QueryFetchResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createQuery(?QueryCreation $creationRequest = null): QueryFetchResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/transaction/queries')
            ->auth('OAuth2')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/vnd.api+json'),
                BodyParam::init($creationRequest)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('bad request', ApiErrorException::class))
            ->throwErrorOn('403', ErrorType::init('forbidden', ApiErrorException::class))
            ->throwErrorOn('502', ErrorType::init('gateway issue', ApiErrorException::class))
            ->type(QueryFetchResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Fetch a Query
     *
     * @param string $queryId Query ID
     *
     * @return QueryFetchResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getQuery(string $queryId): QueryFetchResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/transaction/queries/{query_id}')
            ->auth('OAuth2')
            ->parameters(TemplateParam::init('query_id', $queryId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('bad request', ApiErrorException::class))
            ->throwErrorOn('403', ErrorType::init('forbidden', ApiErrorException::class))
            ->type(QueryFetchResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Fetch a Query Admission
     *
     * @param string $queryId Query ID
     * @param string $queryAdmissionId Query Admission ID
     *
     * @return QueryAdmissionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getQueryAdmission(string $queryId, string $queryAdmissionId): QueryAdmissionResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/transaction/queries/{query_id}/admissions/{query_admission_id}'
        )
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('query_id', $queryId),
                TemplateParam::init('query_admission_id', $queryAdmissionId)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('bad request', ApiErrorException::class))
            ->throwErrorOn('403', ErrorType::init('forbidden', ApiErrorException::class))
            ->type(QueryAdmissionResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a Query Response
     *
     * @param string $queryId Query ID
     * @param QueryResponseCreation|null $creationRequest
     *
     * @return QueryResponseResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createQueryResponse(
        string $queryId,
        ?QueryResponseCreation $creationRequest = null
    ): QueryResponseResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/transaction/queries/{query_id}/responses')
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('query_id', $queryId),
                HeaderParam::init('Content-Type', 'application/vnd.api+json'),
                BodyParam::init($creationRequest)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('bad request', ApiErrorException::class))
            ->throwErrorOn('403', ErrorType::init('forbidden', ApiErrorException::class))
            ->throwErrorOn('502', ErrorType::init('gateway issue', ApiErrorException::class))
            ->type(QueryResponseResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Fetch a Query Response
     *
     * @param string $queryId Query ID
     * @param string $queryResponseId Query Response ID
     *
     * @return QueryResponseResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getQueryResponse(string $queryId, string $queryResponseId): QueryResponseResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/transaction/queries/{query_id}/responses/{query_response_id}'
        )
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('query_id', $queryId),
                TemplateParam::init('query_response_id', $queryResponseId)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad Request', ApiErrorException::class))
            ->throwErrorOn('403', ErrorType::init('Forbidden', ApiErrorException::class))
            ->type(QueryResponseResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Fetch a Query Response Admission
     *
     * @param string $queryId Query ID
     * @param string $queryResponseId Query Response ID
     * @param string $queryResponseAdmissionId Query Response Admission ID
     *
     * @return QueryResponseAdmissionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getQueryResponseAdmission(
        string $queryId,
        string $queryResponseId,
        string $queryResponseAdmissionId
    ): QueryResponseAdmissionResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/transaction/queries/{query_id}/responses/{query_response_id}/admissions/{query_re' .
            'sponse_admission_id}'
        )
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('query_id', $queryId),
                TemplateParam::init('query_response_id', $queryResponseId),
                TemplateParam::init('query_response_admission_id', $queryResponseAdmissionId)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('bad request', ApiErrorException::class))
            ->throwErrorOn('403', ErrorType::init('forbidden', ApiErrorException::class))
            ->type(QueryResponseAdmissionResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a Query Response Submission
     *
     * @param string $queryId Query ID
     * @param string $queryResponseId Query Response ID
     * @param QueryResponseSubmissionCreation|null $creationRequest
     *
     * @return QueryResponseSubmissionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createQueryResponseSubmission(
        string $queryId,
        string $queryResponseId,
        ?QueryResponseSubmissionCreation $creationRequest = null
    ): QueryResponseSubmissionResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/transaction/queries/{query_id}/responses/{query_response_id}/submissions'
        )
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('query_id', $queryId),
                TemplateParam::init('query_response_id', $queryResponseId),
                HeaderParam::init('Content-Type', 'application/vnd.api+json'),
                BodyParam::init($creationRequest)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('bad request', ApiErrorException::class))
            ->throwErrorOn('403', ErrorType::init('forbidden', ApiErrorException::class))
            ->throwErrorOn('502', ErrorType::init('gateway issue', ApiErrorException::class))
            ->type(QueryResponseSubmissionResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Fetch a Query Response Submission
     *
     * @param string $queryId Query ID
     * @param string $queryResponseId Query Response ID
     * @param string $queryResponseSubmissionId Query Response Submission ID
     *
     * @return QueryResponseSubmissionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getQueryResponseSubmission(
        string $queryId,
        string $queryResponseId,
        string $queryResponseSubmissionId
    ): QueryResponseSubmissionResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/transaction/queries/{query_id}/responses/{query_response_id}/submissions/{query_r' .
            'esponse_submission_id}'
        )
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('query_id', $queryId),
                TemplateParam::init('query_response_id', $queryResponseId),
                TemplateParam::init('query_response_submission_id', $queryResponseSubmissionId)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('bad request', ApiErrorException::class))
            ->throwErrorOn('403', ErrorType::init('forbidden', ApiErrorException::class))
            ->type(QueryResponseSubmissionResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a Query submission
     *
     * @param string $queryId Query ID
     * @param QuerySubmissionCreation|null $creationRequest
     *
     * @return QuerySubmissionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createQuerySubmission(
        string $queryId,
        ?QuerySubmissionCreation $creationRequest = null
    ): QuerySubmissionResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/transaction/queries/{query_id}/submissions')
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('query_id', $queryId),
                HeaderParam::init('Content-Type', 'application/vnd.api+json'),
                BodyParam::init($creationRequest)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('bad request', ApiErrorException::class))
            ->throwErrorOn('403', ErrorType::init('forbidden', ApiErrorException::class))
            ->throwErrorOn('502', ErrorType::init('gateway issue', ApiErrorException::class))
            ->type(QuerySubmissionResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Fetch a Query submission
     *
     * @param string $queryId Query ID
     * @param string $querySubmissionId Query Submission ID
     *
     * @return QuerySubmissionResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getQuerySubmission(string $queryId, string $querySubmissionId): QuerySubmissionResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/transaction/queries/{query_id}/submissions/{query_submission_id}'
        )
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('query_id', $queryId),
                TemplateParam::init('query_submission_id', $querySubmissionId)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('bad request', ApiErrorException::class))
            ->throwErrorOn('403', ErrorType::init('forbidden', ApiErrorException::class))
            ->type(QuerySubmissionResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}