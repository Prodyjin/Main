<?php
/**
 * Created by PhpStorm.
 * User: andrea
 * Date: 30/05/15
 * Time: 14.31
 */

class EvilCorp
{
    /**
     * @var array
     */
    private $words;

    public function __construct(array $word)
    {
        $this->words = $word;
    }

    public function obfuscate($string)
    {
        return preg_replace_callback(
            '/'.implode('|', array_map(function($elem) {return '\b'.preg_quote($elem, '/').'(?:\B.)*\b';}, $this->words)).'/',
            function ($matches) {
                return str_repeat('X', strlen($matches[0]));
            },
            $string
        );
    }
}