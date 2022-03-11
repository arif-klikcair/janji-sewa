
<?php 
  $data_faq = '[{"q":"Apa itu janjisewa?","a":"janjisewa adalah platform listing yang memfasilitasi perjanjian sewa menyewa antar pelaku UMKM (khususnya bidang kuliner & groceries) dengan penyedia tempat agar perjanjiannya bersifat sah dan tak bertentangan dengan peraturan perundang-undangan."},{"q":"Bagaimana cara kerja janjisewa?","a":"<strong>Sebagai Penyedia Tempat</strong> anda hanya perlu mendaftarkan sebagai Penyedia Tempat kemudian menginput data ruko/tempat sewaan anda dan mencantumkan kontak anda dalam waktu maksimal 24 jam, tempat sewaan anda akan masuk di listing kami. Kemudian kami akan merekomendasikan tempat sewaan anda kepada para Pelaku Usaha dan mereka akan menghubungi anda untuk proses negosiasi. Bila negosiasi berjalan dengan baik, anda dapat mengunduh perjanjian sewa menyewa di website janjisewa.<br /><br /><strong>Sebagai Pelaku Usaha</strong> anda dapat mendaftarkan diri sebagai Pelaku Usaha kemudian melengkapi data usaha anda. Kemudian anda dapat mencari dan menemukan tempat-tempat sewaan yang sesuai dengan kebutuhan anda. Pelaku Usaha akan menghubungi Penyedia Tempat untuk mendapatkan informasi lebih lanjut kemudian melakukan negosiasi. Bila negosiasi berjalan dengan baik, anda dapat mengunduh perjanjian sewa menyewa di website janjisewa."},{"q":"Bagaimana cara mendaftar sebagai Penyedia Tempat?","a":"Anda dapat mendaftar dengan link ______ atau memilih pilihan ‘Mendaftar sebagai Penyedia Tempat’ di halaman utama kami. Dalam pendaftaran ini anda akan langsung diminta untuk mendaftarkan tempat yang akan anda sewakan dengan minimal 3 Foto yang memiliki pencahayaan yang jelas dan anda harus mengisi kelengkapan wajib sebagai informasi atas tempat sewaan anda untuk menarik minat user."},{"q":"Bagaimana cara mendaftar sebagai Pelaku usaha?","a":"Anda dapat mendaftar dengan link ______ atau memilih pilihan ‘Mendaftar sebagai Pelaku Usaha’ di halaman utama kami. Dalam pendaftaran ini anda akan diminta untuk mengisi data diri anda dan data usaha anda."},{"q":"Bagaimana cara menghubungi Penyedia Tempat yang saya minati?","a":"Anda dapat menghubungi tim janjisewa melalui email dan kami akan memberikan kontak Penyedia Tempat kepada anda."},{"q":"Apakah Penyedia Tempat yang listing disini kredibel?","a":"janjisewa tidak menjamin kredibilitas dari setiap Penyedia tempat dan Pelaku Usaha, sehingga anda harus secara sadar dan berhati-hati dalam memilih tempat sewa dan menerima penyewa"},{"q":"Saya seorang agen properti, bisakah saya listing disini?","a":"Bisa, bila anda bukanlah pemilik dari tempat yang disewakan, anda juga dapat listing di janjisewa."},{"q":"Bagaimana proses perjanjian sewa yang dilakukan di janjisewa?","a":"Kedua pihak yaitu Pelaku Usaha dan Penyedia Tempat dapat mendownload format perjanjian sewa yang dapat diubah sesuai kebutuhan, perjanjian sewa ini sudah sesuai dengan undang-undang yang berlaku."}]';
  $array_data_faq = json_decode($data_faq);
?>
<section>
  <span class="section-title">Frequently Asked Questions</span>
  <div class="section-content">
    <ol class="faq">
      <?php foreach ($array_data_faq as $key => $faq) {?>
        <li class="judul-list"><?=$faq->q?></li>
        <div class="list-content">
          <p><?=$faq->a?></p>
        </div>
      <?php } ?>
    </ol>
  </div>
</section>