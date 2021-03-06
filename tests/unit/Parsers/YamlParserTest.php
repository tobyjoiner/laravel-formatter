<?php namespace MetabytesSRO\Formatter\Test\Parsers;

use MetabytesSRO\Formatter\Parsers\Parser;
use MetabytesSRO\Formatter\Parsers\XmlParser;
use MetabytesSRO\Formatter\Parsers\YamlParser;
use MetabytesSRO\Formatter\Test\TestCase;

class YamlParserTest extends TestCase
{

    public function testYamlParserIsInstanceOfParserInterface()
    {
        $parser = new YamlParser('');
        $this->assertTrue($parser instanceof Parser);
    }

    public function testtoArrayReturnsArrayRepresenationOfYamlObject()
    {
        $expected = ['foo' => 'bar'];
        $parser = new XmlParser('<xml><foo>bar</foo></xml>');
        $x = new YamlParser($parser->toYaml());
        $this->assertEquals($expected, $x->toArray());
    }

}
