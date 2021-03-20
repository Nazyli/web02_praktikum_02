<?php

function keterangan($nilai)
{
    if ($nilai >= 55) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}
function gradeNilai($nilai)
{
    if ($nilai >= 0 && $nilai <= 35) {
        return "E";
    } else if ($nilai >= 36 && $nilai <= 55) {
        return "D";
    } else if ($nilai >= 56 && $nilai <= 69) {
        return "C";
    } else if ($nilai >= 70 && $nilai <= 84) {
        return "B";
    } else if ($nilai >= 85 && $nilai <= 100) {
        return "A";
    } else {
        return "I";
    }
}
function predikat($grade)
{
    switch ($grade) {
        case "E":
            return "Sangat Kurang";
            break;
        case "D":
            return "Kurang";
            break;
        case "C":
            return "Cukup";
            break;
        case "B":
            return "Baik";
            break;
        case "A":
            return "Sangat Baik";
            break;
        default:
            return "Tidak Ada";
    }
}

?>