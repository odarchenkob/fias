<?php

declare(strict_types=1);

namespace marvin255\fias\state;

/**
 * бъект, который хранит состояние во внутреннем массиве.
 */
class ArrayState implements State
{
    /**
     * @var mixed[]
     */
    private $parameters = [];

    /**
     * @inheritdoc
     */
    public function setParameter(string $parameterName, $parameterValue)
    {
        $unifiedName = $this->unifyParameterName($parameterName);
        $this->parameters[$unifiedName] = $parameterValue;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getParameter(string $parameterName)
    {
        $unifiedName = $this->unifyParameterName($parameterName);

        return isset($this->parameters[$unifiedName])
            ? $this->parameters[$unifiedName]
            : null;
    }

    /**
     * Приводит имя параметра к общему виду, чтобы не плодить разные варианты имен.
     *
     * @param string $parameterName
     *
     * @return string
     */
    protected function unifyParameterName(string $parameterName): string
    {
        return preg_replace('/[^a-z0-9_]+/', '_', strtolower(trim($parameterName)));
    }
}