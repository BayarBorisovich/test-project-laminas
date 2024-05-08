<?php

declare(strict_types=1);

namespace Application\Controller\Auth;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class RegisterController extends AbstractActionController
{
    public function registerAction(): ViewModel
    {
        return new ViewModel();
    }
}
