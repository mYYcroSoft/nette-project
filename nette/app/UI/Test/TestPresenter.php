<?php

declare(strict_types=1);

namespace App\UI\Test;

use Nette;


final class TestPresenter extends Nette\Application\UI\Presenter
{
    public function __construct(
		//private Nette\Database\Explorer $database,
	) {
	
	}

	public function renderDefault(): void
	{
		$this->template->posts = "AHOJ";
	}

}
