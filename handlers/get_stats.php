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

return function ($request, $response)
{

	$id = $request->getAttribute("appInfo")["args"]["id"];
	$gets = $request->getQueryParams();
	$dbs = $request->getAttribute("databases");
	$db = $dbs->getPlugins()["sqlite"];

	$sql = getSql($id);
	$cmd = $db->createCommand($sql);
	$data = $db->getData($cmd);
	$resultCount = count($data);
	$totalCount = count($data);

	$request = $request->withAttribute("data", $data);
	$request = $request->withAttribute("resultCount", $resultCount);
	$request = $request->withAttribute("totalCount", $totalCount);

	return $request;

};
