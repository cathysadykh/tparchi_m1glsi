<?php
require_once __DIR__ . '/../getset/Categorie.php';

class CategorieDAO {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllCategories() {
        $categ = $this->pdo->query('SELECT * FROM Categorie');
        return $categ->fetchAll();
    }
}
?>