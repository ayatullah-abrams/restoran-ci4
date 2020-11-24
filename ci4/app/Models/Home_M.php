<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Home_M extends Model
{
    protected $table = 'tblmenu';

    protected $allowedFields = ['idkategori','menu', 'gambar', 'harga'];

    protected $primaryKey = 'idmenu';

     
}