<?php
namespace App\Interfaces;

interface SeanceRepositoryInterface
{
    public function getAllSeances();
    public function getSeanceById($id);
    public function createSeance(array $data);
    public function updateSeance($id, array $data);
    public function deleteSeance($id);
}
