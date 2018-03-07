<?php

namespace Abacus11\Collections;

class Resources extends ArrayCollectionOf
{
    /**
     * Collection of resources
     *
     * Each element of the collection is a resource
     *
     * @param resource[] $elements
     *
     * @throws \AssertionError
     * @throws \Exception
     * @throws \TypeError
     */
    public function __construct(array $elements = [])
    {
        parent::__construct('resource', $elements);
    }
}