<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class JadwalControllerAmmar extends Controller {
    public function index() {
        $data = DB::table('t_jadwal_ammar')->get();

        $res = "<h2>Data Jadwal - Ammar</h2>";
        $res .= "<table border='1'>";
        $res .= "<tr>
                    <th>No</th>
                    <th>Hari</th>
                    <th>Nama Matakuliah</th>
                 </tr>";

        foreach ($data as $i => $d) {
            $res .= "<tr>
                <td align='center'>" . ($i + 1) . "</td>
                <td>{$d->hari}</td>
                <td>{$d->nama_matkul}</td>
            </tr>";
        }

        return $res . "</table>";
    }
}