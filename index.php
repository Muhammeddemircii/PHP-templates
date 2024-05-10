<?php $title="anasayfa" ?>
<?php require 'partials/_veriables.php' ?>  <!--require: içerikten gelen veri yoksa projenin tamamını çalıştırmaz -->
<?php include 'partials/_header.php' ?>
    <main>
        <h1>En çok satan ürünler</h1>
        <?php include 'partials/_urunler.php' ?>
    </main>
<?php include 'partials/_footer.php'?>