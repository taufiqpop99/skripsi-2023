<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsflashModel extends Model
{
    protected $table            = 'newsflash';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['judul', 'deskripsi', 'link', 'images'];
    protected $useTimestamps    = true;

    public function getNewsflash($link = false)
    {
        if ($link == false) {
            return $this->findAll();
        }

        return $this->where(['link' => $link])->first();
    }
}