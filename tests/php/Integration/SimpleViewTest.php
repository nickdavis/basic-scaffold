<?php

namespace NickDavis\BasicScaffold\Tests\Integration;

use NickDavis\BasicScaffold\Infrastructure\View\SimpleView;
use NickDavis\BasicScaffold\Infrastructure\View\SimpleViewFactory;
use NickDavis\BasicScaffold\Tests\ViewHelper;

final class SimpleViewTest extends TestCase {

	public function test_it_loads_partials_across_overrides(): void {
		$view = new SimpleView(
			ViewHelper::VIEWS_FOLDER . 'static-view',
			new SimpleViewFactory()
		);

		$this->assertStringStartsWith(
			'<p>Rendering works.</p>',
			$view->render()
		);
	}
}
