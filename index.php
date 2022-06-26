<?php

// CALL ALL FILE CLASS
function __autoload($class_name)
{
    require_once('classes/' . $class_name . '.class.php');
}

// OBJECT CLASS BUKU
$book_object = new Buku;
echo $book_object->specs("parameter 1 hanya judul buku");
echo $book_object->specs("parameter 1 judul buku", "parameter 2 nama penulis");

$local_book_object = new Buku_Local;
echo $local_book_object->specs("Langkah Mudah Menguasai SEO");
echo $local_book_object->specs("Langkah Mudah Menguasai SEO", "FERI SULIANTA");


$asing_book_object = new Buku_Asing;
echo $asing_book_object->specs("Rich DAD POOR DAD");
echo $asing_book_object->specs("Rich DAD POOR DAD", "ROBERT T. KIYOSAKI");
