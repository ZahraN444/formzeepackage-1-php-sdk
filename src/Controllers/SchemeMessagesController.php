<?php

declare(strict_types=1);

/*
 * Form3PublicAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace Form3PublicAPILib\Controllers;

use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use Form3PublicAPILib\Exceptions\ApiErrorException;
use Form3PublicAPILib\Exceptions\ApiException;
use Form3PublicAPILib\Models\SchemeMessageAdmissionDetailsResponse;
use Form3PublicAPILib\Models\SchemeMessageDetailsListResponse;
use Form3PublicAPILib\Models\SchemeMessageDetailsResponse;
use Form3PublicAPILib\Utils\DateTimeHelper;

class SchemeMessagesController extends BaseController
{
    /**
     * List messages
     *
     * @param string|null $pageNumber Which page to select
     * @param int|null $pageSize Number of items to select
     * @param string|null $filterUniqueSchemeId Filter by Unique SchemeId
     * @param string|null $filterSchemeMessageType Filter by Scheme Message Type
     * @param string|null $filterPaymentScheme Filter by Payment Scheme
     * @param \DateTime|null $filterAdmissionAdmissionDateFrom Filter by Admission DateTime
     * @param \DateTime|null $filterAdmissionAdmissionDateTo Filter by Admission DateTime
     *
     * @return SchemeMessageDetailsListResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listMessages(
        ?string $pageNumber = null,
        ?int $pageSize = 100,
        ?string $filterUniqueSchemeId = null,
        ?string $filterSchemeMessageType = null,
        ?string $filterPaymentScheme = null,
        ?\DateTime $filterAdmissionAdmissionDateFrom = null,
        ?\DateTime $filterAdmissionAdmissionDateTo = null
    ): SchemeMessageDetailsListResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/notification/schememessages')
            ->auth('OAuth2')
            ->parameters(
                QueryParam::init('page[number]', $pageNumber),
                QueryParam::init('page[size]', $pageSize),
                QueryParam::init('filter[unique_scheme_id]', $filterUniqueSchemeId),
                QueryParam::init('filter[scheme_message_type]', $filterSchemeMessageType),
                QueryParam::init('filter[payment_scheme]', $filterPaymentScheme),
                QueryParam::init('filter[admission.admission_date_from]', $filterAdmissionAdmissionDateFrom)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime']),
                QueryParam::init('filter[admission.admission_date_to]', $filterAdmissionAdmissionDateTo)
                    ->serializeBy([DateTimeHelper::class, 'toRfc3339DateTime'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad Request', ApiErrorException::class))
            ->throwErrorOn('401', ErrorType::init('Unauthorized', ApiErrorException::class))
            ->throwErrorOn('403', ErrorType::init('Forbidden', ApiErrorException::class))
            ->type(SchemeMessageDetailsListResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Fetch message
     *
     * @param string $id Scheme Message Id
     *
     * @return SchemeMessageDetailsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function fetchMessage(string $id): SchemeMessageDetailsResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/notification/schememessages/{id}')
            ->auth('OAuth2')
            ->parameters(TemplateParam::init('id', $id));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad Request', ApiErrorException::class))
            ->throwErrorOn('401', ErrorType::init('Unauthorized', ApiErrorException::class))
            ->throwErrorOn('403', ErrorType::init('Forbidden', ApiErrorException::class))
            ->throwErrorOn('404', ErrorType::init('Scheme Message Not found', ApiErrorException::class))
            ->type(SchemeMessageDetailsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get Scheme Message Admission By AdmissionId
     *
     * @param string $id Scheme Message Id
     * @param string $admissionId Scheme Message Admission Id
     *
     * @return SchemeMessageAdmissionDetailsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getSchemeMessageAdmissionByAdmissionId(
        string $id,
        string $admissionId
    ): SchemeMessageAdmissionDetailsResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/notification/schememessages/{id}/admissions/{admissionId}'
        )
            ->auth('OAuth2')
            ->parameters(TemplateParam::init('id', $id), TemplateParam::init('admissionId', $admissionId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::init('Scheme Message Admission by Id bad request', ApiErrorException::class)
            )
            ->throwErrorOn('401', ErrorType::init('Unauthorized', ApiErrorException::class))
            ->throwErrorOn('403', ErrorType::init('Forbidden', ApiErrorException::class))
            ->throwErrorOn('404', ErrorType::init('Scheme Message Not found', ApiErrorException::class))
            ->type(SchemeMessageAdmissionDetailsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
