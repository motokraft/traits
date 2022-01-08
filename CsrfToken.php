<?php namespace Motokraft\Traits;

/**
 * @copyright   2022 Motokraft. MIT License
 * @link https://github.com/motokraft/traits
 */

trait CsrfToken
{
    private static $csrf_token;

    static function setCSRFToken(string $token)
    {
        self::$csrf_token = $token;
    }

    static function getCSRFToken()
    {
        return self::$csrf_token;
    }

    static function hasCSRFToken(string $token)
    {
        return (self::$csrf_token === $token);
    }
}