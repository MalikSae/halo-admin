<?php
/*
Plugin Name: Halo Admin
Description: Menampilkan ucapan assalamualaikum di halaman dashboard admin WordPress.
Version: 1.0
Author: MalikSae.com
*/

add_action('admin_notices', function () {
    echo '<div class="notice notice-success is-dismissible">';
    echo '<p><strong>Assalamualaikum, Admin!</strong></p>';
    echo '</div>';
});
