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
 *     @OA\Property(property="TransactionType", type="string"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="TransactionAmount", type="Decimal number greater than zero"),
 *     @OA\Property(property="BankRoutingnumber", type="number"),
 *     @OA\Property(property="BankAccountnumber", type="number"),
 *     @OA\Property(property="BankAccountType", type="number"),
 *     @OA\Property(property="Description", type="string"),
 *     @OA\Property(property="CheckType", type="number"),
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
 *     @OA\Property(property="ProducerID", Validate="Integer supplied by TranzPay"),
 *     @OA\Property(property="GatewayConnect", Validate="“Y” or “N”"),
 *     @OA\Property(property="PostedDate", Validate="Numeric id returned by TranzPay"),
 *     @OA\Property(property="StatusID", Validate="“Y” or “N”"),
 *     @OA\Property(property="TransactionType", Validate="Any alphanumeric"),
 *     @OA\Property(property="TransactionID", Validate="Any alphanumeric"),
 *     @OA\Property(property="TransactionAmount", Validate="Decimal number greater than zero"),
 *     @OA\Property(property="ResponseMessage", Validate="Any alphanumeric"),
 *     @OA\Property(property="BankRoutingnumberResponse", Validate="Any alphanumeric"),
 *     @OA\Property(property="BankAccountnumberResponse", Validate="Any alphanumeric"),
 *     @OA\Property(property="CustomerName", Validate="Alpha character name"),
 *     @OA\Property(property="BillingNameFirst", Validate="Alpha character name"),
 *     @OA\Property(property="BillingNameLast", Validate="Alpha character name"),
 *     @OA\Property(property="BillingAddress", Validate="Any alphanumeric"),
 *     @OA\Property(property="BillingCity", Validate="Any alphanumeric"),
 *     @OA\Property(property="BillingState", Validate="Any alphanumeric"),
 *     @OA\Property(property="BillingZipCode", Validate="5 digit zip code"),
 *     @OA\Property(property="BillingEmail", Validate="string"),
 *     @OA\Property(property="Code", Validate="V1001"),
 *     @OA\Property(property="Msg", Validate="Alpha character error msg")
 * )
 */

/**
 * @OA\Post(
 *     path="ACHCharge",
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
 * @OA\Schema(
 *     schema="ACHVOIDRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "TransactionID"},
 *     @OA\Property(property="TransactionType", type="string"),
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="TransactionID", type="number")
 * )
 */

/**
 * @OA\Schema(
 *     schema="ACHVOIDResponse",
 *     @OA\Property(property="CustomerID", Validate="String Unique"),
 *     @OA\Property(property="ProducerID", Validate="Integer supplied by TranzPay"),
 *     @OA\Property(property="GatewayConnect", Validate="“Y” or “N”"),
 *     @OA\Property(property="PostedDate", Validate="Date/time formatted string"),
 *     @OA\Property(property="Status", Validate="Any alphanumeric"),
 *     @OA\Property(property="CustomerName", Validate="Alpha character name"),
 *     @OA\Property(property="BillingNameFirst", Validate="Alpha character name"),
 *     @OA\Property(property="BillingNameLast", Validate="Alpha character name"),
 *     @OA\Property(property="TransactionID", Validate="Any alphanumeric"),
 *     @OA\Property(property="TransactionAmount", Validate="Decimal number greater than zero")
 * )
 */

/**
 * @OA\Post(
 *     path="ACHVOID",
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
 * @OA\Schema(
 *     schema="ACHRefundRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "TransactionID", "TransactionAmount"},
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="TransactionType", type="string"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="TransactionID", type="number"),
 *     @OA\Property(property="TransactionAmount", type="number")
 *)
 */

/**
 * @OA\Schema(
 *     schema="ACHRefundResponse",
 *     @OA\Property(property="CustomerID", Validate="String Unique"),
 *     @OA\Property(property="ProducerID", Validate="Integer supplied by TranzPay"),
 *     @OA\Property(property="GatewayConnect", Validate="“Y” or “N”"),
 *     @OA\Property(property="PostedDate", Validate="Date/time formatted string"),
 *     @OA\Property(property="StatusID", Validate="Numeric"),
 *     @OA\Property(property="CustomerName", Validate="Alpha character name"),
 *     @OA\Property(property="BillingNameFirst Holder First Name", Validate="Alpha character name"),
 *     @OA\Property(property="BillingNameLast", Validate="Alpha character name"),
 *     @OA\Property(property="TransactionID", Validate="Any alphanumeric"),
 *     @OA\Property(property="TransactionAmount", Validate="Decimal number greater than zero")
 * )
 */

