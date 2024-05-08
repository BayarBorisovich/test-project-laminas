<?php

declare(strict_types=1);

namespace Application\Controller\Auth;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class LoginController extends AbstractActionController
{
    public function loginAction(): ViewModel
    {
        return new ViewModel();
    }
}
