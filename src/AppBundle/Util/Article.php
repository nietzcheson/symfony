<?php

namespace AppBundle\Util;

class Article
{

    private $container;

    public function setContainer($container)
    {
        $this->container = $container;
    }

    public function create($object)
    {
        echo '<pre>';print_r($object);exit();
        exit('Create Service');
        $this->smFactory($object, 'create');

    }

    protected function smFactory($object, $state)
    {
        $factory = $this->get('sm.factory');

        $articleSM = $factory->get($object, 'app_article');

        $articleSM->apply($state);
    }
}