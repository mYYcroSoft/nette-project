<?php 

namespace App\UI\Test;

use Nette;

class TestPresenter extends Nette\Application\UI\Presenter
{
    private $name;
    private $id;

    public function actionDefault($name = null, $id = null): void
    {

        $this->name = $name ?? $this->getParameter('name');
        $this->id = $id ?? $this->getParameter('id');
     //    var_dump($this->name);
    }

    public function renderDefault(): void
    {

        $this->template->name = $this->name;
        $this->template->id = $this->id;
    }
}