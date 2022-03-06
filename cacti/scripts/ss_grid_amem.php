<?php
// $Id$
/*
 +-------------------------------------------------------------------------+
 | Copyright IBM Corp. 2006, 2022                                          |
 |                                                                         |
 | Licensed under the Apache License, Version 2.0 (the "License");         |
 | you may not use this file except in compliance with the License.        |
 | You may obtain a copy of the License at                                 |
 |                                                                         |
 | http://www.apache.org/licenses/LICENSE-2.0                              |
 |                                                                         |
 | Unless required by applicable law or agreed to in writing, software     |
 | distributed under the License is distributed on an "AS IS" BASIS,       |
 | WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.|
 | See the License for the specific language governing permissions and     |
 | limitations under the License.                                          |
 +-------------------------------------------------------------------------+
*/

error_reporting(0);

if (!isset($called_by_script_server)) {
	include(dirname(__FILE__) . '/../include/cli_check.php');
	include_once(dirname(__FILE__) . '/../lib/functions.php');
	array_shift($_SERVER['argv']);
	print call_user_func_array('ss_grid_amem', $_SERVER['argv']);
}

function ss_grid_amem($hostname = '', $clusterid = 0, $summary = 'no') {
	if ($hostname == '' || $hostname == 'localhost' || $summary == 'yes') {
		if ($clusterid == 0) {
			$job_stats = db_fetch_row("SELECT
				AVG(mem) as a_mem,
				AVG(swp) as a_swp
				FROM grid_load
				WHERE (status NOT LIKE 'U%')");
		} else {
			$job_stats = db_fetch_row_prepared("SELECT
				AVG(mem) as a_mem,
				AVG(swp) as a_swp
				FROM grid_load
				WHERE (status NOT LIKE 'U%')
				AND clusterid = ?
				GROUP BY clusterid", array($clusterid));
		}
	}else{
		if ($clusterid == 0) {
			$job_stats = db_fetch_row_prepared("SELECT
				AVG(mem) as a_mem,
				AVG(swp) as a_swp
				FROM grid_load
				WHERE (status NOT LIKE 'U%')
				AND host = ?", array($hostname));
		} else {
			$job_stats = db_fetch_row_prepared("SELECT
				mem as a_mem,
				swp as a_swp
				FROM grid_load
				WHERE (status NOT LIKE 'U%')
				AND clusterid = ?
				AND host = ?", array($clusterid, $hostname));
		}
	}
	if (empty($job_stats['a_mem'])) $job_stats['a_mem'] = 0;
	if (empty($job_stats['a_swp'])) $job_stats['a_swp'] = 0;

	$result =
		'mem:'      . $job_stats['a_mem'] . ' ' .
		'swp:'      . $job_stats['a_swp'];

	return $result;
}
