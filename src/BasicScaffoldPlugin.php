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

use NickDavis\BasicScaffold\Infrastructure\{
	ServiceBasedPlugin,
	View\TemplatedViewFactory,
	ViewFactory
};

/**
 * The BasicScaffoldPlugin class is the composition root of the plugin.
 *
 * In here we assemble our infrastructure, configure it for the specific use
 * case the plugin is meant to solve and then kick off the services so that they
 * can hook themselves into the WordPress lifecycle.
 */
final class BasicScaffoldPlugin extends ServiceBasedPlugin {

	/*--------------------------------------------------------------------------
	 *-- 1. Define the services that make up this plugin.                     --
	 *------------------------------------------------------------------------*/

	/*
	 * The "plugin" is only a tool to hook arbitrary code up to the WordPress
	 * execution flow.
	 *
	 * The main structure we use to modularize our code is "services". These are
	 * what makes up the actual plugin, and they provide self-contained pieces
	 * of code that can work independently.
	 */

	/**
	 * Get the list of services to register.
	 *
	 * The services array contains a map of <identifier> => <service class name>
	 * associations.
	 *
	 * @return array<string> Associative array of identifiers mapped to fully
	 *                       qualified class names.
	 */
	protected function get_service_classes(): array {
		return [
			// Add your service definitions here.
//			self::SAMPLE_BACKEND_SERVICE_ID => SampleSubsystem\SampleBackendService::class,
//			self::SAMPLE_LOOP_SERVICE_ID    => SampleSubsystem\SampleLoopService::class,
		];
	}

	/*--------------------------------------------------------------------------
	 *-- 2. Configure the injector so it knows how to assemble them.          --
	 *------------------------------------------------------------------------*/

	/**
	 * Get the bindings for the dependency injector.
	 *
	 * The bindings array contains a map of <interface> => <implementation>
	 * mappings, both of which should be fully qualified class names (FQCNs).
	 *
	 * The <interface> does not need to be the actual PHP `interface` language
	 * construct, it can be a `class` as well.
	 *
	 * Whenever you ask the injector to "make()" an <interface>, it will resolve
	 * these mappings and return an instance of the final <class> it found.
	 *
	 * @return array<string> Associative array of fully qualified class names.
	 */
	protected function get_bindings(): array {
		return [
			// Map the ViewFactory interface to a concrete implementation.
			ViewFactory::class => TemplatedViewFactory::class,

			// Add your bindings here.
		];
	}

	/**
	 * Get the argument bindings for the dependency injector.
	 *
	 * The arguments array contains a map of <class> => <associative array of
	 * arguments> mappings.
	 *
	 * The array is provided in the form <argument name> => <argument value>.
	 *
	 * @return array<array> Associative array of arrays mapping argument names
	 *                      to argument values.
	 */
	protected function get_arguments(): array {
		return [
			// Example - add a scalar value to an argument for SampleService:
			// SampleService::class => [ 'argument_name' => 'value' ],

			// Add your argument mappings here.
		];
	}

	/**
	 * Get the shared instances for the dependency injector.
	 *
	 * The shared instances array contains a list of FQCNs that are meant to be
	 * reused. For multiple "make()" requests, the injector will return the same
	 * instance reference for these, instead of always returning a new one.
	 *
	 * This effectively turns these FQCNs into a "singleton", without incurring
	 * all the drawbacks of the Singleton design anti-pattern.
	 *
	 * @return array<string> Array of fully qualified class names.
	 */
	protected function get_shared_instances(): array {
		return [
			// Example - make SampleService be shared amongst instantiations:
			// SampleService::class

			// Add your shared instances here.
		];
	}

	/**
	 * Get the delegations for the dependency injector.
	 *
	 * The delegations array contains a map of <class> => <callable>
	 * mappings.
	 *
	 * The <callable> is basically a factory to provide custom instantiation
	 * logic for the given <class>.
	 *
	 * @return array<callable> Associative array of callables.
	 */
	protected function get_delegations(): array {
		return [
			// Add a factory for instantiating WP_Post objects:
			\WP_Post::class => function () { return \get_post( \get_the_ID() ); }

			// Add your delegations here.
		];
	}

	/*--------------------------------------------------------------------------
	 *-- 3. Define prefixes and identifiers for outside access.               --
	 *------------------------------------------------------------------------*/

	/*
	 * Prefixes to use.
	 *
	 * These are provided so that if multiple plugins use the same boilerplate
	 * code, there hooks and service identifiers are scoped and don't clash.
	 */
	protected const HOOK_PREFIX    = 'nick-davis.basic-scaffold.';
	protected const SERVICE_PREFIX = 'nick-davis.basic-scaffold.';

	/*
	 * Service identifiers we know about.
	 *
	 * These can be used from outside code as well to directly refer to a
	 * service when talking to the service container.
	 */
	public const VIEW_FACTORY_ID           = self::SERVICE_PREFIX . 'view-factory';
//	public const SAMPLE_BACKEND_SERVICE_ID = self::SERVICE_PREFIX . 'sample-subsystem.sample-backend-service';
//	public const SAMPLE_LOOP_SERVICE_ID    = self::SERVICE_PREFIX . 'sample-subsystem.sample-loop-service';
}
