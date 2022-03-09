<?php 
    $link_penyedia_tempat = "https://forms.gle/zQQhV5oUbaBprTmu5";
    $link_pelaku_usaha = "https://forms.gle/vHNaNBRYVTaD2HDX8";
    $link_survey = "https://forms.gle/sgyoodwfLHPx81Cw8";
    $link_faq = "https://docs.google.com/document/d/1FvGmUXrNj4adaVsmTlskKhqC_4el3y9b_XsiiKvxlU8";
    $link_tentangkami = "https://docs.google.com/document/d/1V019A3LlILJmKkqfCVtqD6rdpifj6Djty_15xtdJdnU";

    $contact_telp = "-";
    $contact_email = "cs.janjisewa@gmail.com";

    $meta_title = "janjisewa";
    $meta_description = "janjisewa adalah platform listing yang memfasilitasi perjanjian sewa menyewa antar pelaku usaha UMKM (khususnya bidang kuliner & groceries) dengan penyedia tempat agar perjanjian bersifat sah dan tak bertentangan dengan peraturan perundang-undangan.";
    $meta_keyword = "janjisewa, perjanjian sewa menyewa, cari tempat usaha, UMKM";

    function base_url(){
        return sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == "0.0.0.0" || $_SERVER['SERVER_NAME'] == "127.0.0.1") ? '/janji-sewa' : ''
        );
    }