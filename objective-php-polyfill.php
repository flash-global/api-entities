<?php

$missingClasses = [
    'ObjectivePHP\Primitives\Exception',
    'ObjectivePHP\Primitives\PrimitiveInterface',
    'ObjectivePHP\Primitives\AbstractPrimitive',
    'ObjectivePHP\Primitives\String\Camel',
    'ObjectivePHP\Primitives\String\Snake',
    'ObjectivePHP\Primitives\String\Str',
    'ObjectivePHP\Primitives\Collection\Collection',
    'ObjectivePHP\Primitives\Collection\Collection\Normalizer\ObjectNormalizer',
    'ObjectivePHP\Primitives\Collection\Collection\Normalizer\PrimitiveNormalizer',
    'ObjectivePHP\Gateway\Entity\EntityInterface',
    'ObjectivePHP\Gateway\Entity\Entity',
    'ObjectivePHP\Gateway\Hydrator\DenormalizedDataExtractorInterface'
];

foreach ($missingClasses as $missingClass) {
    if (!interface_exists($missingClass) && !class_exists($missingClass)) {
        class_alias('Fei\Entities\\' . $missingClass, $missingClass);
    }
}
