<?php

namespace AppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApiTestCaseBase extends Bundle
{
    // tests/ApiTestCaseBase.php
    protected function createUser($userName, $password)
    {
        $userManager = $this->getService('fos_user.user_manager');
        $user = $userManager->createUser();
        $user->setEnabled(true);
        $user->setPlainPassword($password);
        $user->setUsername($userName);
        $user->setEmail('email@email.com');
        $userManager->updateUser($user);

        return $user;
    }
}
