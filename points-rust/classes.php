<?php
declare(strict_types=1);

class Point
{
    public int $x;
    public int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function toStruct($ffi)
    {
        $cp = $ffi->new('struct Point');
        $cp->x = $this->x;
        $cp->y = $this->y;
        return $cp;
    }
}

class PointApi
{
    private static $ffi = null;

    public function __construct()
    {
        static::$ffi ??= \FFI::scope("POINTS");
    }

    public function distance(Point $p1, Point $p2): float
    {
        $cp1 = $p1->toStruct(static::$ffi);
        $cp2 = $p2->toStruct(static::$ffi);

        return static::$ffi->distance($cp1, $cp2);
    }

}
