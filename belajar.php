<?php

// $teman = "paat";
// if($teman == "paat"){
//     echo "lu asik bang";
// }else{
//     echo "lu sok asik bang";
// }
// $angka = 4;

// pembelajaran switch case

// switch($angka){
//     case 1;
//         echo "satu";
//             break;
//     case 2;
//         echo "dua";
//             break;
//     case 3;
//         echo "tiga";
//             break;
//     case 4;
//         echo "empat";
//             break;
//     case 5;
//         echo "lima";
//             break;
//     case 6;
//         echo "enam";
//             break;
//     case 7;
//         echo "tujuh";
//             break;
//     case 8;
//         echo "delapan";
//             break;
//     case 9;
//         echo "sembilan";
//             break;
// }

// for($x=1; $x <=20;$x++){
//     echo $x;
// }

// ini array
// $array = [];
// $array[] = 'aku satu';
// $array[] = 'aku duwa';
// $array[] = 'aku tiga';
// $array[] = 'aku empat';
// $array[] = 'aku lyma';
// $array[] = 'aku enhamh';
// echo '<pre>';
// print_r($array);


// $nilai = floatval(readline("Masukkan nilai Anda: "));

// if ($nilai > 90) {
//     $predikat = "A+";
// } elseif ($nilai > 80) {
//     $predikat = "A";
// } elseif ($nilai > 70) {
//     $predikat = "B+";
// } elseif ($nilai > 60) {
//     $predikat = "B";
// } elseif ($nilai > 50) {
//     $predikat = "C+";
// } elseif ($nilai > 40) {
//     $predikat = "C";
// } elseif ($nilai > 30) {
//     $predikat = "D";
// } else {
//     $predikat = "E";
// }

// echo "Predikat: " . $predikat;
<?php
if($_POST){
    $nama_siswa=$_POST['nama_siswa'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id_kelas=$_POST['id_kelas'];
    if(empty($nama_siswa)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";

    }elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_siswa.php';</script>";

    }elseif(empty($password)){
        echo"<script>alert('password tidak boleh kosong');location.href='tambah_siswa.php';</script>";

    }else{
        include "koneksi.php";
            $insert=mysqli_query($koneksi,"insert into siswa(nqma_siswa, tanggal_lahir, gender, alamat, username, password, id_kelas) value ('".$nama_siswa."','".$tanggal_lahir."','".$gender."','".$alamat."','".$username."','".md5($password)."','".$id_kelas."')") 
            or 

        die(mysqli_error($koneksi));
            if($insert){
                echo "<script>alert('sukses selalu siswa');location.href='tambah_siswa.php';</script>";

                }else{
                    echo "<script>alert('gagal selalu nak');location.href='tambah_siswa.php';</script>";
            }
    }
}
?>
?>
