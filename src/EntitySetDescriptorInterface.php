<?php
/**
 * Created by PhpStorm.
 * User: gauthier
 * Date: 15/06/2017
 * Time: 11:01
 */

namespace Fei\Entity;


/**
 * Interface EntitySetDescriptorInterface
 *
 * @package Fei\Gateway
 */
interface EntitySetDescriptorInterface
{
    
    const OP_EQUALS     = '=';
    const OP_CONTAINS   = 'contains';
    const OP_GT         = '>';
    const OP_GTOE       = '<';
    const OP_LT         = '<';
    const OP_LTOE       = '<=';
    const OP_BINARY_AND = '&';
    const OP_BINARY_OR  = '|';
    const OP_IN         = 'in';
    
    const SORT_ASC  = 'asc';
    const SORT_DESC = 'desc';
    
    const DEFAULT_PAGE_SIZE = 20;
    
    /**
     * @param        $property
     * @param        $value
     * @param string $operator
     *
     * @return $this
     */
    public function addFilter($property, $value, $operator = self::OP_EQUALS);
    
    /**
     * @param int $page
     * @param int $pageSize
     *
     * @return $this
     */
    public function paginate($page = 1, $pageSize = self::DEFAULT_PAGE_SIZE);
    
    /**
     * @param     $property
     * @param int $direction
     *
     * @return $this
     */
    public function sort($property, $direction = SORT_ASC);
    
    /**
     * @param $property
     *
     * @return $this
     */
    public function groupBy($property);
    
    /**
     * @param $property
     * @param $aggregationType
     *
     * @return mixed
     */
    public function aggregate($property, $aggregationType);
    
    /**
     * @param string $collectionName
     *
     * @return $this
     */
    public function collection(string $collectionName);
    
    /**
     * @param $size
     *
     * @return $this
     */
    public function setSize($size);
    
    /**
     * @return $this
     */
    public function getFilters() : array;
    
    /**
     * @return int
     */
    public function getPage() : int;
    
    /**
     * @return int
     */
    public function getPageSize() : int;
    
    /**
     * @return array
     */
    public function getAggregationRules() : array;
    
    /**
     * @return string
     */
    public function getGroupedByProperty() : string;
    
    /**
     * @return int Entity set size (== LIMIT in SQL)
     */
    public function getSize() : int;
    
    
    public function getCollectionName() : string;
}
