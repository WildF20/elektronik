<?php 

namespace App\Models\MyClasses;

use Illuminate\Database\Eloquent\Builder;

class ElectronicBuilder extends Builder 
{
    public function __construct($query)
    {
        parent::__construct($query);
    }

    public function greeting()
    {
        $data = collect($this->with('electronic')->get())->toArray();

        return $data;
    }
}
?>