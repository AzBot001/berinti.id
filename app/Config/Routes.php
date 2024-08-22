<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home_kategori', 'Home::kategori');
$routes->get('/detail_berita/(:segment)', 'Home::detail_berita/$1');
$routes->get('/login_admin', 'Login::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/pegawai', 'Pegawai::index');
$routes->get('/kategori', 'Kategori::index');
$routes->get('/label', 'Label::index');
$routes->get('/berita', 'Berita::index');

//view tambah data
$routes->get('/tambah_pegawai', 'Pegawai::v_tambah_pegawai');
$routes->get('/tambah_kategori', 'Kategori::insert');
$routes->get('/tambah_label', 'Label::insert');
$routes->get('/vtambah_berita', 'Berita::v_tambahberita');

//view edit
$routes->get('/vedit_label/(:num)', 'Label::v_updateLabel/$1');
$routes->get('/vedit_pegawai/(:num)', 'Pegawai::v_updatepegawai/$1');
$routes->get('/vedit_kategori/(:num)', 'Kategori::v_updatekategori/$1');
$routes->get('/vedit_berita/(:num)', 'Berita::v_updateberita/$1');

//action tambah
$routes->post('/tlabel', 'Label::save');
$routes->post('/tpegawai', 'Pegawai::save');
$routes->post('/tkategori', 'Kategori::save');
$routes->post('/tsub', 'Kategori::save_sub');
$routes->post('/tberita', 'Berita::save_berita');

//action edit
$routes->post('/edittlabel/(:segment)', 'Label::actedit_updateLabel/$1');
$routes->post('/edittpegawai/(:segment)', 'Pegawai::actedit_updatepegawai/$1');
$routes->post('/edittkategori/(:segment)', 'Kategori::actedit_updatekategori/$1');
$routes->post('/edittsubkategori/(:segment)', 'Kategori::actedit_updatesubkategori/$1');
$routes->post('/edittberita/(:segment)', 'Berita::actedit_updateberita/$1');

//post status head
$routes->post('/status_head/(:segment)', 'Berita::status_beritahead/$1');
$routes->post('/status_head_kembali/(:segment)', 'Berita::status_kembali_beritahead/$1');

//action hapus
$routes->delete('hapus/(:num)', 'Label::deleteLabel/$1');
$routes->delete('hapus_pegawai/(:num)', 'Pegawai::deletepegawai/$1');
$routes->delete('hapus_kategori/(:num)', 'Kategori::deletekategori/$1');
$routes->delete('hapus_sub/(:num)', 'SubKategori::deletesub/$1');
$routes->delete('hapus_ber/(:num)', 'Berita::deleteber/$1');

//proses login
$routes->post('/loginproses', 'Login::proses');
$routes->get('/logout', 'Login::logout');
