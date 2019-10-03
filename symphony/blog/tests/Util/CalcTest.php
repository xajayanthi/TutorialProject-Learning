<?php
/**
 * Created by PhpStorm.
 * User: xearts
 * Date: 2019-10-03
 * Time: 11:49
 */


// tests/Util/CalcTest.php
namespace App\Tests\Util;

use App\Util\Calc;
use PHPUnit\Framework\TestCase;

class CalcTest extends testcase
{
    public function testAdd()
    {
        $calc = new Calc();
        $result = $calc->add(10,20);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(30, $result);
    }
}