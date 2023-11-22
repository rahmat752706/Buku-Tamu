<?php

                    // Report all errors except E_NOTICE
                    error_reporting(error_reporting() & ~E_NOTICE);
                    //error_reporting(level);
                    include "koneksi.php";
                    //include 'filename';

                        $page = isset($_GET['page']) ? $_GET['page'] : "";
                        $aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";

                         if ($page == "tamu") {
                            if ($aksi == "") {
                                include "page/tamu/tamu.php";
                            }elseif ($aksi == "tambah") {
                                include "page/tamu/tambah.php";
                            }elseif ($aksi == "create") {
                                include "page/tamu/create.php";
                            }elseif ($aksi == "delete") {
                                include "page/tamu/delete.php";
                            }elseif ($aksi == "edit") {
                                include "page/tamu/edit.php";
                            }elseif ($aksi == "update") {
                                include "page/tamu/update.php";
                            }elseif ($aksi == "details") {
                                include "page/tamu/details.php";
                            } 
                        }elseif ($page == "cetak") {
                            if ($aksi == "") {
                                include "page/cetak/cetak.php";
                            }elseif ($aksi == "details") {
                                include "page/cetak/details.php";
                            }
                        }elseif ($page == "user") {
                            // if ($aksi == "") {
                            //     include "page/cetak/user.php";
                            // }elseif ($aksi == "details") {
                            //     include "page/user/details.php";
                            // }
                            include "page/user/details.php";
                            
                        }elseif ($page == "data") {
                                include "page/data/data.php";
                           
                        }elseif ($page == ""){
                            include "home.php";
                        }

                   ?>