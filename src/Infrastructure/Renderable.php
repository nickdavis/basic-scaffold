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

namespace NickDavis\BasicScaffold\Infrastructure;

/**
 * Something that can be rendered.
 *
 * This can be used for views, obviously, but could just as well be used for
 * other concepts like blocks or shortcodes, value objects, ...
 */
interface Renderable {

	/**
	 * Render the renderable.
	 *
	 * @param array $context Optional. Contextual information to use while
	 *                       rendering. Defaults to an empty array.
	 * @return string Rendered result.
	 */
	public function render( array $context = [] ): string;
}