/**
 * @OA\Post(
 *     path="ACHRefund",
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
 * @OA\Schema(
 *     schema="ACHCreditRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "TransactionAmount", "BankRoutingnumber", "BankAccountnumber", "BankAccountType", "CheckType", "BillingNameFirst", "BillingNameLast","BillingAddress", "BillingCity", "BillingState", "BillingZipCode","Email"},
 *     @OA\Property(property="TransactionType", type="string"),
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="TransactionAmount", type="number"),
 *     @OA\Property(property="BankRoutingnumber", type="number"),
 *     @OA\Property(property="BankAccountnumber", type="number"),
 *     @OA\Property(property="BankAccountType", type="String"),
 *     @OA\Property(property="CheckType", type="String"),
 *     @OA\Property(property="Description", type="String"),
 *     @OA\Property(property="BillingNameFirst", Validate="String"),
 *     @OA\Property(property="BillingNameLast", Validate="String"),
 *     @OA\Property(property="BillingFullName", Validate="String"),
 *     @OA\Property(property="BillingAddress", Validate="String"),
 *     @OA\Property(property="BillingCity", Validate="String"),
 *     @OA\Property(property="BillingState", Validate="String"),
 *     @OA\Property(property="BillingZipCode", Validate="String"),
 *     @OA\Property(property="Email", Validate="string"),
 *     @OA\Property(property="Policynumber", Validate="string"),
 * )
 */

/**
 * @OA\Schema(
 *     schema="ACHCreditResponse",
 *     @OA\Property(property="ProducerID", Validate="Integer supplied by TranzPay"),
 *     @OA\Property(property="GatewayConnect", Validate="“Y” or “N”"),
 *     @OA\Property(property="PostedDate", Validate="Date/time formatted string"),
 *     @OA\Property(property="StatusID", Validate="“Y” or “N”"),
 *     @OA\Property(property="TransactionType", Validate="Date/time formatted string"),
 *     @OA\Property(property="PaymentType", Validate="Any alphanumeric"),
 *     @OA\Property(property="TransactionID", Validate="Any alphanumeric"),
 *     @OA\Property(property="TransactionAmount", Validate="Decimal number greater than zero"),
 *     @OA\Property(property="ResponseMessage", Validate="Any alphanumeric"),
 *     @OA\Property(property="BankRoutingnumberResponse", Validate="Any alphanumeric"),
 *     @OA\Property(property="BankAccountnumberResponse", Validate="Any alphanumeric"),
 *     @OA\Property(property="CustomerName", Validate="Alpha character name"),
 *     @OA\Property(property="BillingNameFirst", Validate="Alpha character name"),
 *     @OA\Property(property="BillingNameLast", Validate="Alpha character name"),
 *     @OA\Property(property="BillingAddress", Validate="Any alphanumeric"),
 *     @OA\Property(property="BillingCity", Validate="Any alphanumeric"),
 *     @OA\Property(property="BillingState", Validate="Any alphanumeric"),
 *     @OA\Property(property="BillingZipCode", Validate="5 digit zip code"),
 *     @OA\Property(property="BillingEmail", Validate="string"),
 *     @OA\Property(property="Code", Validate="“V1001”"),
 *     @OA\Property(property="Msg", Validate="Alpha character error msg")
 * )
 */

/**
 * @OA\Post(
 *     path="ACHCredit",
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
 * @OA\Schema(
 *     schema="GetTransactionACHRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password"},
 *     @OA\Property(property="TransactionType", type="string"),
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string")
 * )
 */

/**
 * @OA\Schema(
 *     schema="GetTransactionACHResponse",
 *     @OA\Property(property="ProducerID", Validate="Integer supplied by TranzPay"),
 *     @OA\Property(property="GatewayConnect", Validate="“Y” or “N”"),
 *     @OA\Property(property="PostedDate", Validate="Date/time formatted string"),
 *     @OA\Property(property="TransactionID", Validate="Any alphanumeric"),
 *     @OA\Property(property="TransactionAmount", Validate="Decimal number greater than zero"),
 *     @OA\Property(property="Referencenumber", Validate="Decimal number greater than zero"),
 *     @OA\Property(property="AuthorizationCode", Validate="Any alphanumeric"),
 *     @OA\Property(property="ResponseCode", Validate="“00” or “100” for successful transaction"),
 *     @OA\Property(property="ResponseMessage", Validate="Any alphanumeric"),
 *     @OA\Property(property="CVV2ResponseCode", Validate="Any alphanumeric"),
 *     @OA\Property(property="CVV2ResponseMessage", Validate="Any alphanumeric"),
 *     @OA\Property(property="AVSResponseCode", Validate="Any alphanumeric"),
 *     @OA\Property(property="AVSResponseMessage", Validate="Any alphanumericAny alphanumeric"),
 *     @OA\Property(property="CustomerName", Validate="Alpha character name"),
 *     @OA\Property(property="BillingNameFirst", Validate="Alpha character name"),
 *     @OA\Property(property="BillingNameLast", Validate="Alpha character name"),
 *     @OA\Property(property="BillingAddress", Validate="Any alphanumeric"),
 *     @OA\Property(property="BillingCity", Validate="Any alphanumeric"),
 *     @OA\Property(property="BillingState", Validate="Any alphanumeric"),
 *     @OA\Property(property="BillingZipCode", Validate="5 digit zip code"),
 *     @OA\Property(property="BillingEmail", Validate="string"),
 *     @OA\Property(property="BillingPhone", Validate="Any alphanumeric"),
 *     @OA\Property(property="CustomerID", Validate="Any alphanumeric"),
 *     @OA\Property(property="TransactionType", Validate="Any alphanumeric"),
 *     @OA\Property(property="VoidDate", Validate="Any alphanumeric"),
 *     @OA\Property(property="RefundDate", Validate="Any alphanumeric"),
 *     @OA\Property(property="Message", Validate="Alpha character message"),
 *     @OA\Property(property="Code", Validate="“V1001”"),
 *     @OA\Property(property="Msg", Validate="Alpha character error msg")
 * )
 */

