<?php
namespace Lokesh\Firstmodule\Api\Data;

interface ViewInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID                    = 'id';
    const TITLE                 = 'title';
    const CONTENT               = 'content';
    const CREATED_AT            = 'created_at';
    /**#@-*/


    public function getId();
    public function getTitle();
    // public function getName();
    public function getContent();
    public function getCreatedAt();
    

    public function setId($id);
    public function setTitle($title);
    // public function setName($name);
    public function setContent($setContent);
    public function setCreatedAt($createdAt);
    
}


