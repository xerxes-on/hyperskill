<?php


// Parent class Technology
class Technology
{
    protected $name;
    protected $brand;
    protected $price;

    public function __construct($name, $brand, $price)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

// Child class Phone
class Phone extends Technology
{
    protected $screenSize;
    protected $cameraMegapixels;
    protected $storageCapacity;

    public function __construct($name, $brand, $price, $screenSize, $cameraMegapixels, $storageCapacity)
    {
        parent::__construct($name, $brand, $price);
        $this->screenSize = $screenSize;
        $this->cameraMegapixels = $cameraMegapixels;
        $this->storageCapacity = $storageCapacity;
    }

    public function getScreenSize()
    {
        return $this->screenSize;
    }

    public function getCameraMegapixels()
    {
        return $this->cameraMegapixels;
    }

    public function getStorageCapacity()
    {
        return $this->storageCapacity;
    }
}

// Child class Television
class Television extends Technology
{
    protected $screenResolution;
    protected $smartTv;
    protected $refreshRate;

    public function __construct($name, $brand, $price, $screenResolution, $smartTv, $refreshRate)
    {
        parent::__construct($name, $brand, $price);
        $this->screenResolution = $screenResolution;
        $this->smartTv = $smartTv;
        $this->refreshRate = $refreshRate;
    }

    public function getScreenResolution()
    {
        return $this->screenResolution;
    }

    public function isSmartTv()
    {
        return $this->smartTv;
    }

    public function getRefreshRate()
    {
        return $this->refreshRate;
    }
}

// Child class Laptop
class Laptop extends Technology
{
    protected $processor;
    protected $ram;
    protected $storageType;

    public function __construct($name, $brand, $price, $processor, $ram, $storageType)
    {
        parent::__construct($name, $brand, $price);
        $this->processor = $processor;
        $this->ram = $ram;
        $this->storageType = $storageType;
    }

    public function getProcessor()
    {
        return $this->processor;
    }

    public function getRam()
    {
        return $this->ram;
    }

    public function getStorageType()
    {
        return $this->storageType;
    }
}

// Example usage
$phone = new Phone("iPhone 14 Pro", "Apple", 999, 6.1, 12, 256);
$television = new Television("Samsung QLED 8K", "Samsung", 2999, "3840x2160", true, 120);
$laptop = new Laptop("Dell XPS 13", "Dell", 1299, "Intel Core i7-12700H", 16, "SSD");

echo "Phone name: " . $phone->getName() . ", brand: " . $phone->getBrand() . ", price: $" . $phone->getPrice() . "\n";
echo "Television name: " . $television->getName() . ", brand: " . $television->getBrand() . ", price: $" . $television->getPrice() . "\n";
echo "Laptop name: " . $laptop->getName() . ", brand: " . $laptop->getBrand() . ", price: $" . $laptop->getPrice() . "\n";

