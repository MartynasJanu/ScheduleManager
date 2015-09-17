<?php

    require_once 'lib/LinkedList.php';

    /**
     * Generated by PHPUnit_SkeletonGenerator on 2015-09-17 at 04:32:24.
     */
    class LinkedListTest extends PHPUnit_Framework_TestCase
    {

        /**
         * @var LinkedList
         */
        protected $object;

        /**
         * Sets up the fixture, for example, opens a network connection.
         * This method is called before a test is executed.
         */
        protected function setUp()
        {
            $this->object = new LinkedList;
        }

        /**
         * Tears down the fixture, for example, closes a network connection.
         * This method is called after a test is executed.
         */
        protected function tearDown()
        {
            $this->object = null;
        }

        /**
         * @covers LinkedList::rewind
         * @uses LinkedList::next
         * @uses LinkedList::end
         */
        public function testRewind()
        {
            $this->assertNull($this->object->next());
            $this->assertTrue($this->object->end());
            $this->object->rewind();
            $this->assertFalse($this->object->end());
        }

        /**
         * @covers LinkedList::next
         * @todo   Implement testNext().
         */
        public function testNext()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                'This test has not been implemented yet.'
            );
        }

        /**
         * @covers LinkedList::end
         * @todo   Implement testEnd().
         */
        public function testEnd()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                'This test has not been implemented yet.'
            );
        }

        /**
         * @covers LinkedList::clear
         * @todo   Implement testClear().
         */
        public function testClear()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                'This test has not been implemented yet.'
            );
        }

        /**
         * @covers LinkedList::pushBack
         * @todo   Implement testPushBack().
         */
        public function testPushBack()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                'This test has not been implemented yet.'
            );
        }

        /**
         * @covers LinkedList::insertAfter
         * @todo   Implement testInsertAfter().
         */
        public function testInsertAfter()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                'This test has not been implemented yet.'
            );
        }

        /**
         * @covers LinkedList::insertBefore
         * @todo   Implement testInsertBefore().
         */
        public function testInsertBefore()
        {
            // Remove the following lines when you implement this test.
            $this->markTestIncomplete(
                'This test has not been implemented yet.'
            );
        }

    }
