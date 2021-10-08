<?php
    require_once '../models/Book.php';
    class BookController {
        public function index() {
            $books = new Book();
            return $books->get();
        }
        public function filter($value) {
            $books = new Book();
            return $books->filteredBooks($value);
        }

        public function destroy($id) {
            $books = new Book();
            return $books->delete($id);
        }

        public function updateBook($id, $name, $author) {
            $books = new Book();
            return $books->update($id, $name, $author);
        }

        public function store($name, $author) {
            $books = new Book();
            return $books->create($name, $author);
        }
    }
