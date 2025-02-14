<?php

namespace Dynamic\Elements\Video\Tests\Element;

use Dynamic\Elements\Video\Elements\ElementVideo;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\Forms\FieldList;

/**
 * Class ElementVideoTest
 */
class ElementVideoTest extends SapphireTest
{
    /**
     * @var string
     */
    protected static $fixture_file = 'element-video.yml';

    /**
     * Test getCMSFields
     */
    public function testGetCMSFields()
    {
        $object = $this->objFromFixture(ElementVideo::class, 'one');
        $fields = $object->getCMSFields();

        $this->assertInstanceOf(FieldList::class, $fields);
    }
}