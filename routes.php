<?php
// routes.php

require_once('../app/controllers/ControllerDashboard.php');
require_once('../app/controllers/ControllerDataPelatihan.php');
require_once('../app/controllers/ControllerDepartemen.php');
require_once('../app/controllers/ControllerHome.php');
require_once('../app/controllers/ControllerPelatihanKaryawan.php');

// Pastikan nama kelas benar
$controller = new ControllerDataPelatihan();
$controller1 = new ControllerHome();
$controller2 = new ControllerDepartemen();
$controller3 = new ControllerDashboard();
$controller4 = new ControllerPelatihanKaryawan();

$url = $_SERVER['REQUEST_URI'];
if ($url == '/home/index' || $url == '/') {
    $controller1->index();
} elseif ($url == '/dashboard/index') { // dashboard start
    $controller3->index();
} elseif ($url == '/data_pelatihan/index') { // data pelatihan start
    $controller->index();
} elseif ($url == '/data_pelatihan/create') {
    $controller->create();
} elseif ($url == '/data_pelatihan/store') {
    $controller->store();
} elseif (preg_match('/\/data_pelatihan\/edit\/(\d+)/', $url, $matches)) {
    $id_pelatihan = $matches[1];
    $controller->edit($id_pelatihan);
} elseif ($url == '/data_pelatihan/update') {
    $controller->update();
} elseif (preg_match('/\/data_pelatihan\/delete\/(\d+)/', $url, $matches)) {
    $id_pelatihan = $matches[1];
    $controller->delete($id_pelatihan);
} elseif ($url == '/departemen/index') { // departemen start
    $controller2->index();
} elseif ($url == '/departemen/create') {
    $controller2->create();
} elseif ($url == '/departemen/store') {
    $controller2->store();
} elseif (preg_match('/\/departemen\/edit\/(\d+)/', $url, $matches)) {
    $id_departemen = $matches[1];
    $controller2->edit($id_departemen);
} elseif ($url == '/departemen/update') {
    $controller2->update();
} elseif (preg_match('/\/departemen\/delete\/(\d+)/', $url, $matches)) {
    $id_departemen = $matches[1];
    $controller2->delete($id_departemen);
} elseif ($url == '/pelatihan_karyawan/index') { // pelatihan karyawan start
    $controller4->index();
} elseif ($url == '/pelatihan_karyawan/create') {
    $controller4->create();
} elseif ($url == '/pelatihan_karyawan/store') {
    $controller4->store();
} elseif (preg_match('/\/pelatihan_karyawan\/edit\/(\d+)/', $url, $matches)) {
    $id_pelatihanKaryawan = $matches[1];
    $controller4->edit($id_pelatihanKaryawan);
} elseif ($url == '/pelatihan_karyawan/update') {
    $controller4->update();
} elseif (preg_match('/\/pelatihan_karyawan\/delete\/(\d+)/', $url, $matches)) {
    $id_pelatihanKaryawan = $matches[1];
    $controller4->delete($id_pelatihanKaryawan);
}
