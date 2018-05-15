<?php

namespace Utils;

use Utils\Node;

class LinkedList {
//link to first node of linked list
    private $head;

// link to last node of linked list
    private $lastNode;

// count of total item in linked list
    private $count;

    function __construct() {

        $this->head = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }

    public function insertAtLast($item) {
        $node = new Node($item);

        if ($this->head != NULL) {

            $this->lastNode->next = $node;
            $this->lastNode = &$node;
            $this->count++;

        } else {
            $this->insertAtFirst($item);
        }
    }

    public function insertAtFirst($item) {

        $node = new Node($item);
        if ($this->head == NULL) {

            $this->head = &$node;
            $this->lastNode = &$node;

        } else {

            $node->next = $this->head;
            $this->head = &$node;

        }

        $this->count++;

    }

    public function insertAtPos($item, $position) {

        if ($position <= $this->count) {
            if ($position == 0) {
                $this->insertAtFirst($item);
            } else if ($position == $this->count) {
                $this->insertAtLast($item);
            } else {
                $this->insert($item, $position);
            }

        } else {

            throw new Exception("Index out of bound");

        }

    }

    public function toArray() {
        $listItem = array();
        $currentNode = $this->head;
        $i = 0;
        while ($currentNode !== NULL) {
            $listItem[$i] = $currentNode->getData();
            $currentNode = $currentNode->next;
            $i++;
        }
        return $listItem;
    }

    public function removeByIndex($index) {

        if ($this->count > $index) {
            if ($index == 0) {

                $this->removeFirst();
            } else {

                $this->remove($index);
            }
        } else {

            throw new Exception("Index out of bounds");
        }

    }

    public function contains($item) {
        $status = FALSE;
        $currentNode = $this->head;
        for ($i = 0; $i < $this->count - 1; $i++) {
            if ($item === $currentNode->getData()) {
                $status = TRUE;
                break;
            }
            $currentNode = $currentNode->next;
        }
        return $status;
    }

    public function get($index) {

        if (($this->size() > $index) && ($index >= 0)) {
            $currentNode = $this->head;
            for ($i = 0; $i <= $index; $i++) {
                if ($i == $index) {
                    $itemData = $currentNode->getData();
                    return $itemData;
                }
                $currentNode = $currentNode->next;
            }

        } else {
            throw new Exception("Index out of bounds");
        }
    }

    public function size() {

        return $this->count;

    }

    public function isEmpty() {

        if ($this->head == NULL) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function removeFirst() {

        $this->head = $this->head->next;
        $this->count--;
    }

    private function remove($index) {

        $currentNode = $this->head;
        for ($i = 0; $i < $index; $i++) {
            if ($i == $index - 1) {
                $toBeRemovedReference = $currentNode->next;
                $currentNode->next = $toBeRemovedReference->next;

                if ($toBeRemovedReference->next == NULL) { // If it is last node, update instance variable
                    $this->lastNode = $currentNode;

                }
                $this->count--;
            }
            $currentNode = $currentNode->next;
        }

    }

    private function insert($item, $position) {

        $currentNode = $this->head;
        $node = new Node($item);
        for ($i = 1; $i <= $position; $i++) {

            if ($position == $i) {
                $nextNodeReference = $currentNode->next;
                $currentNode->next = $node;
                $node->next = $nextNodeReference;
                $this->count++;
                break;
            }
            $currentNode = $currentNode->next;

        }
    }

}

?>