<?php

namespace GeoIO\Geometry;

use GeoIO;

class FactoryTest  extends \PHPUnit_Framework_TestCase
{
    public function testCreatePoint()
    {
        $factory = new Factory();

        $geometry = $factory->createPoint(GeoIO\DIMENSION_4D, array(
            'x' => 1,
            'y' => 2,
            'z' => 3,
            'm' => 4,
        ), 1234);

        $this->assertInstanceOf('GeoIO\Geometry\Point', $geometry);
        $this->assertSame(GeoIO\DIMENSION_4D, $geometry->getDimension());
        $this->assertSame(1234, $geometry->getSrid());

        $this->assertSame(1, $geometry->getX());
        $this->assertSame(2, $geometry->getY());
        $this->assertSame(3, $geometry->getZ());
        $this->assertSame(4, $geometry->getM());
    }

    public function testCreateLineString()
    {
        $factory = new Factory();

        $geometry = $factory->createLineString(GeoIO\DIMENSION_4D, array(
        ), 1234);

        $this->assertInstanceOf('GeoIO\Geometry\LineString', $geometry);
        $this->assertSame(GeoIO\DIMENSION_4D, $geometry->getDimension());
        $this->assertSame(1234, $geometry->getSrid());
    }

    public function testCreatePolygon()
    {
        $factory = new Factory();

        $geometry = $factory->createPolygon(GeoIO\DIMENSION_4D, array(
        ), 1234);

        $this->assertInstanceOf('GeoIO\Geometry\Polygon', $geometry);
        $this->assertSame(GeoIO\DIMENSION_4D, $geometry->getDimension());
        $this->assertSame(1234, $geometry->getSrid());
    }

    public function testCreateMultiPoint()
    {
        $factory = new Factory();

        $geometry = $factory->createMultiPoint(GeoIO\DIMENSION_4D, array(
        ), 1234);

        $this->assertInstanceOf('GeoIO\Geometry\MultiPoint', $geometry);
        $this->assertSame(GeoIO\DIMENSION_4D, $geometry->getDimension());
        $this->assertSame(1234, $geometry->getSrid());
    }

    public function testCreateMultiLineString()
    {
        $factory = new Factory();

        $geometry = $factory->createMultiLineString(GeoIO\DIMENSION_4D, array(
        ), 1234);

        $this->assertInstanceOf('GeoIO\Geometry\MultiLineString', $geometry);
        $this->assertSame(GeoIO\DIMENSION_4D, $geometry->getDimension());
        $this->assertSame(1234, $geometry->getSrid());
    }

    public function testCreateMultiPolygon()
    {
        $factory = new Factory();

        $geometry = $factory->createMultiPolygon(GeoIO\DIMENSION_4D, array(
        ), 1234);

        $this->assertInstanceOf('GeoIO\Geometry\MultiPolygon', $geometry);
        $this->assertSame(GeoIO\DIMENSION_4D, $geometry->getDimension());
        $this->assertSame(1234, $geometry->getSrid());
    }

    public function testCreateGeometryCollection()
    {
        $factory = new Factory();

        $geometry = $factory->createGeometryCollection(GeoIO\DIMENSION_4D, array(
        ), 1234);

        $this->assertInstanceOf('GeoIO\Geometry\GeometryCollection', $geometry);
        $this->assertSame(GeoIO\DIMENSION_4D, $geometry->getDimension());
        $this->assertSame(1234, $geometry->getSrid());
    }
}
