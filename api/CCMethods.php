<?php
require 'vendor/autoload.php';

use OpenApi\Annotations as OA;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use OpenApi\Serializer;
$jsonString = 'public\dist\swagger.json';
$serializer = new Serializer();
$openapi = $serializer->deserialize($jsonString, 'OpenApi\Annotations\OpenApi');
echo $openapi->toJson();


/**
 * @OA\Schema(
 *     schema="CreditCardAuthorizationRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "TransactionAmount", "Cardnumber","ExpirationDateMMYY", "CVV2", "TransactionAmount", "BillingNameFirst","BillingNameLast", "BillingFullName", "BillingAddress", "BillingCity", "BillingState", "BillingZipCode","Email", "Referencenumber"},
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="TransactionType", type="string", enum={"CreditCardAuthorization"}),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="Cardnumber", type="number"),
 *     @OA\Property(property="ExpirationDateMMYY", type="number"),
 *     @OA\Property(property="CVV2", type="number"),
 *     @OA\Property(property="Description", type="string"),
 *     @OA\Property(property="TransactionAmount", type="number"),
 *     @OA\Property(property="BillingNameFirst", type="string"),
 *     @OA\Property(property="BillingNameLast", type="string"),
 *     @OA\Property(property="BillingFullName", type="string"),
 *     @OA\Property(property="BillingAddress", type="string"),
 *     @OA\Property(property="BillingCity", type="string"),
 *     @OA\Property(property="BillingState", type="string"),
 *     @OA\Property(property="BillingZipCode", type="string"),
 *     @OA\Property(property="Phonenumber", type="string"),
 *     @OA\Property(property="Email", type="string"),
 *     @OA\Property(property="Referencenumber", type="number"),
 *     @OA\Property(property="Policynumber", type="string")
 * )
 */

/**
 * @OA\Schema(
 *     schema="CreditCardAuthorizationResponse",
 *     @OA\Property(property="ProducerID", type="string"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="PostedDate", type="string"),
 *     @OA\Property(property="TransactionID", type="string"),
 *     @OA\Property(property="Referencenumber", type="string"),
 *     @OA\Property(property="TransactionAmount", type="string"),
 *     @OA\Property(property="AuthorizationCode", type="string"),
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
 *     path="/api/transaction.php?transactionType=CreditCardAuthorization",
 *     summary="",
 *     description="CreditCardAuthorization",
 *     tags={"Credit Card Method"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/CreditCardAuthorizationRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/CreditCardAuthorizationResponse")
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
 *     schema="CreditCardRefundRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "TransactionID", "TransactionAmount"},
 *     @OA\Property(property="TransactionType", type="string", enum={"CreditCardRefun"}),
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="TransactionID", type="number")
 * )
 */

/**
 * @OA\Schema(
 *     schema="CreditCardRefundResponse",
 *     @OA\Property(property="ProducerID", type="string"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="PostedDate", type="string"),
 *     @OA\Property(property="TransactionID", type="string"),
 *     @OA\Property(property="TransactionAmount", type="string"),
 *     @OA\Property(property="AuthorizationCode", type="string"),
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
 *     @OA\Property(property="BillingEmail", type="string")
 * )
 */

/**
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=CreditCardRefund",
 *     summary="",
 *     description="CreditCardRefund",
 *     tags={"Credit Card Method"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/CreditCardRefundRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/CreditCardRefundResponse")
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
 *     schema="CreditCardSaleRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "TransactionAmount", "Cardnumber","ExpirationDateMMYY", "CVV2", "TransactionAmount", "BillingNameFirst","BillingNameLast", "BillingAddress", "BillingCity", "BillingState", "BillingZipCode","Email"},
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="TransactionType", type="string", enum={"CreditCardSale"}),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="Cardnumber", type="number"),
 *     @OA\Property(property="ExpirationDateMMYY", type="number"),
 *     @OA\Property(property="CVV2", type="number"),
 *     @OA\Property(property="Description", type="string"),
 *     @OA\Property(property="TransactionAmount", type="number"),
 *     @OA\Property(property="BillingNameFirst", type="string"),
 *     @OA\Property(property="BillingNameLast", type="string"),
 *     @OA\Property(property="BillingAddress", type="string"),
 *     @OA\Property(property="BillingCity", type="string"),
 *     @OA\Property(property="BillingState", type="string"),
 *     @OA\Property(property="BillingZipCode", type="string"),
 *     @OA\Property(property="Phonenumber", type="string"),
 *     @OA\Property(property="Email", type="string"),
 *     @OA\Property(property="Policynumber", type="string")
 * )
 */

