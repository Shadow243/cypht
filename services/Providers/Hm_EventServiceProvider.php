<?php

namespace Services\Providers;

use Services\Core\Events\Hm_EventManager;
use Services\Listeners\Hm_NewMaiListener;
use Services\Events\Hm_NewEmailProcessedEvent;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Hm_EventServiceProvider
{
    protected array $listen = [
        Hm_NewEmailProcessedEvent::class => [
            Hm_NewMaiListener::class,
        ],
    ];

    public function register(): void
    {
        foreach ($this->listen as $event => $listeners) {
            foreach ($listeners as $listener) {
                Hm_EventManager::listen($event, $listener);
            }
        }
    }

     /**
     * Set the container instance for events and listeners.
     *
     * @param  ContainerInterface  $container
     * @return void
     */
    public function setContainer(ContainerInterface $container): void
    {
        // var_dump($container);
        // Hm_EventManager::setContainer($container);
    }
}
