<?php

declare(strict_types=1);

namespace marvin255\fias;

/**
 * Объект, который позволяет передавать объекты сервисов
 * между задачами, например, объекты pdo для связи с базой данных.
 */
class ServiceLocator implements ServiceLocatorInterface
{
    /**
     * @var array
     */
    protected $services = [];

    /**
     * @inheritdoc
     */
    public function resolve(string $service)
    {
        $serviceObject = null;

        foreach ($this->services as $tryingService) {
            $tryingClass = get_class($tryingService);
            if ($tryingClass === $service || is_subclass_of($tryingService, $service)) {
                $serviceObject = $tryingService;
                break;
            }
        }

        return $serviceObject;
    }

    /**
     * Регистрирует новый сервис.
     *
     * @param mixed $service
     *
     * @return self
     */
    public function register($service): ServiceLocatorInterface
    {
        $this->services[] = $service;

        return $this;
    }
}
