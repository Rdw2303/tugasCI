<?php
namespace App\Models;

use CodeIgniter\Model;
class Modelmahasiswa extends Model
{
    protected $table = "siswa";
    protected $primaryKey = 'id';
    protected $returnType = 'object';
    protected $allowedFields = ['tgl_berkunjung','nama_tamu','no_telepon','keperluan'];

}