<?php

namespace Jackalope\Query\QOM;

use PHPCR\Query\QOM\SameNodeInterface;

/**
 * {@inheritDoc}
 *
 * @api
 */
class SameNode implements SameNodeInterface
{
    /**
     * @var string
     */
    protected $selectorName;

    /**
     * @var string
     */
    protected $path;

    /**
     * Constructor
     *
     * @param string $selectorName
     * @param string $path
     */
    public function __construct($selectorName, $path)
    {
        $this->selectorName = $selectorName;
        $this->path = $path;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public function getSelectorName()
    {
        return $this->selectorName;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Gets all constraints including itself
     *
     * @return array the constraints
     *
     * @api
     */
    public function getConstraints()
    {
        return array($this);
    }
}
