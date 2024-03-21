<?php
require 'vendor/autoload.php';

use OpenApi\Annotations as OA;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


/**
 * @OA\Info(
 *     title="Tranzpay testing API",
 *     version="1.0.0",
 *     description="
 *      This document provides technical specifications for processing financial transactions through the Tranzpay gateway by interfacing with the Gateway API. 
 *      We have written this specifically for web designers and professionals who design, implement and support the intended systems. We use HTTPS POST to transmit and receive data. 
 *      Please explore our payment gateway through our demonstration account with given test credentials.
 *      For questions or integration support, use the link below to submit a ticket to our Partner Integration Support Team Specialists. Partner Support"
 * )
 */

/**
 * @OA\Schema(
 *     schema="ACHChargeRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "CheckType", "TransactionAmount", "BankRoutingnumber","BankAccountnumber", "BankAccountType", "CheckType", "BillingNameFirst","BillingNameLast", "BillingAddress", "BillingCity", "BillingState", "BillingZipCode","Email"},
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="TransactionType", type="string", enum={"ACHCharge"}),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="TransactionAmount", type="number"),
 *     @OA\Property(property="BankRoutingnumber", type="number"),
 *     @OA\Property(property="BankAccountnumber", type="number"),
 *     @OA\Property(property="BankAccountType", type="number"),
 *     @OA\Property(property="Description", type="string"),
 *     @OA\Property(property="CheckType", type="string"),
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
 *     schema="ACHChargeResponse",
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="PostedDate", type="string"),
 *     @OA\Property(property="StatusID", type="string"),
 *     @OA\Property(property="TransactionType", type="string"),
 *     @OA\Property(property="TransactionID", type="number"),
 *     @OA\Property(property="TransactionAmount", type="number"),
 *     @OA\Property(property="ResponseMessage", type="string"),
 *     @OA\Property(property="BankRoutingnumber", type="string"),
 *     @OA\Property(property="BankAccountnumber", type="string"),
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
 * @OA\Schema(
 *     schema="ACHVOIDRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "TransactionID"},
 *     @OA\Property(property="TransactionType", type="string", enum={"ACHVOID"}),
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="TransactionID", type="number")
 * )
 */

/**
 * @OA\Schema(
 *     schema="ACHVOIDResponse",
 *     @OA\Property(property="CustomerID", type="number"),
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="PostedDate", type="string"),
 *     @OA\Property(property="Status", type="string"),
 *     @OA\Property(property="CustomerName", type="string"),
 *     @OA\Property(property="BillingNameFirst", type="string"),
 *     @OA\Property(property="BillingNameLast", type="string"),
 *     @OA\Property(property="TransactionID", type="number"),
 *     @OA\Property(property="TransactionAmount", type="string")
 * )
 */


/**
 * @OA\Schema(
 *     schema="ACHRefundRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "TransactionID", "TransactionAmount"},
 *     @OA\Property(property="TransactionType", type="string", enum={"ACHRefund"}),
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="TransactionID", type="number"),
 *     @OA\Property(property="TransactionAmount", type="number")
 *)
 */

/**
 * @OA\Schema(
 *     schema="ACHRefundResponse",
 *     @OA\Property(property="CustomerID", type="number"),
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="PostedDate", type="string"),
 *     @OA\Property(property="StatusID", type="number"),
 *     @OA\Property(property="CustomerName", type="string"),
 *     @OA\Property(property="BillingNameFirst", type="string"),
 *     @OA\Property(property="BillingNameLast", type="string"),
 *     @OA\Property(property="TransactionID", type="number"),
 *     @OA\Property(property="TransactionAmount", type="string")
 * )
 */

/**
 * @OA\Schema(
 *     schema="ACHCreditRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "TransactionAmount", "BankRoutingnumber", "BankAccountnumber", "BankAccountType", "CheckType", "BillingNameFirst", "BillingNameLast","BillingAddress", "BillingCity", "BillingState", "BillingZipCode","Email"},
 *     @OA\Property(property="TransactionType", type="string", enum={"ACHCredit"}),
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="TransactionAmount", type="number"),
 *     @OA\Property(property="BankRoutingnumber", type="number"),
 *     @OA\Property(property="BankAccountnumber", type="number"),
 *     @OA\Property(property="BankAccountType", type="string"),
 *     @OA\Property(property="CheckType", type="string"),
 *     @OA\Property(property="Description", type="string"),
 *     @OA\Property(property="BillingNameFirst", type="string"),
 *     @OA\Property(property="BillingNameLast", type="string"),
 *     @OA\Property(property="BillingFullName", type="string"),
 *     @OA\Property(property="BillingAddress", type="string"),
 *     @OA\Property(property="BillingCity", type="string"),
 *     @OA\Property(property="BillingState", type="string"),
 *     @OA\Property(property="BillingZipCode", type="string"),
 *     @OA\Property(property="Email", type="string"),
 *     @OA\Property(property="Policynumber", type="string"),
 * )
 */

