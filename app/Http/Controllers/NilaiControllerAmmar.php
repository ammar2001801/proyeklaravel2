<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class NilaiControllerAmmar extends Controller {
    public function index() {
        $data = DB::table('t_nilai_ammar')->get();

        $res = "<h2>Data Nilai - Ammar</h2>";
        $res .= "<table border='1'>";
        $res .= "<tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Nilai</th>
                 </tr>";

        foreach ($data as $i => $d) {
            $res .= "<tr>
                <td align='center'>" . ($i + 1) . "</td>
                <td>{$d->nim}</td>
                <td>{$d->nama_mahasiswa}</td>
                <td align='center'>{$d->nilai}</td>
            </tr>";
        }

        return $res . "</table>";
    }
}