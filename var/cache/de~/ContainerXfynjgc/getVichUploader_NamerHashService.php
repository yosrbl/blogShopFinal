<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'vich_uploader.namer_hash' shared service.

include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\Naming\\NamerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\Naming\\ConfigurableInterface.php';
include_once $this->targetDirs[3].'\\vendor\\vich\\uploader-bundle\\Naming\\HashNamer.php';

return $this->services['vich_uploader.namer_hash'] = new \Vich\UploaderBundle\Naming\HashNamer();
