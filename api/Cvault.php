<?php
require 'vendor/autoload.php';

use OpenApi\Annotations as OA;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


use OpenApi\Serializer;

$serializer = new Serializer();
$openapi = $serializer->deserialize($jsonString, 'OpenApi\Annotations\OpenApi');
echo $openapi->toJson();

/**
 * @OA\Schema(
 *     schema="AddCustomerRequest",
 *     required={"TransactionType", "CustomerID", "ProducerID", "UserName", "Password", "BillingNameFirst","BillingNameLast", "BillingAddress", "BillingCity", "BillingState", "BillingZipCode"},
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="CustomerID", type="number"),
 *     @OA\Property(property="TransactionType", type="string", enum={"AddCustomer"}),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="Cardnumber", type="number"),
 *     @OA\Property(property="ExpirationDateMMYY", type="number"),
 *     @OA\Property(property="BankRoutingnumber", type="number"),
 *     @OA\Property(property="BankAccountnumber", type="number"),
 *     @OA\Property(property="BankAccountType", type="number"),
 *     @OA\Property(property="BillingNameFirst", type="string"),
 *     @OA\Property(property="BillingNameLast", type="string"),
 *     @OA\Property(property="BillingFullName", type="string"),
 *     @OA\Property(property="BillingAddress", type="string"),
 *     @OA\Property(property="BillingCity", type="string"),
 *     @OA\Property(property="BillingState", type="string"),
 *     @OA\Property(property="BillingZipCode", type="string"),
 *     @OA\Property(property="Email", type="string")
 * )
 */

/**
 * @OA\Schema(
 *     schema="AddCustomerResponse",
 *     @OA\Property(property="CustomerID", type="string"),
 *     @OA\Property(property="ProducerID", type="string"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="PostedDate", type="string"),
 *     @OA\Property(property="Status", type="string"),
 *     @OA\Property(property="CustomerName", type="string"),
 *     @OA\Property(property="BillingNameFirst", type="string"),
 *     @OA\Property(property="BillingNameLast", type="string"),
 *     @OA\Property(property="BillingAddress", type="string"),
 *     @OA\Property(property="BillingCity", type="string"),
 *     @OA\Property(property="BillingState", type="string"),
 *     @OA\Property(property="BillingZipCode", type="string"),
 *     @OA\Property(property="BillingEmail", type="string"),
 *     @OA\Property(property="Msg", type="string")
 * )
 */

/**
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=AddCustomer",
 *     summary="",
 *     description="AddCustomer",
 *     tags={"Customer Vault"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/AddCustomerRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/AddCustomerResponse")
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Bad request. Check your request parameters"
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized. Invalid credentials"
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Internal server error. Please try again later"
 *     )
 *)
 */

/**
 * @OA\Schema(
 *     schema="UpdateCustomerRequest",
 *     required={"TransactionType", "CustomerID", "ProducerID", "UserName", "Password", "BillingNameFirst","BillingNameLast", "BillingAddress", "BillingCity", "BillingState", "BillingZipCode"},
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="CustomerID", type="number"),
 *     @OA\Property(property="TransactionType", type="string", enum={"UpdateCustomer"}),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="Cardnumber", type="number"),
 *     @OA\Property(property="ExpirationDateMMYY", type="number"),
 *     @OA\Property(property="BankRoutingnumber", type="number"),
 *     @OA\Property(property="BankAccountnumber", type="number"),
 *     @OA\Property(property="BankAccountType", type="number"),
 *     @OA\Property(property="BillingNameFirst", type="string"),
 *     @OA\Property(property="BillingNameLast", type="string"),
 *     @OA\Property(property="BillingFullName", type="string"),
 *     @OA\Property(property="BillingAddress", type="string"),
 *     @OA\Property(property="BillingCity", type="string"),
 *     @OA\Property(property="BillingState", type="string"),
 *     @OA\Property(property="BillingZipCode", type="string"),
 *     @OA\Property(property="Email", type="string")
 * )
 */

/**
 * @OA\Schema(
 *     schema="UpdateCustomerResponse",
 *     @OA\Property(property="CustomerID", type="string"),
 *     @OA\Property(property="ProducerID", type="string"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="PostedDate", type="string"),
 *     @OA\Property(property="Status", type="string"),
 *     @OA\Property(property="CustomerName", type="string"),
 *     @OA\Property(property="BillingNameFirst", type="string"),
 *     @OA\Property(property="BillingNameLast", type="string"),
 *     @OA\Property(property="BillingAddress", type="string"),
 *     @OA\Property(property="BillingCity", type="string"),
 *     @OA\Property(property="BillingState", type="string"),
 *     @OA\Property(property="BillingZipCode", type="string"),
 *     @OA\Property(property="BillingEmail", type="string"),
 *     @OA\Property(property="Msg", type="string")
 * )
 */

/**
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=UpdateCustomer",
 *     summary="",
 *     description="UpdateCustomer",
 *     tags={"Customer Vault"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/UpdateCustomerRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/UpdateCustomerResponse")
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Bad request. Check your request parameters"
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized. Invalid credentials"
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Internal server error. Please try again later"
 *     )
 * )
 */

