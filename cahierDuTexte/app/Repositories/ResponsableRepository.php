<?php
namespace App\Repositories;


use App\Interfaces\ResponsableRepositoryInterface;
use App\Models\Responsable;

class ResponsableRepository implements ResponsableRepositoryInterface
{

    public function getAllResponsables()
    {
        return Responsable::all();
    }

    public function getResponsableById($id)
    {
        return Responsable::findOrFail($id);
    }

    public function createResponsable(array $data)
    {
        return Responsable::create($data);
    }

    public function updateResponsable($id, array $data)
    {
        $responsable= $this->getResponsableById($id);
        $responsable->update($data);
        return $responsable;
    }

    public function deleteResponsable($id)
    {
        $responsable = $this->getResponsableById($id);
        return $responsable->delete();
    }
}
