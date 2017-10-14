<?php

namespace App;

use \Library\BaseModel;

class Model extends BaseModel
{
    public function fixSequences()
    {
        $tables = [];

        foreach ($tables as $table) {
            $sql = "select setval('\"public." . $table . "_id_seq\"'::REGCLASS, max(id)) FROM $table";
            $this->database->exec($sql);
        }

    }
}