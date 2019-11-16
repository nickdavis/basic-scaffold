<?php declare( strict_types=1 );

/**
 * Basic Scaffold.
 *
 * @package   NickDavis\BasicScaffold
 * @author    Nick Davis <nick@iamnickdavis.com>
 * @license   MIT
 * @link      https://iamnickdavis.com/
 * @copyright 2019 Nick Davis
 */

namespace NickDavis\BasicScaffold;

/**
 * Interface Entity.
 *
 * @package nickdavis/basic-scaffold
 */
interface Entity {

	/**
	 * Return the entity ID.
	 *
	 * @return int Entity ID.
	 */
	public function get_id();
}
