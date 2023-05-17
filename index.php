<?php

/**
 * [Description products]
 * @param string $_name, 
 * @param string $_description,
 * @param string $_prezzo, 
 * @param string $_category
 */
class products
{
    private $name;
    private $description;
    private $prezzo;
    private $image;
    private $category;

    public function __construct($_name, $_description, $_prezzo, $_image, $_category)
    {

        $this->name = $_name;
        $this->description = $_description;
        $this->prezzo = $_prezzo;
        $this->image = $_image;
        $this->category = $_category;
    }
}


/**
 * [Description category]
 * @param string $_name
 * @param array $_products
 */
class Category
{

    private $name;
    private $products = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addProduct($product)
    {
        $this->products[] = $product;
    }
}

/**
 * [Description Dog]
 */
class Dog extends Category
{
    private $breed;
    private $height;

    public function __construct($name, $breed, $height)
    {
        parent::__construct($name);
        $this->breed = $breed;
        $this->height = $height;
    }
}