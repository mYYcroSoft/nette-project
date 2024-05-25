<?php

declare(strict_types=1);

namespace App\UI\Home;

use Nette;


final class HomePresenter extends Nette\Application\UI\Presenter
{
    public function __construct(
		private Nette\Database\Explorer $database,
	) {
		$router = new Nette\Routing\RouteList;
		$router->addRoute("test");
	}

	public function renderDefault(): void
	{
		$this->template->posts = $this->database
			->table('posts')
			->where('name', 'Article Two')
			->order('created_at DESC')
			->limit(5);
	}

}
