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

namespace NickDavis\BasicScaffold\Exception;

use Throwable;

/**
 * This is a "marker interface" to mark all the exception that come with this
 * plugin with this one interface.
 *
 * This allows you to not only catch individual exceptions, but also catch "all
 * exceptions from plugin XY".
 */
interface BasicScaffoldException extends Throwable {

}