/**
 * @OA\Schema(
 *     schema="ACHCreditResponse",
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="PostedDate", type="string"),
 *     @OA\Property(property="StatusID", type="string"),
 *     @OA\Property(property="TransactionType", type="string"),
 *     @OA\Property(property="PaymentType", type="string"),
 *     @OA\Property(property="TransactionID", type="number"),
 *     @OA\Property(property="TransactionAmount", type="number"),
 *     @OA\Property(property="ResponseMessage", type="string"),
 *     @OA\Property(property="BankRoutingnumber", type="string"),
 *     @OA\Property(property="BankAccountnumber", type="string"),
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
 * @OA\Schema(
 *     schema="GetTransactionACHRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password"},
 *     @OA\Property(property="TransactionType", type="string", enum={"GetTransactionACH"}),
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string")
 * )
 */

/**
 * @OA\Schema(
 *     schema="GetTransactionACHResponse",
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="PostedDate", type="string"),
 *     @OA\Property(property="TransactionID", type="number"),
 *     @OA\Property(property="TransactionAmount", type="number"),
 *     @OA\Property(property="Referencenumber", type="string"),
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
 * @OA\Schema(
 *     schema="GetNOCListRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "TransactionType"},
 *     @OA\Property(property="TransactionType", type="string", enum={"GetNOCListRequest"}),
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="StartDate", type="string"),
 *     @OA\Property(property="EndDate", type="string")
 *)
 */

/**
 * @OA\Schema(
 *     schema="GetNOCListResponse",
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="StartDate", type="string"),
 *     @OA\Property(property="EndDate", type="string"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="ReportDate", type="string"),
 *     @OA\Property(property="TransDate", type="string"),
 *     @OA\Property(property="AccountName", type="string"),
 *     @OA\Property(property="TransAmount", type="string"),
 *     @OA\Property(property="TransRoute", type="string"),
 *     @OA\Property(property="AccountNo", type="string"),
 *     @OA\Property(property="AccountType", type="string"),
 *     @OA\Property(property="TransType", type="string"),
 *     @OA\Property(property="TransID", type="string"),
 *     @OA\Property(property="MerchantID", type="string"),
 *     @OA\Property(property="CustomerID", type="number"),
 *     @OA\Property(property="ReturnAmount", type="string"),
 *     @OA\Property(property="ReasonCode", type="string"),
 *     @OA\Property(property="ReasonDescription", type="string"),
 *     @OA\Property(property="Type", type="string"),
 *     @OA\Property(property="NewAccountNo", type="string"),
 *     @OA\Property(property="NewTransRoute", type="string")
 * )
 */


/**
 * @OA\Schema(
 *     schema="GetACHReturnListRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "TransactionType"},
 *     @OA\Property(property="TransactionType", type="string", enum={"GetACHReturnListRequest"}),
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="StartDate", type="string"),
 *     @OA\Property(property="EndDate", type="string"),
 * )
 */

/**
 * @OA\Schema(
 *     schema="GetACHReturnListResponse",
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="StartDate", type="string"),
 *     @OA\Property(property="EndDate", type="string"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="ReportDate", type="string"),
 *     @OA\Property(property="TransDate", type="string"),
 *     @OA\Property(property="AccountName", type="string"),
 *     @OA\Property(property="TransAmount", type="string"),
 *     @OA\Property(property="TransRoute", type="string"),
 *     @OA\Property(property="AccountNo", type="string"),
 *     @OA\Property(property="AccountType", type="string"),
 *     @OA\Property(property="TransType", type="string"),
 *     @OA\Property(property="TransID", type="string"),
 *     @OA\Property(property="MerchantID", type="string"),
 *     @OA\Property(property="CustomerID", type="number"),
 *     @OA\Property(property="ReturnAmount", type="string"),
 *     @OA\Property(property="ReasonCode", type="string"),
 *     @OA\Property(property="ReasonDescription", type="string"),
 *     @OA\Property(property="Type", type="string")
 * )
 */

/**
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=ACHCharge",
 *     summary="",
 *     description="ACHCharge",
 *     tags={"ACH Method"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/ACHChargeRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/ACHChargeResponse")
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
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=ACHVOID",
 *     summary="",
 *     description="ACHVOID",
 *     tags={"ACH Method"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/ACHVOIDRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/ACHVOIDResponse")
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
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=ACHRefund",
 *     summary="",
 *     description="ACHRefund",
 *     tags={"ACH Method"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/ACHRefundRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/ACHRefundResponse")
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
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=ACHCredit",
 *     summary="",
 *     description="ACHCredit",
 *     tags={"ACH Method"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/ACHCreditRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/ACHCreditResponse")
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
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=GetTransactionACH",
 *     summary="",
 *     description="GetTransactionACH",
 *     tags={"ACH Method"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/GetTransactionACHRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/GetTransactionACHResponse")
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
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=GetNOCList",
 *     summary="",
 *     description="GetNOCList",
 *     tags={"ACH Method"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/GetNOCListRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/GetNOCListResponse")
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
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=GetACHReturnList",
 *     summary="",
 *     description="GetACHReturnList",
 *     tags={"ACH Method"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/GetACHReturnListRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/GetACHReturnListResponse")
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

