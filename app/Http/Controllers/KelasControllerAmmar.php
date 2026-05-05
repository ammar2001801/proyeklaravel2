<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class KelasControllerAmmar extends Controller {
    public function index() {
        $data = DB::table('t_kelas_ammar')->get();

        $res = "<h2>Data Kelas - Ammar</h2>";
        $res .= "<table border='1'>";
        $res .= "<tr>
                    <th>No</th>
                    <th>Kode Kelas</th>
                    <th>Nama Kelas</th>
                 </tr>";

        foreach ($data as $i => $d) {
            $res .= "<tr>
                <td align='center'>" . ($i + 1) . "</td>
                <td>{$d->kode_kelas}</td>
                <td>{$d->nama_kelas}</td>
            </tr>";
        }

        return $res . "</table>";
    }
}