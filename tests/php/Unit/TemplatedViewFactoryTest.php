<?php

namespace NickDavis\BasicScaffold\Tests\Unit;

use NickDavis\BasicScaffold\Infrastructure\View\TemplatedViewFactory;
use NickDavis\BasicScaffold\Infrastructure\ViewFactory;

final class TemplatedViewFactoryTest extends TestCase {

	public function test_it_can_be_instantiated(): void {
		$factory = new TemplatedViewFactory();

		$this->assertInstanceOf( TemplatedViewFactory::class, $factory );
	}

	public function test_it_implements_the_interface(): void {
		$factory = new TemplatedViewFactory();

		$this->assertInstanceOf( ViewFactory::class, $factory );
	}
}
