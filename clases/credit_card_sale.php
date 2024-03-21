<?php
require 'vendor/autoload.php';

use OpenApi\Annotations as OA;
use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app = AppFactory::create();

/**
 * @OA\Info(
 *     title="User API",
 *     version="1.0.0",
 *     description="API for managing user transactions"
 * )
 */

/**
 * @OA\Schema(
 *     schema="CreditCardChargeRequest",
 *     required={"TransactionType", "UserName", "Password", "ProducerID", "CardNumber", "ExpirationDateMMYY", "CVV2", "Description", "TransactionAmount", "BillingNameFirst", "BillingNameLast", "BillingAddress", "BillingCity", "BillingState", "BillingZipCode", "PhoneNumber", "Email", "PolicyNumber"},
 *     @OA\Property(property="TransactionType", type="string"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="ProducerID", type="string"),
 *     @OA\Property(property="CardNumber", type="string"),
 *     @OA\Property(property="ExpirationDateMMYY", type="string"),
 *     @OA\Property(property="CVV2", type="string"),
 *     @OA\Property(property="Description", type="string"),
 *     @OA\Property(property="TransactionAmount", type="string"),
 *     @OA\Property(property="BillingNameFirst", type="string"),
 *     @OA\Property(property="BillingNameLast", type="string"),
 *     @OA\Property(property="BillingAddress", type="string"),
 *     @OA\Property(property="BillingCity", type="string"),
 *     @OA\Property(property="BillingState", type="string"),
 *     @OA\Property(property="BillingZipCode", type="string"),
 *     @OA\Property(property="PhoneNumber", type="string"),
 *     @OA\Property(property="Email", type="string"),
 *     @OA\Property(property="PolicyNumber", type="string")
 * )
 */

/**
 * @OA\Schema(
 *     schema="CreditCardChargeResponse",
 *     @OA\Property(property="ProducerID", type="string"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="BaseAmount", type="string"),
 *     @OA\Property(
 *         property="Transaction",
 *         @OA\Property(property="CardType", type="string"),
 *         @OA\Property(
 *             property="GatewayResponse",
 *             @OA\Property(property="TransactionType", type="string"),
 *             @OA\Property(property="PostedDate", type="string"),
 *             @OA\Property(property="StatusID", type="string"),
 *             @OA\Property(property="StatusMessage", type="string"),
 *             @OA\Property(property="PaymentType", type="string"),
 *             @OA\Property(property="TransactionID", type="string"),
 *             @OA\Property(property="TransactionAmount", type="string"),
 *             @OA\Property(property="ResponseMessage", type="string"),
 *             @OA\Property(property="ResponseCode", type="string"),
 *             @OA\Property(property="AuthorizationCode", type="string"),
 *             @OA\Property(property="CardNumber", type="string"),
 *             @OA\Property(property="ExpirationDateMMYY", type="string"),
 *             @OA\Property(property="CustomerName", type="string"),
 *             @OA\Property(property="BillingNameFirst", type="string"),
 *             @OA\Property(property="BillingNameLast", type="string"),
 *             @OA\Property(property="BillingAddress", type="string"),
 *             @OA\Property(property="BillingCity", type="string"),
 *             @OA\Property(property="BillingState", type="string"),
 *             @OA\Property(property="BillingZipCode", type="string"),
 *             @OA\Property(property="BillingCountry", type="string"),
 *             @OA\Property(property="BillingPhone", type="string"),
 *             @OA\Property(property="BillingEmail", type="string")
 *         )
 *     )
 * )
 */

/**
 * @OA\Post(
 *     path="/process-transaction",
 *     tags={"Transactions"},
 *     summary="Process a credit card charge transaction",
 *     description="Endpoint for processing credit card charge transactions",
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\JsonContent(ref="#/components/schemas/CreditCardChargeRequest")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Transaction processed successfully",
 *         @OA\JsonContent(ref="#/components/schemas/CreditCardChargeResponse")
 *     )
 * )
 */

 