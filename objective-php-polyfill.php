<?php

$missingClasses = [
    'ObjectivePHP\Gateway\Entity\EntityInterface',
    'ObjectivePHP\Gateway\Entity\Entity',
    'ObjectivePHP\Gateway\Hydrator\DenormalizedDataExtractorInterface'
];

foreach ($missingClasses as $missingClass) {
    if (!interface_exists($missingClass) && !class_exists($missingClass)) {
        class_alias('Fei\Entities\\' . $missingClass, $missingClass);
    }
}
