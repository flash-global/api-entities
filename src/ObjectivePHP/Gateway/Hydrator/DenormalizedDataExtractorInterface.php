<?php

namespace Fei\Entities\ObjectivePHP\Gateway\Hydrator;


interface DenormalizedDataExtractorInterface
{
    public function extractDenormalized($entity);
    
    public function denormalizeData(array $data): array;
}
