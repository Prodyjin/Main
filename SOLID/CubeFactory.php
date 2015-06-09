<?php
/**
 * Created by PhpStorm.
 * User: Gin
 * Date: 08/06/2015
 * Time: 22:56
 */

namespace SOLID;

require_once 'Cube.php';
/**
 * Class CubeFactory
 * @package SOLID
 */
class CubeFactory {
    /**
     * @param $color
     */
    public static function create($color){
        return new Cube($color);
    }


} 