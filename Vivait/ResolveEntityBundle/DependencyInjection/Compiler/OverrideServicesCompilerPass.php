<?php

namespace Vivait\ResolveEntityBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OverrideServicesCompilerPass implements CompilerPassInterface {
	public function process(ContainerBuilder $container) {
		try {
			$definition = $container->getDefinition('sensio_framework_extra.converter.doctrine.orm');
			$definition->setClass('Vivait\ResolveEntityBundle\ParamConverter\ResolveParamConverter');
		}
		catch (InvalidArgumentException $e) {

		}
	}
} 