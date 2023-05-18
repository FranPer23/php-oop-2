<?php

/**
 * [Description products]
 * @param string $_name, 
 * @param string $_description,
 * @param string $_price, 
 * @param string $_category 
 */
class products
{
    private $name;
    private $description;
    private $price;
    private $image;
    private $category;

    public function __construct($_name, $_description, $_price, $_image, $_category)
    {

        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;


        if (!is_numeric($_price)) {
            throw new Exception("Il prezzo deve essere un valore numerico.");
        }
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
        Category::__construct($name);
        $this->breed = $breed;
        $this->height = $height;
    }
}
