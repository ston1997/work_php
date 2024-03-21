<?php
require 'vendor/autoload.php';

use OpenApi\Annotations as OA;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


use OpenApi\Serializer;

$serializer = new Serializer();
$openapi = $serializer->deserialize($jsonstring, 'OpenApi\Annotations\OpenApi');
echo $openapi->toJson();

/**
 * @OA\Schema(
 *     schema="AddPaymentPlanRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "CustomerID", "BillingCycles", "ProductID","Amount", "Type", "RecurNote", "StartDate","Occurences", "EndDate"},
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="CustomerID", type="number"),
 *     @OA\Property(property="TransactionType", type="string", enum={"AddPaymentPlan"}),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="BillingCycles", type="string"),
 *     @OA\Property(property="ProductID", type="string"),
 *     @OA\Property(property="Amount", type="number"),
 *     @OA\Property(property="Type", type="string"),
 *     @OA\Property(property="RecurNote", type="string"),
 *     @OA\Property(property="Interval", type="number"),
 *     @OA\Property(property="StartDate", type="string"),
 *     @OA\Property(property="Occurences", type="number"),
 *     @OA\Property(property="EndDate", type="string")
 * )
 */


/**
 * @OA\Schema(
 *     schema="AddPaymentPlanResponse",
 *     @OA\Property(property="ProducerID", type="string"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="TransactionType", type="string"),
 *     @OA\Property(property="RecurringPlanID", type="string"),
 *     @OA\Property(property="CustomerID", type="string"),
 *     @OA\Property(property="RecurNote", type="string"),
 *     @OA\Property(property="Active", type="string"),
 *     @OA\Property(property="Amount", type="string"),
 *     @OA\Property(property="BillingCycles", type="string"),
 *     @OA\Property(property="LastPaymentDate", type="string"),
 *     @OA\Property(property="NextChargeDate", type="string"),
 *     @OA\Property(property="CreationDate", type="string"),
 *     @OA\Property(property="PaymentType", type="string"),
 *     @OA\Property(property="Type", type="string")
 * )
 */

/**
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=AddPaymentPlan",
 *     summary="",
 *     description="AddPaymentPlan",
 *     tags={"Subscriptions"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/AddPaymentPlanRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/AddPaymentPlanResponse")
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
 *     schema="UpdatePaymentPlanRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "CustomerID", "BillingCycles", "ProductID","Amount", "Type", "RecurNote", "StartDate","Occurences", "EndDate"},
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="CustomerID", type="number"),
 *     @OA\Property(property="TransactionType", type="string", enum={"UpdatePaymentPlan"}),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="BillingCycles", type="string"),
 *     @OA\Property(property="ProductID", type="string"),
 *     @OA\Property(property="Amount", type="number"),
 *     @OA\Property(property="Type", type="string"),
 *     @OA\Property(property="RecurNote", type="string"),
 *     @OA\Property(property="Interval", type="number"),
 *     @OA\Property(property="StartDate", type="string"),
 *     @OA\Property(property="Occurences", type="number"),
 *     @OA\Property(property="EndDate", type="string")
 * )
 */


/**
 * @OA\Schema(
 *     schema="UpdatePaymentPlanResponse",
 *     @OA\Property(property="ProducerID", type="string"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="TransactionType", type="string"),
 *     @OA\Property(property="RecurringPlanID", type="string"),
 *     @OA\Property(property="CustomerID", type="string"),
 *     @OA\Property(property="RecurNote", type="string"),
 *     @OA\Property(property="Active", type="string"),
 *     @OA\Property(property="Amount", type="string"),
 *     @OA\Property(property="BillingCycles", type="string"),
 *     @OA\Property(property="LastPaymentDate", type="string"),
 *     @OA\Property(property="NextChargeDate", type="string"),
 *     @OA\Property(property="CreationDate", type="string"),
 *     @OA\Property(property="PaymentType", type="string"),
 *     @OA\Property(property="Type", type="string")
 * )
 */

/**
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=UpdatePaymentPlan",
 *     summary="",
 *     description="UpdatePaymentPlan",
 *     tags={"Subscriptions"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/UpdatePaymentPlanRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/UpdatePaymentPlanResponse")
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
 *     schema="CancelPaymentPlanRequest",
 *     required={"TransactionType", "ProducerID", "UserName", "Password", "RecurringPlanID"},
 *     @OA\Property(property="ProducerID", type="number"),
 *     @OA\Property(property="TransactionType", type="string", enum={"CancelPaymentPlan"}),
 *     @OA\Property(property="UserName", type="string"),
 *     @OA\Property(property="Password", type="string"),
 *     @OA\Property(property="RecurringPlanID", type="number")
 * )
 */

/**
 * @OA\Schema(
 *     schema="CancelPaymentPlanResponse",
 *     @OA\Property(property="ProducerID", type="string"),
 *     @OA\Property(property="GatewayConnect", type="string"),
 *     @OA\Property(property="RecurringPlanID", type="string"),
 *     @OA\Property(property="Active", type="string")
 * )
 */

/**
 * @OA\Post(
 *     path="/api/transaction.php?transactionType=CancelPaymentPlan",
 *     summary="",
 *     description="CancelPaymentPlan",
 *     tags={"Subscriptions"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/CancelPaymentPlanRequest")
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(ref="#/components/schemas/CancelPaymentPlanResponse")
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
