<?php

namespace Data;

class Shape
{
    public function getCorner(): int
    {
        return 0;
    }
}
class Rectagle extends Shape
{

    public function getCorner(): int
    {
        return 4;
    }

    public function getCornerParent(): int
    {
        return parent::getCorner();
    }
}
