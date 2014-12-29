<?php
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   CategoryName
 * @package    PackageName
 * @author     Original Author <author@example.com>
 * @author     Another Author <another@example.com>
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */

/**
 * Cette class permet de tester la class Calculator.
 */

class CalculatorTest extends PHPUnit_Framework_TestCase{
    /**
     * Cette fonction permet de prendre en compte la class Calculator.
     *
     * @author Jean-François <prenom.nom@example.com>
     * @since 1.0.0
    */    
    public function setUp(){
        require_once 'Calculator.php';
    }

    /**
     * Cette fonction permet de tester la fonction add de la class Calculator.
     *
     * @author Jean-François <prenom.nom@example.com>
     * @since 1.0.0
    */  
    public function testAdd(){
        $this->assertEquals(4,Calculator::add(2,2));
        $this->assertEquals(100,Calculator::add(81,19));
        $this->assertEquals(23,Calculator::add(20,3));
    }

    /**
     * Cette fonction permet de tester la fonction subtract de la class Calculator.
     *
     * @author Jean-François <prenom.nom@example.com>
     * @since 1.0.0
    */  
    public function testSubtract(){
        $this->assertEquals(-3,Calculator::subtract(4,7));
        $this->assertEquals(0,Calculator::subtract(6,6));
        $this->assertEquals(7,Calculator::subtract(4,-3));
    }

    /**
     * Cette fonction permet de tester la fonction multiply de la class Calculator.
     *
     * @author Jean-François <prenom.nom@example.com>
     * @since 1.0.0
    */  
    public function testMultiply (){
        $this->assertEquals(63,Calculator::multiply(9,7));
        $this->assertEquals(-14,Calculator::multiply(2,-7));
        $this->assertEquals(35,Calculator::multiply(-5,-7));
    }

    /**
     * Cette fonction permet de tester la fonction divide de la class Calculator.
     *
     * @author Jean-François <prenom.nom@example.com>
     * @since 1.0.0
    */  
    public function testDivide (){
        $this->assertEquals(1,Calculator::divide(9,9));
        $this->assertEquals(3,Calculator::divide(-9,-3));
        $this->assertEquals(-5,Calculator::divide(-10,2));
    }
}
?>