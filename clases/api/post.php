/**
 * @OA\Post(
 *     path="/api/transaction.php",
 *     summary="Tranzpay API testing of Transactions",
 *     description="Process various ACH transactions such as ACHCharge, ACHVOID, ACHRefund, etc.",
 *     tags={"ACH Method"},
 *     @OA\RequestBody(
 *         required=true,
 *         description="Transaction details",
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(
 *                 oneOf={
 *                     @OA\Schema(ref="#/components/schemas/GetACHReturnListRequest"),
 *                     @OA\Schema(ref="#/components/schemas/GetNOCListRequest"),
 *                     @OA\Schema(ref="#/components/schemas/GetTransactionACHRequest"),
 *                     @OA\Schema(ref="#/components/schemas/ACHCreditRequest"),
 *                     @OA\Schema(ref="#/components/schemas/ACHChargeRequest"),
 *                     @OA\Schema(ref="#/components/schemas/ACHVOIDRequest"),
 *                     @OA\Schema(ref="#/components/schemas/ACHRefundRequest")
 *                 }
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Successful operation",
 *         @OA\JsonContent(
 *             oneOf={
 *                 @OA\Schema(ref="#/components/schemas/GetACHReturnListResponse"),
 *                 @OA\Schema(ref="#/components/schemas/GetNOCListResponse"),
 *                 @OA\Schema(ref="#/components/schemas/GetTransactionACHResponse"),
 *                 @OA\Schema(ref="#/components/schemas/ACHCreditResponse"),
 *                 @OA\Schema(ref="#/components/schemas/ACHChargeResponse"),
 *                 @OA\Schema(ref="#/components/schemas/ACHVOIDResponse"),
 *                 @OA\Schema(ref="#/components/schemas/ACHRefundResponse")
 *             }
 *         )
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
