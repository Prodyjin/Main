<?php
/**
 * Created by PhpStorm.
 * User: Gin
 * Date: 08/06/2015
 * Time: 22:39
 */
namespace SOLID;


require_once 'CubeFactory.php';

class CubeTest extends \PHPUnit_Framework_TestCase
{
    public function color2DataProvider()
    {
        return array(
            array('blue'),
            array('red'),
            array('green'),
            array('orange'),
            array('yellow')

        );
    }

    /**
     * @dataProvider color2DataProvider
     */
    public function testColor($color)
    {
        $MyCube = CubeFactory::create($color);
        $this->assertEquals($color, $MyCube->getColor());
    }
}
