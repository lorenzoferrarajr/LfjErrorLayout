<?php

namespace LfjErrorLayout;

use Zend\EventManager\Event;
use Zend\View\Model;

class Module
{
    protected static $layout;

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     *
     * @param \Zend\Mvc\MvcEvent $e
     */
    public function onBootstrap(Event $e)
    {
        // $e->getTarget() is application
        $events = $e->getTarget()->getEventManager();

        $events->attach('dispatch.error', function($ev) use ($e) {

            $layout   = new Model\ViewModel();
            $layout->setTerminal(true);
            $layout->setTemplate('layout/error');
            $result = $e->getResult();

            $layout->addChild($result, 'content');
            $e->setResult($layout);

        });
    }

}
