<?php
/**
 * Created by PhpStorm.
 * User: martindaniel
 * Date: 2/19/16
 * Time: 8:15 PM
 */

namespace MartinTali\Login\Login;

use MartinTali\Login\Martin;

class MartinTest extends \PHPUnit_Framework_TestCase
{
    public function testTaliHasCheese()
    {
        $nacho = new Martin();
        $this->assertTrue($nacho->hasCheese());
    }
}
