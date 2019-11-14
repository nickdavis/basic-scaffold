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

use NickDavis\BasicScaffold\Infrastructure\Plugin;

/**
 * The plugin factory is responsible for instantiating the plugin and returning
 * that instance.
 *
 * It can decide whether to return a shared or a fresh instance as needed.
 *
 * To read more about why this is preferable to a Singleton,
 *
 * @see https://www.alainschlesser.com/singletons-shared-instances/
 */
final class BasicScaffoldPluginFactory {

	/**
	 * Create and return an instance of the plugin.
	 *
	 * This always returns a shared instance. This way, outside code can always
	 * get access to the object instance of the plugin.
	 *
	 * @return Plugin Plugin instance.
	 */
	public static function create(): Plugin {
		static $plugin = null;

		if ( null === $plugin ) {
			$plugin = new BasicScaffoldPlugin();
		}

		return $plugin;
	}
}
