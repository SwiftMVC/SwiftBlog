<?php

/**
 * Description of post
 *
 * @author Faizan Ayubi
 */
class Post extends Shared\Model {
    
    /**
     * @column
     * @readwrite
     * @type text
     * @length 100
     * 
     * @validate required, min(3), max(100)
     * @label title
     */
    protected $_title;
    
    /**
     * @column
     * @readwrite
     * @type text
     * 
     * @validate required, min(3)
     * @label content
     */
    protected $_content;
}
