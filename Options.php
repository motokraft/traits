<?php namespace Motokraft\Traits;

/**
 * @copyright   2022 Motokraft. MIT License
 * @link https://github.com/motokraft/traits
 */

trait Options
{
    static function setDefaultOptions(array $options)
    {
        self::$options = array_merge(self::$options, $options);
    }

    static function setDefaultOption(string $name, $value)
    {
        self::$options[$name] = $value;
    }

    static function getDefaultOption(string $name, $default = null)
    {
        if(!self::hasDefaultOption($name))
        {
            return $default;
        }

        return self::$options[$name];
    }

    static function hasDefaultOption(string $name)
    {
        return isset(self::$options[$name]);
    }

    static function getDefaultOptions()
    {
        return self::$options;
    }

    function getOption(string $name, mixed $default = null)
    {
        return self::getDefaultOption($name, $default);
    }
}