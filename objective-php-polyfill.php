<?php

if (!interface_exists('ObjectivePHP\Gateway\Entity\EntityInterface')) {
    class_alias('Fei\Entities\ObjectivePHP\Gateway\Entity\EntityInterface', 'ObjectivePHP\Gateway\Entity\EntityInterface');
}

if (!interface_exists('ObjectivePHP\Gateway\Hydrator\DenormalizedDataExtractorInterface')) {
    class_alias('Fei\Entities\ObjectivePHP\Gateway\Hydrator\DenormalizedDataExtractorInterface', 'ObjectivePHP\Gateway\Hydrator\DenormalizedDataExtractorInterface');
}
