<?php

class Product {
    public $name;
    public $price;
    public $brand;
    public $image;
    public $description;
    public $tax;

    public function __construct($name, $price, $brand, $image, $description, $tax) {
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;
        $this->image = $image;
        $this->description = $description;
        $this->tax = $tax;
    }

    public function getInfo() {
        return "Name: " . $this->name . " | Price: " . $this->price;
    }

    public function priceAfterDiscount($discount) {
        return $this->price - ($this->price * $discount / 100);
    }

    public function priceAfterTax() {
        return $this->price + ($this->price * $this->tax / 100);
    }
}

$op = new Product(
    "phone",
    50000,
    "iphone",
    "images/ChatGPT Image Apr 22, 2026, 10_29_43 PM.png",
    "A modern smartphone with high-quality camera, fast performance, long battery life, and a smooth user experience for daily use and entertainment.",
    10
);

$op2 = new Product(
    "laptop",
    16000,
    "dell",
    "images/product2.jpg",
    "A powerful laptop designed for work, gaming, and multitasking with high performance, large storage, and a strong processor for heavy tasks.",
    15
);

$op3 = new Product(
    "headphones",
    400,
    "sony",
    "images/Bluetooth Headphones.png",
    "High-quality wireless headphones with deep bass, noise cancellation, and comfortable design for long listening sessions.",
    5
);
echo $op->getInfo() . "<br>";
echo "Price after discount: " . $op->priceAfterDiscount(20) . "<br>";
echo "Price after tax: " . $op->priceAfterTax(10) . "<br><br>";

echo $op2->getInfo() . "<br>";
echo "Price after discount: " . $op2->priceAfterDiscount(20) . "<br>";
echo "Price after tax: " . $op2->priceAfterTax(15) . "<br><br>";

echo $op3->getInfo() . "<br>";
echo "Price after discount: " . $op3->priceAfterDiscount(20) . "<br>";
echo "Price after tax: " . $op3->priceAfterTax(5) . "<br>";


?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row">

        <?php foreach ([$op, $op2, $op3] as $product) { ?>

        <div class="col-md-4">
            <div class="card mb-3">
               <img src="<?= $product->image ?>" class="card-img-top">
                <div class="card-body">
                    <h5><?= $product->name ?></h5>
                    <p><?= $product->description ?></p>
                    <p>Price: <?= $product->price ?> EGP</p>
                    <p>Final Price (with tax): <?= $product->priceAfterTax() ?> EGP</p>
                </div>
            </div>
        </div>

        <?php } ?>

    </div>
</div>

</body>
</html>