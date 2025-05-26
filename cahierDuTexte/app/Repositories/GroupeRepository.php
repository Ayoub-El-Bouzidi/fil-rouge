<?php
namespace App\Repositories;


use App\Interfaces\GroupeRepositoryInterface;
use App\Models\Groupe;
class GroupeRepository implements GroupeRepositoryInterface
{

    public function getAllGroupes()
    {
        return Groupe::all();
    }

    public function getGroupeById($id)
    {
        return Groupe::findOrFail($id);
    }

    public function createGroupe(array $data)
    {
        return Groupe::create($data);
    }

    public function updateGroupe($id, array $data)
    {
        $groupe= $this->getGroupeById($id);
        $groupe->update($data);
        return $groupe;
    }

    public function deleteGroupe($id)
    {
        $groupe = $this->getGroupeById($id);
        return $groupe->delete();
    }
}
