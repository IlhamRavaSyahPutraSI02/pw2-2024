<?php

function rata_rata($uts, $uas, $praktikum) {
	$total = $uts + $uas + $praktikum;
	$rata_rata = $total / 3;
	return $rata_rata;
  }

  
function kelulusan($total_nilai) {
	if ($total_nilai > 55) {
	  $status = "Lulus";
	} else {
	  $status = "Tidak lulus";
	}
	return $status;
  }

		function grade($total_nilai) {
			if ($total_nilai <= 100 && $total_nilai >= 85) {
			  $grade = "A";
			  $predikat  = "Sangat Memuaskan";
			} elseif ($total_nilai <= 84 && $total_nilai >= 70) {
				$grade = "B";
				$predikat  = "Memuaskan";
			} elseif ($total_nilai <= 69 && $total_nilai >= 56) {
				$grade = "c";
				$predikat  = "Cukup";
			} elseif ($total_nilai <= 55 && $total_nilai >= 36) {
				$grade = "D";
				$predikat  = "Tidak Memuaskan";
			} elseif ($total_nilai <= 35 && $total_nilai >= 0) {
				$grade = "E";
				$predikat  = "Sangat Tidak Memuaskan";
			} else {
			  $grade = "I";
			}
			return [$grade,$predikat];
		}

?>