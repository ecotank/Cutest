<?php
// require "page/page.php";
require "function.php";
resetWaktu();

// Login
$login_page = 'page/login/login_page.php';
$login_lupa_pass = 'page/login/login_lupa_password.php';
$login_verification = 'page/login/login_verification.php';
$login_ubah_password = 'page/login/login_ubah_password.php';

// Register
$register_page = 'page/register/register_page.php';
$profile_page = 'page/register/profile_page.php';
$register_verification = 'page/register/register_verification.php';

// Murid
$dashboard_page = 'page/murid/dashboard_page.php';
    // UJIAN
    $pilih_ujian = 'page/murid/ujian/pilih_ujian.php';
    $tampilan_ujian = 'page/murid/ujian/tampilan_ujian.php';
    $nilai = 'page/murid/ujian/nilai_ujian.php';
    // RAPORT
    $raport = 'page/murid/raport/raport.php';
    // Absensi
    $absensi = 'page/murid/absensi/absensi.php';

// Guru
$guru_page = 'page/guru/guru_dashboard.php';
    // ujian
    $input_ujian = 'page/guru/ujian/input_ujian.php';
    $input_jawaban = 'page/guru/ujian/input_jawaban.php';
    // raport
    $raport_page = 'page/guru/raport/raport.php';


// OPERator
$absensi_operator = 'page/operator/absensi.php';

// Admin
$admin_page = 'page/admin_page.php';


// Template
$nav = "page/template/nav_guru.php";
$nav_ujian = 'page/template/nav_ujian.php';
$logout = 'page/template/logout.php';





if( isset($_GET['page']) ){
$page = $_GET['page'];

    switch ($page) {
        // Murid
        case 'murid':
            include_once $dashboard_page;
            break;
        case 'home':
            include_once $dashboard_page;
            break;
            // Page Ujian
            case 'pilih_ujian':
                include_once $pilih_ujian;
                break;
            case 'ujian':
                include_once $tampilan_ujian;
                break;
            case 'nilai':
                include_once $nilai;
                break;
            // RAPORT
            case 'raport':
                include_once $raport;
                break;
            // ABSENSI
            case 'absensi':
                include_once $absensi;
                break;

        // Guru
        case 'guru':
            include_once $guru_page;
            break;
            // -> Input Ujian
            case 'input_ujian':
                include_once $input_ujian;
                break;
            case 'input_jawaban':
                include_once $input_jawaban;
                break;
            case 'raport_guru':
                include_once $raport_page;
                break;

        // Admin
        case 'admin':
            include_once $admin_page;
            break;

        // Operator
        case 'operator':
            include_once $absensi_operator;
            break;
        
        // Register
        case 'register':
            include_once $register_page;
            break;
        case 'register_verification':
            include_once $register_verification;
            break;

        // Login
        case 'login':
            include_once $login_page;
            break;
        case 'lupa_password':
            include_once $login_lupa_pass;
            break;
        case 'login_verification':
            include_once $login_verification;
            break;
        case 'ubah_password':
            include_once $login_ubah_password;
            break;

        // Template
        case 'logout':
            include_once $logout;
            break;

        // RANDOM
        case 'random':
            include_once "debug/random.php";
            break;
        case 'debug':
            include_once "debug/debug.php";
            break;

        default:
            include_once $dashboard_page; // jika isi page tidak diisi
            break;
    }
} else {
    include $dashboard_page; // jika tidak ada url page
}
// var_dump($_SESSION);
// echo '<br>';