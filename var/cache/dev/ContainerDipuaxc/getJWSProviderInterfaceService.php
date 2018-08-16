<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\JWSProviderInterface' shared service.

include_once $this->targetDirs[3].'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\JWSProvider\\JWSProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\JWSProvider\\LcobucciJWSProvider.php';
include_once $this->targetDirs[3].'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\KeyLoader\\KeyLoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\KeyLoader\\AbstractKeyLoader.php';
include_once $this->targetDirs[3].'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\KeyLoader\\KeyDumperInterface.php';
include_once $this->targetDirs[3].'\\vendor\\lexik\\jwt-authentication-bundle\\Services\\KeyLoader\\RawKeyLoader.php';

return $this->services['Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\JWSProviderInterface'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider(${($_ = isset($this->services['lexik_jwt_authentication.key_loader']) ? $this->services['lexik_jwt_authentication.key_loader'] : $this->services['lexik_jwt_authentication.key_loader'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader(($this->targetDirs[3].'\\app/../var/jwt/private.pem'), ($this->targetDirs[3].'\\app/../var/jwt/public.pem'), 'happyapi')) && false ?: '_'}, 'openssl', 'RS256', 3600, 0);
