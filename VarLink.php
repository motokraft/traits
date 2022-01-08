<?php namespace Motokraft\Traits;

/**
 * @copyright   2022 Motokraft. MIT License
 * @link https://github.com/motokraft/traits
 */

trait VarLink
{
    static function setVarsLink(array $vars)
    {
        self::$vars = array_merge(self::$vars, $vars);
    }

    static function setVarLink(string $name, $value)
    {
        self::$vars[$name] = $value;
    }

    static function getVarLink(string $name, $default = null)
    {
        if(!self::hasVarLink($name))
        {
            return $default;
        }

        return self::$vars[$name];
    }

    static function hasVarLink(string $name)
    {
        return isset(self::$vars[$name]);
    }

    static function getVarsLink()
    {
        return self::$vars;
    }
}