/**
 * @OA\Schema(
 *     schema="CreditCardSaleResponse",
 *     @OA\Property(property="ProducerID", type="string"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="PostedDate", type="string"),
 *     @OA\Property(property="TransactionID", type="string"),
 *     @OA\Property(property="TransactionAmount", type="string"),
 *     @OA\Property(property="AuthorizationCode", type="string"),
 *     @OA\Property(property="ResponseCode", type="string"),
 *     @OA\Property(property="ResponseMessage", type="string"),
 *     @OA\Property(property="CVV2ResponseCode", type="string"),
 *     @OA\Property(property="CVV2ResponseMessage", type="string"),
 *     @OA\Property(property="AVSResponseCode", type="string"),
 *     @OA\Property(property="AVSResponseMessage", type="string"),
 *     @OA\Property(property="CustomerName", type="string"),
 *     @OA\Property(property="BillingNameFirstCard Holder First Name", type="string"),
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
 *     path="/api/transaction.php?transactionType=CreditCardSale",
 *     summary="",
 *     description="CreditCardSale",
 *     tags={"Credit Card Method"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/CreditCardSaleRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/CreditCardSaleResponse")
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
 *     schema="CreditCardSettleRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "TransactionID", "Referencenumber", "TransactionAmount"},
 *     @OA\Property(property="TransactionType", type="string", enum={"CreditCardSettle"}),
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="TransactionID", type="number"),
 *     @OA\Property(property="Referencenumber", type="number"),
 *     @OA\Property(property="TransactionAmount", type="number")
 * )
 */

/**
 * @OA\Schema(
 *     schema="CreditCardSettleResponse",
 *     @OA\Property(property="ProducerID", type="string"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="PostedDate", type="string"),
 *     @OA\Property(property="TransactionID", type="string"),
 *     @OA\Property(property="Referencenumber", type="string"),
 *     @OA\Property(property="TransactionAmount", type="string"),
 *     @OA\Property(property="AuthorizationCode", type="string"),
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
 *     @OA\Property(property="BillingEmail", type="string")
 * )
 */

/**
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=CreditCardSettle",
 *     summary="",
 *     description="CreditCardSettle",
 *     tags={"Credit Card Method"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/CreditCardSettleRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/CreditCardSettleResponse")
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
 *     schema="CreditCardVoidRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "TransactionID"},
 *     @OA\Property(property="TransactionType", type="string", enum={"CreditCardVoid"}),
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="TransactionID", type="number")
 * )
 */

/**
 * @OA\Schema(
 *     schema="CreditCardVoidResponse",
 *     @OA\Property(property="ProducerID", type="string"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="PostedDate", type="string"),
 *     @OA\Property(property="TransactionID", type="string"),
 *     @OA\Property(property="TransactionAmount", type="string"),
 *     @OA\Property(property="AuthorizationCode", type="string"),
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
 *     @OA\Property(property="BillingEmail", type="string")
 * )
 */

/**
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=CreditCardVoid",
 *     summary="",
 *     description="CreditCardVoid",
 *     tags={"Credit Card Method"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/CreditCardVoidRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/CreditCardVoidResponse")
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
 *     schema="GetTransactionRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "TransactionID"},
 *     @OA\Property(property="TransactionType", type="string", enum={"GetTransaction"}),
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="TransactionID", type="number")
 * )
 */

/**
 * @OA\Schema(
 *     schema="GetTransactionResponse",
 *     @OA\Property(property="ProducerID", type="string"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="PostedDate", type="string"),
 *     @OA\Property(property="TransactionID", type="string"),
 *     @OA\Property(property="TransactionAmount", type="string"),
 *     @OA\Property(property="AuthorizationCode", type="string"),
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
 *     @OA\Property(property="BillingPhone", type="string"),
 *     @OA\Property(property="CustomerID", type="string"),
 *     @OA\Property(property="TransactionType", type="string"),
 *     @OA\Property(property="VoidDate", type="string"),
 *     @OA\Property(property="RefundDate", type="string"),
 *     @OA\Property(property="Message", type="string"),
 *     @OA\Property(property="Code", type="string"),
 *     @OA\Property(property="Msg", type="string")
 * )
 */

/**
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=GetTransaction",
 *     summary="",
 *     description="GetTransaction",
 *     tags={"Credit Card Method"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/GetTransactionRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/GetTransactionResponse")
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
