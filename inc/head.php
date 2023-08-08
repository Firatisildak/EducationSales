<?php
  include("inc/database_Connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0"> <!--user-scalable=0 bu kod ile sitenin mobilde yakınlaşırma ve uzaklaştırmayı önlüyor.-->
  <!--alt satır bizim bootstrap ile olan bağlantımızın css kısmını bağlıyor.-->
  <link rel="stylesheet" href="bootstrap.css">
  <title>Anasayfa | Kod Dünyası</title>
  <!--Alt'daki php kod parçası bizim her sayfa için ayrı olan css dosyalarının bağlantı koşullarını burada oluşturuyor.-->
  <?php
  $page = basename($_SERVER['PHP_SELF']); //$_SERVER['PHP_SELF'], şu anki çalışan PHP dosyasının adını ve yolu içeren bir süper global değişkendir. basename() fonksiyonu ise bir dosya yolunun dosya adını döndürür. Dolayısıyla $page değişkeni, şu anki çalışan PHP dosyasının adını içerecektir.
  $cssFile = '';

  switch ($page) {
    case 'index.php':
      $cssFile = './css/style.css'; //"./css/". bunu echodan sonra yazabilirsin. kodun kısalmış olur.
      break;
    case 'education_Detail.php':
      $cssFile = './css/educationDetailStyle.css';
      break;
    case 'education.php':
      $cssFile = './css/educationStyle.css';
      break;
    default:
      echo "Tanımlanamayan bir sayfadasınız yönlendiriliyorsunuz.";
      header('Refresh:2; index.php');
      break;
  }
  ?>
  <link rel="stylesheet" href="<?php echo $cssFile; ?>"><!--bu kodda üstteki php kodunun devamı.-->
  <!--alt satır font awesome ile bağlantıyı sağlıyor-->
  <script src="https://kit.fontawesome.com/0761d8fd00.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <!--alt satır yazı fontu için seçmiş olduğum kütüphane linki-->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
  <!--alt satırdaki bağlantıyı own Carouselden indirmiş olduğum owl dosyasındaki bağlantılar ile bağladım card yapıları kendi kendine kaya bilsin diye.   CSS kısmı-->
  <link rel="stylesheet" href="owl/owl.carousel.min.css">
  <link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg nav-bg"><!--yandaki nav-bg classı bizim navbarın rengini css kısmında değiştirmemiz için kullandığımız bir classtır. -->
    <div class="container">
      <img id="logoSize" src="img/benimLogo.png" alt="logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!--ms-auto bu kısım menüyü ortalıyor.-->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <?php
          $menuItems = array();
          //Alt'daki kod parçası bizim menüdeki kayıtlı verilerimizi getiriyor ve bu kodları bir foreach yapısı ile menülerin kayıt olduğu nav bar kısmındaki ilgili koda getiriyor.
          $result = $db->query("SELECT * FROM menutable ORDER BY siralama ASC");
          if ($result->rowCount() > 0) { //$result->rowCount() ifadesi, $result adlı sonuç kümesindeki satır sayısını döndüren bir yöntem çağrısıdır. Bu ifade, sonuç kümesindeki satır sayısını kontrol etmek için kullanılır.
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) { //fetch(PDO::FETCH_ASSOC) yöntemi, sonuç kümesinden bir satırı alır ve bu satırı bir dizi olarak döndürür.
              $menuItem = array("link" => $row["menuUrl"], "icon" => $row["menuIcon"], "text" => $row["menuName"]); //Döngü gövdesi kısmını özelleştirebilirsiniz. Bu bölümde, $row dizisinin herhangi bir özelliğini kullanabilirsiniz. Örneğin, $row['column_name'] şeklinde bir sütun adını kullanarak belirli bir sütundaki verilere erişebilirsiniz.
              $menuItems[] = $menuItem; // Diziye her adımda bir öğe eklenir
            }
          } else {
            echo "Veritabanında hiç veri bulunamadı.";
          }

          //alt'taki kod bloğu bizim array yapısında kullandığımız foreach yapısı bizim her bir $menuItems her seferinde $item değişkenine atayıp veritabaındaki veri kadar işlem yapıyor.
          foreach ($menuItems as $item) {
            echo '<li class="nav-item d-flex">';
            echo '<a class="nav-link active" aria-current="page" href="' . $item['link'] . '">';
            echo '<i ' . $item['icon'] . '></i>' . $item['text'] . '</a>';
            echo '<span class="brace">|</span>';
            echo '</li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>