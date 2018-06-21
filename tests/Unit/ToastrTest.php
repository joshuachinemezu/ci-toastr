<?php

/**
 *  Corresponding Class to test Toastr class
 **
 *  @author Joshua Chinemezu <joshuachinemezu@gmail.com>
 */
class ToastrTest extends PHPUnit_Framework_TestCase
{

    /**
     * Just check if the Toastr has no syntax error
     *
     * This is just a simple check to make sure the library has no syntax error. This helps to troubleshoot
     * any typo before this library is used in a real project.
     *
     */

    public function testIsThereAnySyntaxError()
    {
        $var = new Toastr;
        $this->assertTrue(is_object($var));
        unset($var);
    }
}
