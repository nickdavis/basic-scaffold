<?php

namespace NickDavis\BasicScaffold\Tests\Integration;

use NickDavis\BasicScaffold\Infrastructure\View;
use NickDavis\BasicScaffold\Infrastructure\View\SimpleView;
use NickDavis\BasicScaffold\Infrastructure\View\SimpleViewFactory;
use NickDavis\BasicScaffold\Tests\ViewHelper;

final class SimpleViewFactoryTest extends TestCase {

	public function test_it_can_create_views(): void {
		$factory = new SimpleViewFactory();

		$view = $factory->create( ViewHelper::VIEWS_FOLDER . 'static-view' );
		$this->assertInstanceOf( SimpleView::class, $view );
	}

	public function test_created_views_implement_the_interface(): void {
		$factory = new SimpleViewFactory();

		$view = $factory->create( ViewHelper::VIEWS_FOLDER . 'static-view' );
		$this->assertInstanceOf( View::class, $view );
	}
}
