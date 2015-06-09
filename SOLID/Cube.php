<?php
/**
 * Created by PhpStorm.
 * User: Gin
 * Date: 08/06/2015
 * Time: 22:05
 */

namespace SOLID;


class Cube {
    /**
     * @var string
     */
    private $color;

    /**
     * @param $color
     */
    public function __construct($color)
    {
        $this->color=$color;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
}
