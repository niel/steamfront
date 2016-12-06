<?php
/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program (see LICENSE.txt in the base directory.  If
 * not, see:
 *
 * @link      <http://www.gnu.org/licenses/>.
 * @author    b3rs3rk
 * @copyright 2016
 */

include (__DIR__ . '/Includes.php');

$client = new b3rs3rk\steamfront\Main();

$testAppID = isset($argv[1]) && is_numeric($argv[1]) ? $argv[1] : 30;

var_dump($client->get($client::STEAM_STORE_ROOT, $client::DETAILS_PATH . $testAppID));

/*

$test = $client->getAppDetails($testAppID);

if ($test instanceof b3rs3rk\steamfront\data\App) {
	if (isset($test)) {
		var_dump($test);
		exit(0);
	} else {
		exit(1);
	}
}
*/