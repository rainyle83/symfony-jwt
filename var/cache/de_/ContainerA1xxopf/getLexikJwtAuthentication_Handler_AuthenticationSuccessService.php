<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'lexik_jwt_authentication.handler.authentication_success' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\Authentication\\AuthenticationSuccessHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\lexik\\jwt-authentication-bundle\\Security\\Http\\Authentication\\AuthenticationSuccessHandler.php';

return $this->services['lexik_jwt_authentication.handler.authentication_success'] = new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler(${($_ = isset($this->services['lexik_jwt_authentication.jwt_manager']) ? $this->services['lexik_jwt_authentication.jwt_manager'] : $this->load('getLexikJwtAuthentication_JwtManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});
