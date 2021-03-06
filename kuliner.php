<?php

$response = array();
$response["kuliner"] = array();

$datasingle1 = array();
$datasingle1["id"] = "1";
$datasingle1["nama"] = "Kopi Sadis";
$datasingle1["alamat"] = "Jalan Besar Tembung, Batang Kuis, Hutan, Kec. Percut Sei Tuan, Kota Medan, Sumatera Utara 20237";
$datasingle1["jam_buka_tutup"] = "Setiap Hari pukul 11.00 - 23.00 WIB";
$datasingle1["kordinat"] = "3.597735, 98.750344";
$datasingle1["gambar_url"] = "http://localhost/apifemi/foto/1kuliner_kopisadis.jpeg";
$datasingle1["kategori"] = "Kuliner Inovasi";

$datasingle2 = array();
$datasingle2["id"] = "2";
$datasingle2["nama"] = "Excelso - Bandara Internasional Kualanamu";
$datasingle2["alamat"] = "Jl. Bandara Kuala Namu, Ps. Enam Kuala Namu, Kec. Beringin, Kabupaten Deli Serdang, Sumatera Utara 20553";
$datasingle2["jam_buka_tutup"] = "Setiap Hari Pukul 10.00 WIB - 22.00 WIB.";
$datasingle2["kordinat"] = "3.635603, 98.880666";
$datasingle2["gambar_url"] = "http://localhost/apifemi/foto/2kuliner_excelso.jpeg";
$datasingle2["kategori"] = "Kuliner Inovasi";

$datasingle3 = array();
$datasingle3["id"] = "3";
$datasingle3["nama"] = "Budaya Resto";
$datasingle3["alamat"] = "Jl. Raya Medan Jl. Lokasi No.KM. 12, RW.5, Ujung Serdang, Tj. Morawa, Kabupaten Deli Serdang, Sumatera Utara 20362";
$datasingle3["jam_buka_tutup"] = "Setiap Hari Pukul 11.00 WIB - 22.00 WIB.";
$datasingle3["kordinat"] = "3.526950, 98.758899";
$datasingle3["gambar_url"] = "http://localhost/apifemi/foto/3kuliner_budaya.jpeg";
$datasingle3["kategori"] = "Kuliner Inovasi";

$datasingle4 = array();
$datasingle4["id"] = "4";
$datasingle4["nama"] = "Hot Plate Kita Kita";
$datasingle4["alamat"] = "Jl. Mh. Thamrin, Petapahan, Kec. Lubuk Pakam, Kabupaten Deli Serdang, Sumatera Utara 20517";
$datasingle4["jam_buka_tutup"] = "Setiap Hari pukul 10.00 - 00.00 WIB";
$datasingle4["kordinat"] = "3.557559, 98.868186";
$datasingle4["gambar_url"] = "http://localhost/apifemi/foto/4kuliner_plate.jpeg";
$datasingle4["kategori"] = "Kuliner Inovasi";

$datasingle5 = array();
$datasingle5["id"] = "5";
$datasingle5["nama"] = "Dapur Nek Aji";
$datasingle5["alamat"] = "Jl. Bersama, Tj. Garbus Satu, Kec. Lubuk Pakam, Kabupaten Deli Serdang, Sumatera Utara 20518";
$datasingle5["jam_buka_tutup"] = "Setiap Hari pukul 10.00 - 22.00 WIB";
$datasingle5["kordinat"] = "3.560730, 98.879815";
$datasingle5["gambar_url"] = "http://localhost/apifemi/foto/5kuliner_nek.jpeg";
$datasingle5["kategori"] = "Kuliner Inovasi";

$datasingle6 = array();
$datasingle6["id"] = "6";
$datasingle6["nama"] = "Kawan Burger";
$datasingle6["alamat"] = "Jalan Raya Lintas Tengah Galang Tanjung Garbus, Tj. Garbus II, Kec. Pagar Merbau, Kabupaten Deli Serdang, Sumatera Utara 20551";
$datasingle6["jam_buka_tutup"] = "Setiap Hari pukul 18.00 - 22.00 WIB";
$datasingle6["kordinat"] = "3.512627, 98.902140";
$datasingle6["gambar_url"] = "http://localhost/apifemi/foto/6kuliner_kawan.jpeg";
$datasingle6["kategori"] = "Kuliner Inovasi";

array_push($response["kuliner"], $datasingle1);
array_push($response["kuliner"], $datasingle2);
array_push($response["kuliner"], $datasingle3);
array_push($response["kuliner"], $datasingle4);
array_push($response["kuliner"], $datasingle5);
array_push($response["kuliner"], $datasingle6);

echo json_encode($response);

?>
