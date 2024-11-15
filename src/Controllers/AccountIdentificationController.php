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
use Form3PublicAPILib\Models\AccountIdentificationListResponse;
use Form3PublicAPILib\Models\AccountIdentificationRequest;
use Form3PublicAPILib\Models\AccountIdentificationResponse;

class AccountIdentificationController extends BaseController
{
    /**
     * List Account Identifications by Account
     *
     * @param string $accountId Account Id to which this identification relates to
     * @param string|null $pageNumber Which page to select
     * @param int|null $pageSize Number of items to select
     * @param string[]|null $filterOrganisationId Filter by organisation id
     * @param string[]|null $filterSecondaryIdentification Filter to only include account
     *        identifications with specified secondary_identification
     *
     * @return AccountIdentificationListResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listAccountIdentificationsByAccount(
        string $accountId,
        ?string $pageNumber = null,
        ?int $pageSize = null,
        ?array $filterOrganisationId = null,
        ?array $filterSecondaryIdentification = null
    ): AccountIdentificationListResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/organisation/accounts/{account_id}/identifications'
        )
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('account_id', $accountId),
                QueryParam::init('page[number]', $pageNumber),
                QueryParam::init('page[size]', $pageSize),
                QueryParam::init('filter[organisation_id]', $filterOrganisationId),
                QueryParam::init('filter[secondary_identification]', $filterSecondaryIdentification)
            );

        $_resHandler = $this->responseHandler()->type(AccountIdentificationListResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create an identification for an existing Account
     *
     * @param string $accountId Account Id to which this identification relates to
     * @param AccountIdentificationRequest|null $accountIdentificationCreationRequest
     *
     * @return AccountIdentificationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createAnIdentificationForAnExistingAccount(
        string $accountId,
        ?AccountIdentificationRequest $accountIdentificationCreationRequest = null
    ): AccountIdentificationResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/organisation/accounts/{account_id}/identifications'
        )
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('account_id', $accountId),
                HeaderParam::init('Content-Type', 'application/vnd.api+json'),
                BodyParam::init($accountIdentificationCreationRequest)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '409',
                ErrorType::init(
                    'Account Identification creation error, constraint violation of secondary identification',
                    ApiErrorException::class
                )
            )
            ->type(AccountIdentificationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Delete account identification
     *
     * @param string $accountId Account Id
     * @param string $identificationId Account Identification Id
     * @param int $version Version
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteAccountIdentification(string $accountId, string $identificationId, int $version): void
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/organisation/accounts/{account_id}/identifications/{identification_id}'
        )
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('account_id', $accountId),
                TemplateParam::init('identification_id', $identificationId),
                QueryParam::init('version', $version)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::init('Account Identification not found'));

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Get an account identification by id
     *
     * @param string $accountId Account Id
     * @param string $identificationId Account Identification Id
     *
     * @return AccountIdentificationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function getAnAccountIdentificationById(
        string $accountId,
        string $identificationId
    ): AccountIdentificationResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/organisation/accounts/{account_id}/identifications/{identification_id}'
        )
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('account_id', $accountId),
                TemplateParam::init('identification_id', $identificationId),
                HeaderParam::init('Content-Type', 'application/vnd.api+json')
            );

        $_resHandler = $this->responseHandler()->type(AccountIdentificationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Amend Account Identification
     *
     * @param string $accountId Account Id
     * @param string $identificationId Account Identification Id; Must match id in the payload
     * @param AccountIdentificationRequest|null $accountIdentificationAmendRequest
     *
     * @return AccountIdentificationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function amendAccountIdentification(
        string $accountId,
        string $identificationId,
        ?AccountIdentificationRequest $accountIdentificationAmendRequest = null
    ): AccountIdentificationResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PATCH,
            '/organisation/accounts/{account_id}/identifications/{identification_id}'
        )
            ->auth('OAuth2')
            ->parameters(
                TemplateParam::init('account_id', $accountId),
                TemplateParam::init('identification_id', $identificationId),
                HeaderParam::init('Content-Type', 'application/vnd.api+json'),
                BodyParam::init($accountIdentificationAmendRequest)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '409',
                ErrorType::init(
                    'Account Identification update error, constraint violation of secondary identification',
                    ApiErrorException::class
                )
            )
            ->type(AccountIdentificationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
