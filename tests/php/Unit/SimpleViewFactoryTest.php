<?php

namespace NickDavis\BasicScaffold\Tests\Unit;

use NickDavis\BasicScaffold\Infrastructure\View\SimpleViewFactory;
use NickDavis\BasicScaffold\Infrastructure\ViewFactory;

final class SimpleViewFactoryTest extends TestCase {

	public function test_it_can_be_instantiated(): void {
		$factory = new SimpleViewFactory();

		$this->assertInstanceOf( SimpleViewFactory::class, $factory );
	}

	public function test_it_implements_the_interface(): void {
		$factory = new SimpleViewFactory();

		$this->assertInstanceOf( ViewFactory::class, $factory );
	}
}