/**
 * @OA\Post(
 *     path="",
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
 * @OA\Schema(
 *     schema="GetNOCListRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "TransactionType"},
 *     @OA\Property(property="TransactionType", type="string"),
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="StartDate", type="MM/DD/YYYY"),
 *     @OA\Property(property="EndDate", type="MM/DD/YYYY")
 *)
 */

/**
 * @OA\Schema(
 *     schema="GetNOCListResponse",
 *     @OA\Property(property="ProducerID", Validate="Integer supplied by TranzPay"),
 *     @OA\Property(property="StartDate", Validate="Date formatted string YYYY-MM-DD"),
 *     @OA\Property(property="EndDate", Validate="Date formatted string YYYY-MM-DD"),
 *     @OA\Property(property="GatewayConnect", Validate="“Y” or “N”"),
 *     @OA\Property(property="ReportDate", Validate="Date formatted string YYYY-MM-DD"),
 *     @OA\Property(property="TransDate", Validate="Date formatted string YYYY-MM-DD"),
 *     @OA\Property(property="AccountName", Validate="Alpha character name"),
 *     @OA\Property(property="TransAmount", Validate="Decimal number greater than zero"),
 *     @OA\Property(property="TransRoute", Validate="9 digit numeric"),
 *     @OA\Property(property="AccountNo", Validate="Last 4 digit numeric"),
 *     @OA\Property(property="AccountType", Validate="Checking or Savings"),
 *     @OA\Property(property="TransType", Validate="27=Debit Checking, 26=Debit Checking Return, 37=Debit Savings, 36=Debit Savings Return"),
 *     @OA\Property(property="TransID", Validate="Original Transcation ID"),
 *     @OA\Property(property="MerchantID", Validate="Original Merchant ID"),
 *     @OA\Property(property="CustomerID", Validate="String Unique"),
 *     @OA\Property(property="ReturnAmount", Validate="Decimal number greater than zero"),
 *     @OA\Property(property="ReasonCode", Validate="Reason for Return"),
 *     @OA\Property(property="ReasonDescription", Validate="Reason for Return"),
 *     @OA\Property(property="Type", Validate="CK=Checking"),
 *     @OA\Property(property="NewAccountNo", Validate="Numeric"),
 *     @OA\Property(property="NewTransRoute", Validate="Numeric")
 * )
 */

/**
 * @OA\Post(
 *     path="GetNOCList",
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
 * @OA\Schema(
 *     schema="GetACHReturnListRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "TransactionType"},
 *     @OA\Property(property="TransactionType", type="string"),
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="StartDate", type="MM/DD/YYYY"),
 *     @OA\Property(property="EndDate", type="MM/DD/YYYY"),
 * )
 */

/**
 * @OA\Schema(
 *     schema="GetACHReturnListResponse",
 *     @OA\Property(property="ProducerID", Validate="Integer supplied by TranzPay"),
 *     @OA\Property(property="StartDate", Validate="Date formatted string YYYY-MM-DD"),
 *     @OA\Property(property="EndDate", Validate="Date formatted string YYYY-MM-DD"),
 *     @OA\Property(property="GatewayConnect", Validate="“Y” or “N”"),
 *     @OA\Property(property="ReportDate", Validate="Date formatted string YYYY-MM-DD"),
 *     @OA\Property(property="TransDate", Validate="Date formatted string YYYY-MM-DD"),
 *     @OA\Property(property="AccountName", Validate="Alpha character name"),
 *     @OA\Property(property="TransAmount", Validate="Decimal number greater than zero"),
 *     @OA\Property(property="TransRoute", Validate="9 digit numeric"),
 *     @OA\Property(property="AccountNo", Validate="Last 4 digit numeric"),
 *     @OA\Property(property="AccountType", Validate="Checking or Savings"),
 *     @OA\Property(property="TransType", Validate="27=Debit Checking, 26=Debit Checking Return, 37=Debit Savings, 36=Debit Savings Return"),
 *     @OA\Property(property="TransID", Validate="Original Transcation ID"),
 *     @OA\Property(property="MerchantID", Validate="Original Merchant ID"),
 *     @OA\Property(property="CustomerID", Validate="String Unique"),
 *     @OA\Property(property="ReturnAmount", Validate="Decimal number greater than zero"),
 *     @OA\Property(property="ReasonCode", Validate="Reason for Return"),
 *     @OA\Property(property="ReasonDescription", Validate="Reason for Return"),
 *     @OA\Property(property="Type", Validate="CK=Checking")
 * )
 */

/**
 * @OA\Post(
 *     path="GetACHReturnList",
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
