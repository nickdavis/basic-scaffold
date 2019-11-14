<?php declare( strict_types=1 );

/**
 * Test Bank Plugin.
 *
 * @package   NickDavis\BasicScaffold
 * @author    Nick Davis <nick@iamnickdavis.com>
 * @license   MIT
 * @link      https://cmaexamacademy.com
 * @copyright 2019 Nick Davis
 */

namespace NickDavis\BasicScaffold;

/**
 * Interface Entity.
 *
 * @package nickdavis/cma-testbank
 */
interface Entity {

	/**
	 * Return the entity ID.
	 *
	 * @return int Entity ID.
	 */
	public function get_ID();
}
