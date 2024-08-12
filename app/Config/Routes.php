<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/pegawai', 'Pegawai::index');
$routes->get('/kategori', 'Kategori::index');
$routes->get('/label', 'Label::index');
$routes->get('/berita', 'Berita::index');

//view tambah data
$routes->get('/tambah_pegawai', 'Pegawai::v_tambah_pegawai');
$routes->get('/tambah_kategori', 'Kategori::insert');
$routes->get('/tambah_label', 'Label::insert');

//action tambah
$routes->post('/tlabel', 'Label::save');
$routes->post('/tpegawai', 'Pegawai::save');

//hapus
$routes->delete('hapus/(:num)', 'Label::deleteLabel/$1');
$routes->delete('hapus_pegawai/(:num)', 'Pegawai::deletepegawai/$1');
