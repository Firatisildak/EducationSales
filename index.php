<div class="upside">
  <?php
  include("inc/head.php");
  include("functions/routing.php");
  ?>
  <div class="container">
    <div class="row">
      <div class="home-content col-md-4" id="main_Contant">
        <span class="multiple-text text-white"></span>
      </div>
    </div>
  </div>
</div>
<div class="container" id="aboutUs">
  <h3 class="h3l">Hakkımızda</h3>
  <div class="row" id="aboutWrite">
    <div class="home-content col-md-12 col-12">
      <?php
        abouttext(900);
      ?>
      <img src="img/banner1.jpg" alt="logo" class="img-fluid">
    </div>
  </div>
</div>
<section id="education">
  <div class="container">
    <h3 class="educationTitle">Eğitimler</h3>
    <!--alt satırdaki div yapısının içine own yapımızı kullana bilmek için kütüphaneleri dahil ettim.-->
    <div class="owl-carousel own-theme pt-4">
      <?php
      $menuItems2 = array();
      //Alt'daki kod parçası bizim kayıtlı derslerimizi getiriyor ve bu kodları bir foreach yapısı ile derslerimizi kayıt ilgili koda getiriyor.
      $result2 = $db->query("SELECT * FROM cardlesson");
      if ($result2->rowCount() > 0) {
        while ($row = $result2->fetch(PDO::FETCH_ASSOC)) { //fetch(PDO::FETCH_ASSOC) yöntemi, sonuç kümesinden bir satırı alır ve bu satırı bir dizi olarak döndürür.
          $menuItem2 = array("lessonimg" => $row["cardLessonImg"], "title" => $row["cardLessonTitle"], "write" => $row["cardLessonWrite"]); //Döngü gövdesi kısmını özelleştirebilirsiniz. Bu bölümde, $row dizisinin herhangi bir özelliğini kullanabilirsiniz. Örneğin, $row['column_name'] şeklinde bir sütun adını kullanarak belirli bir sütundaki verilere erişebilirsiniz.
          $menuItems2[] = $menuItem2; // Diziye her adımda bir öğe eklenir
        }
      } else {
        echo "Veritabanında hiç veri bulunamadı.";
      }
      // alttaki her satırda "data-merge=1.5" özelliğini kullandım çünkü cardların own yapısındaki şekle oturması gerekiyor. kullandığım fotoğrafların yapısı own yapısına büyük geldi ve ben bu sorunu böyle çözdüm.
      foreach ($menuItems2 as $item) {
        echo '<div class="card" data-merge="1.5">';
        echo '<a href="education_Detail.php"><img src="img/education_Img/' . $item["lessonimg"] . '" alt="logo" class="img-fluid"></a>';
        echo '<h5 class="titleCard">' . $item["title"] . '</h5>';
        echo '<p class="cardp">' . $item["write"] . '</p>';
        echo '</div>';
      }
      ?>
    </div>
  </div>
</section>
<section id="educator">
  <div class="container">
    <h3 id="educatorh3">Eğitmenler</h3>
    <div class="row">
      <div class="d-flex">
        <?php
        $menuItems = array();
        //Alt'daki kod parçası bizim menüdeki kayıtlı verilerimizi getiriyor ve bu kodları bir foreach yapısı ile menülerin kayıt olduğu nav bar kısmındaki ilgili koda getiriyor.
        $result = $db->query("SELECT * FROM educator_table");
        if ($result->rowCount() > 0) {
          while ($row = $result->fetch(PDO::FETCH_ASSOC)) { //fetch(PDO::FETCH_ASSOC) yöntemi, sonuç kümesinden bir satırı alır ve bu satırı bir dizi olarak döndürür.
            $menuItem = array("img" => $row["imgLink"], "name" => $row["nameSurname"], "text" => $row["aboutWrite"], "facebook" => $row["faceLink"], "linkedin" => $row["linkedinLink"], "github" => $row["githubLink"]); //Döngü gövdesi kısmını özelleştirebilirsiniz. Bu bölümde, $row dizisinin herhangi bir özelliğini kullanabilirsiniz. Örneğin, $row['column_name'] şeklinde bir sütun adını kullanarak belirli bir sütundaki verilere erişebilirsiniz.
            $menuItems[] = $menuItem; // Diziye her adımda bir öğe eklenir
          }
        } else {
          echo "Veritabanında hiç veri bulunamadı.";
        }
        unset($db); // Veritabanı bağlantısını kapatma

        foreach ($menuItems as $item) {
          echo '<div class="col-md-3">';
          echo '<img src="img/educator_Img/' . $item["img"] . '" class="img-fluid oval">';
          echo '<h4 class="educatorName">' . $item["name"] . '</h4>';
          echo '<p class="educatorp">';
          echo '' . $item["text"] . '';
          echo '</p>';
          echo ' <div class="egitmen-icon">';
          echo ' <a href="' . $item["facebook"] . '"><i class="fa-brands fa-facebook social"></i></a>';
          echo ' <a href="' . $item["linkedin"] . '"><i class="fa-brands fa-linkedin social"></i></a>';
          echo '<a href="' . $item["github"] . '"><i class="fa-brands fa-github social"></i></a>';
          echo '</div>';
          echo '</div>';
        }
        ?>
      </div>
    </div>
  </div>
