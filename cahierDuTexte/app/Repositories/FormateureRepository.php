<?php
namespace App\Repositories;
use App\Interfaces\FormateureRepositoryInterface;
use App\Models\Formateur;

class FormateureRepository implements FormateureRepositoryInterface
{
    public function getAllFormateurs()
    {
        return Formateur::all();
    }

    public function getFormateurById($id)
    {
        return Formateur::findOrFail($id);
    }

    public function createFormateur(array $data)
    {
        return Formateur::create($data);
    }

    public function updateFormateur($id, array $data)
    {
        $formateur = $this->getFormateurById($id);
        $formateur->update($data);
        return $formateur;
    }

    public function deleteFormateur($id)
    {
        $formateur = $this->getFormateurById($id);
        return $formateur->delete();
    }
}