/**
 * @OA\Schema(
 *     schema="GetCustomerRequest",
 *     required={"TransactionType", "CustomerID", "ProducerID", "UserName", "Password"},
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="CustomerID", type="number"),
 *     @OA\Property(property="TransactionType", type="string", enum={"GetCustomer"}),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string")
 * )
 */

/**
 * @OA\Schema(
 *     schema="GetCustomerResponse",
 *     @OA\Property(property="CustomerID", type="string"),
 *     @OA\Property(property="ProducerID", type="string"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="PostedDate", type="string"),
 *     @OA\Property(property="Status", type="string"),
 *     @OA\Property(property="CustomerName", type="string"),
 *     @OA\Property(property="BillingNameFirst", type="string"),
 *     @OA\Property(property="BillingNameLast", type="string"),
 *     @OA\Property(property="BillingAddress", type="string"),
 *     @OA\Property(property="BillingCity", type="string"),
 *     @OA\Property(property="BillingState", type="string"),
 *     @OA\Property(property="BillingZipCode", type="string"),
 *     @OA\Property(property="BillingEmail", type="string"),
 *     @OA\Property(property="Msg", type="string")
 * )
 */

/**
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=GetCustomer",
 *     summary="",
 *     description="GetCustomer",
 *     tags={"Customer Vault"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/GetCustomerRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/GetCustomerResponse")
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Bad request. Check your request parameters"
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized. Invalid credentials"
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Internal server error. Please try again later"
 *     )
 *)
 */
 
/**
 * @OA\Schema(
 *     schema="AddCustomerCCChargeRequest",
 *     required={"TransactionType", "CustomerID", "ProducerID", "UserName", "Password", "TransactionAmount"},
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="CustomerID", type="number"),
 *     @OA\Property(property="TransactionType", type="string", enum={"AddCustomerCCCharge"}),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="TransactionAmount", type="number"),
 *     @OA\Property(property="CVV2", type="number"),
 *     @OA\Property(property="Policynumber", type="string")
 * )
 */

/**
 * @OA\Schema(
 *     schema="AddCustomerCCChargeResponse",
 *     @OA\Property(property="CustomerID", type="string"),
 *     @OA\Property(property="ProducerID", type="string"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="PostedDate", type="string"),
 *     @OA\Property(property="TransactionID", type="string"),
 *     @OA\Property(property="TransactionAmount", type="string"),
 *     @OA\Property(property="ResponseCode", type="string"),
 *     @OA\Property(property="ResponseMessage", type="string"),
 *     @OA\Property(property="CVV2ResponseCode", type="string"),
 *     @OA\Property(property="CVV2ResponseMessage", type="string"),
 *     @OA\Property(property="AVSResponseCode", type="string"),
 *     @OA\Property(property="AVSResponseMessage", type="string"),
 *     @OA\Property(property="CustomerName", type="string"),
 *     @OA\Property(property="BillingNameFirst", type="string"),
 *     @OA\Property(property="BillingNameLast", type="string"),
 *     @OA\Property(property="BillingAddress", type="string"),
 *     @OA\Property(property="BillingCity", type="string"),
 *     @OA\Property(property="BillingState", type="string"),
 *     @OA\Property(property="BillingZipCode", type="string"),
 *     @OA\Property(property="BillingEmail", type="string"),
 *     @OA\Property(property="Code", type="string"),
 *     @OA\Property(property="Msg", type="string")
 * )
 */

/**
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=AddCustomerCCCharge",
 *     summary="",
 *     description="AddCustomerCCCharge",
 *     tags={"Customer Vault"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/AddCustomerCCChargeRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/AddCustomerCCChargeResponse")
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Bad request. Check your request parameters"
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized. Invalid credentials"
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Internal server error. Please try again later"
 *     )
 *)
 */

/**
 * @OA\Schema(
 *     schema="AddCustomerACHDebitRequest",
 *     required={"TransactionType", "CustomerID", "ProducerID", "UserName", "Password", "TransactionAmount"},
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="CustomerID", type="number"),
 *     @OA\Property(property="TransactionType", type="string", enum={"AddCustomerACHDebit"}),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="TransactionAmount", type="number"),
 *     @OA\Property(property="Policynumber", type="string")
 * )
 */

/**
 * @OA\Schema(
 *     schema="AddCustomerACHDebitResponse",
 *     @OA\Property(property="CustomerID", type="string"),
 *     @OA\Property(property="ProducerID", type="string"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="PostedDate", type="string"),
 *     @OA\Property(property="TransactionID", type="string"),
 *     @OA\Property(property="TransactionAmount", type="string"),
 *     @OA\Property(property="Status", type="string"),
 *     @OA\Property(property="Code", type="string"),
 *     @OA\Property(property="Msg", type="string")
 * )
 */

/**
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=AddCustomerACHDebit",
 *     summary="",
 *     description="AddCustomerACHDebit",
 *     tags={"Customer Vault"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/AddCustomerACHDebitRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/AddCustomerACHDebitResponse")
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Bad request. Check your request parameters"
 *     ),
 *     @OA\Response(
 *         response=401,
 *         description="Unauthorized. Invalid credentials"
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="Internal server error. Please try again later"
 *     )
 *)
 */
