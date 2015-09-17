<?php

namespace lib\LinkedList;

require_once 'lib/LinkedList/LinkedListNode.php';

class LinkedListNodeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {

    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     *
     * @dataProvider nodeData
     */
    public function testCreateNode($data)
    {
        $object = new LinkedListNode($data);
        $this->assertEquals($data, $object->data);
        $this->assertNull($object->next);
        $this->assertNull($object->prev);
    }

    public function nodeData()
    {
        return [
            [
                1,
            ],
            [
                'abc',
            ],
            [
                [
                    1,
                    2,
                    3,
                ],
            ],
            [
                [
                    'key1' => 'val1',
                    'key2' => 'val2',
                    'key3' => 'val3',
                ],
            ],
        ];
    }
}
