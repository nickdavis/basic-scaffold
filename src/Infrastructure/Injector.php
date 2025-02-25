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
 * The dependency injector should be the only piece of code doing actual
 * instantiations, with the following exceptions:
 *  - Factories can instantiate directly.
 *  - Value objects should be instantiated directly where they are being used.
 *
 * Through technical features like "binding" interfaces to classes or
 * "auto-wiring" to resolve all dependency of a class to be instantiated
 * automatically, the dependency injector allows for the largest part of the
 * code to adhere to the "Code against Interfaces, not Implementations"
 * principle.
 *
 * Finally, the dependency injector should be the only one to decide what
 * objects to "share" (always handing out the same instance) or not to share
 * (always returning a fresh new instance on each subsequent call). This
 * effectively gets rid of the dreaded Singletons.
 */
interface Injector extends Service {

	/**
	 * Make an object instance out of an interface or class.
	 *
	 * @param string $interface_or_class Interface or class to make an object
	 *                                   instance out of.
	 * @param array  $arguments          Optional. Additional arguments to pass
	 *                                   to the constructor. Defaults to an
	 *                                   empty array.
	 * @return object Instantiated object.
	 */
	public function make( string $interface_or_class, array $arguments = [] ): object;

	/**
	 * Bind a given interface or class to an implementation.
	 *
	 * Note: The implementation can be an interface as well, as long as it can
	 * be resolved to an instantiatable class at runtime.
	 *
	 * @param string $from Interface or class to bind an implementation to.
	 * @param string $to   Interface or class that provides the implementation.
	 * @return Injector
	 */
	public function bind( string $from, string $to ): Injector;

	/**
	 * Bind an argument for a class to a specific value.
	 *
	 * @param string $interface_or_class Interface or class to bind an argument
	 *                                   for.
	 * @param string $argument_name      Argument name to bind a value to.
	 * @param mixed  $value              Value to bind the argument to.
	 *
	 * @return Injector
	 */
	public function bind_argument(
		string $interface_or_class,
		string $argument_name,
		$value
	): Injector;

	/**
	 * Always reuse and share the same instance for the provided interface or
	 * class.
	 *
	 * @param string $interface_or_class Interface or class to reuse.
	 * @return Injector
	 */
	public function share( string $interface_or_class ): Injector;

	/**
	 * Delegate instantiation of an interface or class to a callable.
	 *
	 * @param string   $interface_or_class Interface or class to delegate the
	 *                                     instantiation of.
	 * @param callable $callable           Callable to use for instantiation.
	 * @return Injector
	 */
	public function delegate( string $interface_or_class, callable $callable ): Injector;
}
