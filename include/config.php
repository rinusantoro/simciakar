<?php
// data desa
$desa["kode"] = "36.03.19.2007";
$desa["nama"] = "Ciakar";
$desa["alamat"] = "Jl. Masjid Jami' Al-Hidayah";
$desa["tlp"] = "3903232";
$desa["kades"] = "Muhammad Nur Jalyudin";
$desa["kades_nip"] = "";
$desa["sekdes"] = "Muhammad Nur Arsyudin";
$desa["sekdes_nip"] = "0009.009.34343";
$desa["tt_kades"] = "Kepala Desa Ciakar";
$desa["tt_sekdes"] = "An.KEPALA DESA CIAKAR<br />SEKRETARIS DESA";
// nama kecamatan
$desa["kecamatan"] = "Panongan";
$desa["kabupaten"] = "Tangerang";
// untuk pilihan
$agama = array("Pilih agama anda","Islam","Kristen_Katolik","Kristen_Protestan","Hindhu","Budha","Kong_Huchu","Lainnya");
$s_pernikahan = array("Pilih status anda","belum_nikah","nikah","janda/duda","lainnya");
$j_kelamin = array("Pilih jenis kelamin ","L" => "Laki - Laki","P" => "Perempuan"); 
$gol_darah = array("Pilih golongan darah","A","AB","B","O","--");
// gunakan underscore(_) sebagai pengganti spasi antara 2 kata
$dusun = array("Pilih dusun anda","Ciakar","Cipari","Tarisi", "Cukanggalih");
$rw = array("Pilih rw anda","01","02","03", "04", "05");
$rt = array("Pilih rt anda","01","02","03","04","05","06","07","08","09","10");
$ekonomi = array("Pilih ekonomi anda","Kaya","Cukup","Miskin","Lainnya");
// untuk jenis surat, SK = surat keterangan SKP = surat keterangan pindah,SL = Surat lahir, SM = Surat kematian
// jangan dirubah untuk kode suratnya
$j_surat = array("SK" => "470","SKP" => "475","SKA" => "470","SL" =>"474.1","SM" =>"474.3", "STM" => "470");
// untuk set nomer awal surat, isi dengan nama index pada jenis surat
$awal_nomer_surat["SK"]=3;
$awal_nomer_surat["SKP"]=0;
$awal_nomer_surat["SKA"]=0;
$awal_nomer_surat["SL"]=0;
$awal_nomer_surat["SM"]=0;

$surat_ket = array("Pilih Jenis Keterangan","Adat - Istiadat","Usaha","Domisili");
// untuk paging
$limit = 2;
$paging_tampil = 4;
?>
