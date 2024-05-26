<?php

declare(strict_types=1);

namespace App;

use Nette;


final class AdminPresenter extends Nette\Application\UI\Presenter
{
    public function startup(): void
    {
        parent::startup();
        if(!$this->getUser()->isLoggedIn() && $this->getAction() !== "signIn" ) {
            $this->redirect('signIn');
            $this->terminate();
        }
    }
    public function actionSignIn(): void
    {
    }
    public function actionDashboard(): void
    {

    }
}
