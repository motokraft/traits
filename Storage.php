<?php namespace Motokraft\Traits;

/**
 * @copyright   2022 Motokraft. MIT License
 * @link https://github.com/motokraft/traits
 */

trait Storage
{
    static function setStorages(array $items)
    {
        self::$storages = array_merge(self::$items, $items);
    }

    static function setStorage(string $name, string $class)
    {
        self::$storages[$name] = $class;
    }

    static function getStorage(string $name)
    {
        if(!self::hasStorage($name))
        {
            return false;
        }

        return self::$storages[$name];
    }

    static function hasStorage(string $name)
    {
        return isset(self::$storages[$name]);
    }

    static function getStorages()
    {
        return self::$storages;
    }
}