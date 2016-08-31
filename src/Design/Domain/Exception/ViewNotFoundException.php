<?php
namespace Affilicious\Theme\Design\Domain\Exception;

if(!defined('ABSPATH')) exit('Not allowed to access pages directly.');

class ViewNotFoundException extends \RuntimeException
{
    /**
     * @param string $name
     * @param $dir
     */
    public function __construct($name, $dir)
    {
        parent::__construct(sprintf(
            __('View "%s" at "%s" not found.', 'affilicious-theme'),
            $name,
            $dir
        ));
    }
}