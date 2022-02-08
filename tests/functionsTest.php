<?php

use PHPUnit\Framework\TestCase;

require '../functions.php';

class functionsTest extends TestCase
{
    public function testSuccessDisplayArray()
    {
        $expected = "<div class='entryContainer'> 
                        <div class='id'> <p>#" . "1" . "</p> </div>
                        <div class='flag'> <img src='images/" . "XXX" . ".png' alt=''> </div>
                        <div class='player'> <p>" . "Ethan" ."</p> </div> 
                        <div class='rating'> <p>" . "1234.5678" . "</p> </div>
                    </div>";
        $inputArray = [['player' => 'Ethan', 'rating' => '1234.5678', 'nationality' => 'XXX']];
        $case = displayArray($inputArray);
        $this->assertEquals($expected, $case);
    }
    public function testFailureDisplayArray()
    {
        $expected = 'ERROR - No data found';
        $inputArray = [];
        $case = displayArray($inputArray);
        $this->assertEquals($expected, $case);
    }
    public function testMalformedDisplayArray()
    {
        $input = true;
        $this->expectException(TypeError::class);
        displayArray($input);
    }
}