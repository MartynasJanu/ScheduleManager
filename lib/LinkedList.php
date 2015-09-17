<?php

use lib\LinkedList\LinkedListNode;

class LinkedList {
    /**
     *
     * @var LinkedListNode Pointer to first node in the list
     */
    protected $first_node;

    /**
     *
     * @var LinkedListNode Pointer to last node in the list
     */
    protected $last_node;

    /**
     *
     * @var LinkedListNode Pointer to currently iterated node in the list
     */
    protected $current_node;

    /**
     *
     * @var boolean End of list error flags. True if end of list reached
     */
    protected $end;

    /**
     *
     * @var int Number of nodes in the list
     */
    protected $count;

    /**
     * Initialized an empty list
     */
    public function __construct()
    {
        $this->clear();
    }

    /**
     * Sets iteration pointer to start of the list and clear error flags
     */
    public function rewind()
    {
        $this->current_node = $this->first_node;
        $this->end = false;
    }

    /**
     * Returns the currently iterated node and steps forward
     *
     * @return LinkedListNode|null Currently iterated node or null
     * if end of list is reached
     */
    public function next()
    {
        if ($this->end) {
            return null;
        }

        $ret = $this->current_node;

        if ($this->current_node === null || $this->current_node->next === null) {
            $this->end = true;
        } else {
            $this->current_node = $this->current_node->next;
        }

        return $ret;
    }

    /**
     * @return boolean true if end of list reached, false otherwise
     */
    public function end()
    {
        return $this->end;
    }

    /**
     * Erases the entire list and clears error flags
     */
    public function clear()
    {
        $this->first_node = null;
        $this->last_node = null;
        $this->current_node = null;
        $this->end = false;
        $this->count = 0;
    }

    /**
     * Inserts a new node to the end of the list
     * @param LinkedListNode|mixed $data If instance of LinkedListNode type is
     * provided, inserts that node. Otherwise, creates new node and adds $data to
     * node data field
     */
    public function pushBack($data)
    {
        if ($data instanceof LinkedListNode) {
            $node = $data;
        } else {
            $node = new LinkedListNode($data);
        }
    }

    /**
     * Inserts a new node after $node
     * @param LinkedListNode $node Node after which new node should be inserted
     * @param LinkedListNode|mixed $data If instance of LinkedListNode type is
     * provided, inserts that node. Otherwise, creates new node and adds $data to
     * node data field
     */
    public function insertAfter(LinkedListNode $node, $data)
    {

    }

    /**
     * Inserts a new node before $node
     * @param LinkedListNode $node Node before which new node should be inserted
     * @param LinkedListNode|mixed $data If instance of LinkedListNode type is
     * provided, inserts that node. Otherwise, creates new node and adds $data to
     * node data field
     */
    public function insertBefore(LinkedListNode $node, $data)
    {

    }
}
