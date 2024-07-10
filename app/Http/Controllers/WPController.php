<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WPController extends Controller
{
    public function calculateWP()
    {
        // Fetch data
        $alternatives = DB::table('alternative')->get();
        $criteria = DB::table('criteria')->get();
        $values = DB::table('nilaiku')->get();

        // Prepare arrays for computation
        $criteriaData = [];
        foreach ($criteria as $criterion) {
            $criteriaData[$criterion->id] = [
                'bobot' => $criterion->bobot,
                'tipe' => $criterion->tipe,
            ];
        }

        $alternativeData = [];
        foreach ($alternatives as $alt) {
            $alternativeData[$alt->id] = [
                'nama' => $alt->nama,
                'nilai' => [],
            ];
        }

        foreach ($values as $value) {
            $alternativeData[$value->alt_id]['nilai'][$value->kri_id] = $value->nilai;
        }

        // Normalisasi bobot
        // foreach ($criteriaData as $kriId => $kriteria) {
        //     $dataKriteria[$kriId]['bobot_normalized'] = $kriteria['bobot'] / $totalBobot;
        // }

        // $dataAlternatif = [];
        // foreach ($alternatives as $alt) {
        //     $dataAlternatif[$alt->id] = [
        //         'nama' => $alt->nama,
        //         'nilai' => [],
        //     ];
        // }

        // foreach ($values as $value) {
        //     $dataAlternatif[$value->alt_id]['nilai'][$value->kri_id] = $value->nilai;
        // }

        // Calculate S and total S
        $totalS = 0;
        foreach ($alternativeData as $altId => $alt) {
            $S = 1;
            foreach ($alt['nilai'] as $kriId => $nilai) {
                $bobot = $criteriaData[$kriId]['bobot'];
                $tipe = $criteriaData[$kriId]['tipe'];
                if ($tipe == 'cost') {
                    $S *= pow($nilai, -$bobot);
                } else {
                    $S *= pow($nilai, $bobot);
                }
            }
            $alternativeData[$altId]['S'] = $S;
            $totalS += $S;
        }

        // Calculate V and prepare output
        $output = [];
        foreach ($alternativeData as $altId => $alt) {
            $V = $alt['S'] / $totalS;
            $output[] = [
                'nama' => $alt['nama'],
                'S' => $alt['S'],
                'V' => $V,
            ];
        }

        // Sort output by V value descending
        usort($output, function ($a, $b) {
            return $b['V'] <=> $a['V'];
        });

        // Display the result
        return view('wp', ['rankedAlternatives' => $output, 'totalS' => $totalS]);
    }
}

