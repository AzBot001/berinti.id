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

//tambah data
$routes->get('/tambah_pegawai', 'Pegawai::insert');
$routes->get('/tambah_kategori', 'Kategori::insert');
$routes->get('/tambah_label', 'Label::insert');
