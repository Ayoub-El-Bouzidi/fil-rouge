<?php
namespace App\Interfaces;

interface FormateureRepositoryInterface
{
    public function getAllFormateurs();
    public function getFormateurById($id);
    public function createFormateur(array $data);
    public function updateFormateur($id, array $data);
    public function deleteFormateur($id);
}
