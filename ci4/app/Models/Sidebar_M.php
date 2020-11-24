<?php namespace App\Models;
use CodeIgniter\Model;
 
class Sidebar_M extends Model
{
    protected $table = 'tblmenu';

    protected $allowedFields = ['menu', 'gambar', 'harga'];

    protected $primaryKey = 'idmenu';

}