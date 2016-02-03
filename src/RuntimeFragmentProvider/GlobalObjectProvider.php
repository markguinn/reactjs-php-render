<?php

namespace ReactJS\RuntimeFragmentProvider;

/**
 * @package ReactJS
 */
class GlobalObjectProvider implements ProviderInterface
{
    /**
     * Returns fragments for getting a component in JavaScript
     *
     * E.g. require('component')
     *
     * @param $componentName
     * @return mixed
     */
    public function getComponent($componentName)
    {
        return $componentName;
    }

    /**
     * Returns fragment for getting the react object
     * @return string
     */
    public function getReact()
    {
        return 'React';
    }

    /**
     * Returns fragment for getting the react object
     * @return string
     */
    public function getReactDOM()
    {
        return 'ReactDOM';
    }

    /**
     * Returns fragment for getting the "container" or mount point
     * @param $value
     * @return string
     */
    public function getDOMContainer($value)
    {
        return sprintf(
            "document.getElementById(%s)",
            json_encode($value)
        );
    }
}
