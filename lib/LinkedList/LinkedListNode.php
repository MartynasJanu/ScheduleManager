<?php

namespace lib\LinkedList;

class LinkedListNode {

    /**
     * @var LinkedListNode Pointer to next node in the list
     */
    public $next;

    /**
     * @var LinkedListNode Pointer to previous node in the list
     */
    public $prev;

    /**
     *
     * @var mixed Stores node data
     */
    public $data;

    /**
     * Initializes an isolated node with passed data
     * @param mixed $data Data to be stored in the node
     */
    public function __construct($data)
    {
        $this->next = null;
        $this->prev = null;
        $this->data = $data;
    }
}
