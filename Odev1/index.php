<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php define("baslik", "Film Listesi"); ?>
    <h1><?php echo baslik; ?></h1>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item">Macera</li>
                    <li class="list-group-item">Dram</li>
                    <li class="list-group-item">Komedi</li>
                    <li class="list-group-item">Korku</li>
                </ul>
            </div>
            <div class="col-9">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="img-fluid" src="img/1.jpeg" alt="">
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php
                                       $film_baslik = "Paper Lives";
                                       $url = strtolower(str_replace(' ', '-', $film_baslik)) . ".html";
                                       echo "<a href=\"$url\">$film_baslik</a>";
                                    ?>
                                </h5>
                                <p class="card-text">
                                    <?php
                                    $aciklama= "Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)";
                                    echo ucfirst(strtolower($aciklama))."<br>";
                                    $aciklamaKisa = substr($aciklama, 0, 50) . "...";
                                    echo $aciklamaKisa;
                                    ?>
                                </p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success">Yorum: 55</span>
                                    <span class="badge bg-success">Beğeni: 85</span>
                                    <span class="badge bg-success">Viyonda: Evet</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row">

                        <div class="col-3">
                            <img class="img-fluid" src="img/2.jpeg" alt="">
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title">
                                <?php
                                       $film_baslik = "Walking Dead";
                                       $url = strtolower(str_replace(' ', '-', $film_baslik)) . ".html";
                                       echo "<a href=\"$url\">$film_baslik</a>";
                                    ?>
                                </h5>
                                <p class="card-text">
                                <?php
                                    $aciklama= "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.";
                                    echo ucfirst(strtolower($aciklama))."<br>";
                                    $aciklamaKisa = substr($aciklama, 0, 50) . "...";
                                    echo $aciklamaKisa;
                                    ?>
                                </p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success">Yorum: 55</span>
                                    <span class="badge bg-success">Beğeni: 85</span>
                                    <span class="badge bg-success">Viyonda: Evet</span>
                                </div>
                            </div>
                        </div>
                    </div>
          1   </div>
            </div>
        </div>
    </div>
</body>
</html>