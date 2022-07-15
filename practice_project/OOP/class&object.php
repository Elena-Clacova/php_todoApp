<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
      /*  class Book {
            var $title;
            var $author;
            var $pages;
        }

        $book1 = new Book;
        $book1 -> title = "Harry Potter";
        $book1 -> author = "JK Rowling";
        $book1 -> pages = 400;


        $book2 = new Book;
        $book2 -> title = "Lord of the rings";
        $book2 -> author = "Tolkien";
        $book2 -> pages = 700;
        echo $book2 -> author;
      */  
      


// create a class Basket

    class Basket{
        var $itemsTotal;
        var $shipingCost;
        var $discount;
        function calculateSubTotal() {
           $subTotal =  $this-> itemsTotal + $this-> shipingCost - $this-> discount;

            return $subTotal;
        }
    }


    $basket = new Basket;

    $basket-> itemsTotal = 50;
    $basket-> shipingCost = 10;
    $basket-> discount = 15;
   var_dump($basket-> calculateSubTotal());

?>
</body>
</html>