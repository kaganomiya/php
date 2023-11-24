<?php
// 三角形の面積
function triangle($bottom,$height)
{
    $triangleArea = $bottom * $height / 2;
    echo "三角形の面積は".$triangleArea."㎡です<br>";
}

triangle(2,5);

// 四角形の面積
function square($height,$width)
{
    $squareArea = $height * $width;
    echo "四角形の面積は".$squareArea."㎡です<br>";

}

square(2,5);

// 台形の面積
function trapezoid($upperBottom,$bottom,$height)
{
    $trapezoidArea = ($upperBottom + $bottom) * $height / 2;
    echo "台形の面積は".$trapezoidArea."㎡です";
}

trapezoid(3,5,5);
