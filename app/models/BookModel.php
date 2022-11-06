<?php

class BookModel{
    private $books = [
        [
            "judul" => "Hujan",
            "author" => "Tere Liye",
            "tanggal" => "2022-06-22",
        ],
        [
            "judul" => "Pulang",
            "author" => "Tere Liye",
            "tanggal" => "2022-07-17",
        ],
        [
            "judul" => "Pergi",
            "author" => "Tere Liye",
            "tanggal" => "2022-07-30",
        ],
    ];

    public function getBooks()
    {
        return $this->books;
    }
}