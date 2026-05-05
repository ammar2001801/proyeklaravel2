<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class KurikulumControllerAmmar extends Controller {
    public function index() {
        $data = DB::table('t_kurikulum_ammar')->get();

        $res = "<h2>Data Kurikulum - Ammar</h2>";
        $res .= "<table border='1'>";
        $res .= "<tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Kurikulum</th>
                 </tr>";

        foreach ($data as $i => $d) {
            $res .= "<tr>
                <td align='center'>" . ($i + 1) . "</td>
                <td>{$d->kode}</td>
                <td>{$d->nama_kurikulum}</td>
            </tr>";
        }

        return $res . "</table>";
    }
}