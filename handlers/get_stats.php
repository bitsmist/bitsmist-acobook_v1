<?php

// ============================================================================
/**
 * Functions
 */
// ============================================================================

function getSql($title)
{

	$sql = "";

	switch ($title) {
	case "monthly":
		$target = date("Ym", strtotime("-9 months")) . "01";
		//$sql = "SELECT SUBSTR(payment_dt, 0, 7) YM, category_id CATEGORY, SUM(total_prc) TOTAL FROM `transaction` WHERE from_account_id IS NOT NULL AND to_account_id IS NULL AND payment_dt >= '". $target . "' GROUP BY SUBSTR(payment_dt, 0, 7), category_id ORDER BY SUBSTR(payment_dt, 0, 7) DESC, category_id";
		$sql = "SELECT SUBSTR(payment_dt, 0, 7) YM, category_id CATEGORY, SUM(total_prc) TOTAL FROM `transaction` WHERE from_account_id IS NOT NULL AND to_account_id IS NULL GROUP BY SUBSTR(payment_dt, 0, 7), category_id ORDER BY SUBSTR(payment_dt, 0, 7) DESC, category_id";
		break;
	}

	return $sql;

}

// ============================================================================
/**
 * Handler
 */
// ============================================================================
//
return function($request, $handler)
{

	$id = $request->getAttribute("routeInfo")["args"]["id"] ?? "mothly";
	$gets = $request->getQueryParams();
	//$dbs = $request->getAttribute("services")["db"];
	//$db = $dbs->getPlugins()["sqlite"];
	$db = $request->getAttribute("services")["db"]["sqlite"];

	$sql = getSql($id);
	$cmd = $db->createCommand($sql);
	$data = $db->getData($cmd);
	$resultCount = count($data);
	$totalCount = count($data);

	$request = $request->withAttribute("data", $data);
	$request = $request->withAttribute("resultCount", $resultCount);
	$request = $request->withAttribute("totalCount", $totalCount);

	return $handler->handle($request);

};
