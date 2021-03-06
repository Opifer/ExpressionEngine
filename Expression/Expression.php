<?php

namespace Opifer\ExpressionEngine\Expression;

class Expression implements ExpressionInterface
{
    /** @var string */
    protected $selector;

    /** @var string */
    protected $constraint;

    /** @var mixed */
    protected $value;

    /** @var Expression[] */
    protected $children = [];

    /**
     * @return string
     */
    public function getSelector()
    {
        return $this->selector;
    }

    /**
     * @param string $selector
     *
     * @return Expression
     */
    public function setSelector($selector)
    {
        $this->selector = $selector;

        return $this;
    }

    /**
     * @return string
     */
    public function getConstraint()
    {
        return $this->constraint;
    }

    /**
     * @param string $constraint
     *
     * @return Expression
     */
    public function setConstraint($constraint)
    {
        $this->constraint = $constraint;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     *
     * @return Expression
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return array
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param array $children
     *
     * @return Expression
     */
    public function setChildren($children)
    {
        $this->children = $children;

        return $this;
    }
}
