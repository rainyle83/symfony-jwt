<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'lexik_jwt_authentication.extractor.authorization_header_extractor.api' shared service.

include_once $this->targetDirs[3].'\\vendor\\lexik\\jwt-authentication-bundle\\TokenExtractor\\TokenExtractorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\lexik\\jwt-authentication-bundle\\TokenExtractor\\AuthorizationHeaderTokenExtractor.php';

return $this->services['lexik_jwt_authentication.extractor.authorization_header_extractor.api'] = new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor('Bearer', 'Authorization');