</section>
<section id="communication">
  <div class="container">
    <h2 id="hColor">İletişim</h2>
    <div class="row" id="opaqueRow">
      <div class="col-md-6 col-12">
        <div class="row">
          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <!--alt satırdaki class kısmındaki form-control-lg yapısı bizim kutularımızın boyutunu ayarlar lg büyük sm küçük vb.-->
            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Ad Soyad">
          </div>
          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="email" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Email Adresiniz">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Telefon Numarası">
          </div>
          <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Konu Başlığı">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" placeholder="Mesaj Giriniz" rows="6"></textarea>
          </div>
        </div>
        <button type="button" class="btn btn-primary mt-5 mb-4 pe-5 ps-5">Gönder</button>
      </div>
      <div class="col-md-6 mt-4 mb-3">
        <div class="map-area">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49747.59878108741!2d26.926306506617024!3d38.80439927362403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ba304605416a23%3A0xa3901eb7112b67fe!2zQWxpYcSfYSwgU2FtdXJsdSwgQWxpYcSfYS_EsHptaXI!5e0!3m2!1str!2str!4v1680784012105!5m2!1str!2str" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
  <?php
  include("inc/footer.php");
  ?>
</section>
<!--alt satır own Carouselden bilgisyarımızda olmayan kısmı yani kütüphanesini netten çağırmak için kullandığımız link -->
<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
<!--alt satırdaki bağlantıyı own Carouselden indirmiş olduğum owl dosyasındaki bağlantılar ile bağladım card yapıları kendi kendine kaya bilsin diye. javascript kısmı-->
<script src="owl/owl.carousel.min.js"></script>
<!--alt satır bootstrap bağlantısını sağlıyor.-->
<script src="bootstrap.js"></script>
<!--alt satır bizim javascript kısmımız ile bağlantıyı sağlıyor. Bu bağlantıyı en alta yazdım çünkü kart yapısını oluşturmadan javascript dosyasını oluşturmak mantıklı değil.-->
<script src="owl/script.js"></script>

<!-- scroll reveal alttaki bizim yazılarımızın sağdan soldan gelmesini sağlayan kütüphane-->
<script src="https://unpkg.com/scrollreveal"></script>
<!-- typed js alttaki bizim yazılarımızın kendiliğin yazılıp silinmesini sağyan kütüphanedir. sağlayan kütüphane-->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<script>
  /*==============================scroll reveal============== */

  ScrollReveal({ //Bu bölümdeki bütün kodlar bizim yazılarımızın ve fotomuzun sağdan soladan gelmesini sağlıyor.
    reset: true,
    distance: '80px',
    duration: 2000,
    delay: 200
  });

  ScrollReveal().reveal('.home-content p', {
    origin: 'right'
  });
  ScrollReveal().reveal('.home-content h1', {
    origin: 'left'
  });
</script>
<script>
  /*==============================typed js============== */
  const typed = new Typed('.multiple-text', {
    strings: ['<i class="fa-solid fa-code"></i>Geleceği Bizimle Kodla', 'Fırat Akademi'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 100,
    loop: true
  });
</script>
</body>

</html>