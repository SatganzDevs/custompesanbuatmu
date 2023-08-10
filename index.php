<!DOCTYPE html>
<html>
  <meta charset='UTF-8'/><meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5' name='viewport'/><meta content='IE=edge' http-equiv='X-UA-Compatible'/>
    <title>Custom Pesanbuatmu</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"><script src="https://test.feeldream.repl.co/jsalert.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="https://feeldreams.github.io/main-icon.png"> 
    <link rel="apple-touch-icon" href="https://feeldreams.github.io/main-icon.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="index.css">
  <head>
    <title>Custom Pesanbuatmu</title>
  </head>
  <body>
  <?php
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $pesanList = file("pesan.txt", FILE_IGNORE_NEW_LINES);
  $pesanData = array();
  foreach($pesanList as $pesanItem) {
    $data = explode("|", $pesanItem);
    if ($data[0] == $id) {
      $pesanData = $data;
      break;
    }
  }
} else {
  $pesanList = file("pesan.txt", FILE_IGNORE_NEW_LINES);
  $maxId = 0;
  foreach($pesanList as $pesanItem) {
    $pesanData = explode("|", $pesanItem);
    $id = (int) $pesanData[0];
    if ($id > $maxId) {
      $maxId = $id;
    }
  }
  $id = $maxId + 1;
  //header("Location: ?id=$id");
  //exit();
}
if(isset($_POST['submit'])){
$id = $_POST['id'];
$pesan1 = $_POST['pesan1'];
$pesan2 = $_POST['pesan2'];
$pesan3 = $_POST['pesan3'];
$pesan4 = $_POST['pesan4']; 
$pesan5 = $_POST['pesan5']; 
$pesan6 = $_POST['pesan6'];
$pesanTerakhir = ".";
$pesan5 = str_replace(array("\r\n", "\n"), "<br>", $pesan5);
$pesan5 = str_replace("|", "", $pesan5);

$pesan1 = str_replace('"', '', $_POST['pesan1']);
$pesan2 = str_replace('"', '', $_POST['pesan2']);
$pesan3 = str_replace('"', '', $_POST['pesan3']);
$pesan4 = str_replace('"', '', $_POST['pesan4']);
$pesan5 = str_replace('"', '', $pesan5);
$pesan6 = str_replace('"', '', $_POST['pesan6']);

$file = 'pesan.txt';
$handle = fopen($file, 'r');

// Cek apakah file pesan.txt dapat dibuka
if ($handle === false) {
  echo "Terjadi kesalahan saat membuka file pesan.txt";
  exit;
}

$newData = $id . '|' . $pesan1 . '|' . $pesan2 . '|' . $pesan3 . '|' . $pesan4 . '|' . $pesan5 . '|' . $pesan6 . '|' . $pesanTerakhir;

$dataFound = false;
$output = '';

// Cek setiap baris pada file pesan.txt
while (($line = fgets($handle)) !== false) {
  $pesanData = explode("|", $line);
  $currentId = (int) $pesanData[0];

  // Jika id pada baris saat ini sama dengan id yang diinputkan
  if ($currentId == $id) {
    // Tandai bahwa data sudah ditemukan
    $dataFound = true;
    // Ganti data lama dengan data baru
    $line = $newData . "\n";
  }

  $output .= $line;
}

fclose($handle);

// Jika data belum ditemukan, tambahkan data baru ke dalam file
if (!$dataFound) {
  $output .= $newData . "\n";
}

// Simpan data ke dalam file pesan.txt
$handle = fopen($file, 'w');
fwrite($handle, $output);
fclose($handle);

//header('Location: mulai.php?id=' . $id);
// Tampilkan SweetAlert berhasil disimpan dan pilihan Lihat Hasil atau Salin Link
  echo '<script>
    Swal.fire({
      title: "Berhasil Disimpan!",
      text: "Ingin Lihat Hasil atau Salin Link?",
      icon: "success",
      showCancelButton: true,
      confirmButtonText: "Lihat Hasil",
      cancelButtonText: "Salin Link"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = "https://custompesanbuatmu.satganzdevs.repl.co/mulai.php?id=' . $id . '";
      } else {
        const el = document.createElement("textarea");
        el.value = "https://custompesanbuatmu.satganzdevs.repl.co/mulai.php?id=' . $id . '";
        document.body.appendChild(el);
        el.select();
        document.execCommand("copy");
        document.body.removeChild(el);
        
        // Tampilkan SweetAlert berhasil salin link dan pilihan Kirim ke Whatsapp atau Lain Kali
        Swal.fire({
          title: "Berhasil Salin Link!",
          text: "Ingin Kirim ke Whatsapp?",
          icon: "success",
          showCancelButton: true,
          confirmButtonText: "Kirim Whatsapp",
          cancelButtonText: "Lain Kali"
        }).then((result) => {
          if (result.isConfirmed) {
            // Redirect ke Whatsapp dengan link yang sudah disalin
            window.location.href = "https://api.whatsapp.com/send?text=" + encodeURIComponent("https://custompesanbuatmu.satganzdevs.repl.co/mulai.php?id=' . $id . '");
          }
        });
      }
    });
  </script>';
}
?>
  <script>
  function generateUniqueId() {
  // Logika untuk menghasilkan ID unik
  // Misalnya, Anda dapat menggunakan timestamp atau algoritma acak
  // Pastikan ID yang dihasilkan cukup unik untuk kebutuhan Anda

  // Contoh implementasi menggunakan timestamp
  return Date.now().toString();
}

// Cek apakah nilai $id sudah ada di local storage
if (localStorage.getItem('idcustompesanbuatmu') === null) {
  // Jika belum ada, buat angka unik dan simpan ke local storage
  var uniqueId = generateUniqueId(); // Fungsi untuk menghasilkan angka unik
  localStorage.setItem('idcustompesanbuatmu', uniqueId);
}

// Ambil nilai $id dari local storage
var id = localStorage.getItem('idcustompesanbuatmu');
// Cek apakah pengguna sudah berada di halaman target dengan parameter query string 'id'
    if (id && window.location.href.indexOf('https://custompesanbuatmu.satganzdevs.repl.co/?id=' + id) !== -1) {
      // Jika sudah berada di halaman target, tidak perlu melakukan pengalihan halaman lagi
      console.log('Pengguna sudah berada di halaman target');
    } else {
      // Cek apakah nilai $id sudah ada di local storage
      if (!id) {
        // Jika belum ada, buat angka unik dan simpan ke local storage
        var uniqueId = generateUniqueId();
        localStorage.setItem('idcustompesanbuatmu', uniqueId);
        id = uniqueId; // Set nilai id untuk digunakan dalam pengalihan halaman
      }

      // Alihkan pengguna ke halaman target dengan menyertakan ID sebagai parameter query string
      window.location.replace("https://custompesanbuatmu.satganzdevs.repl.co/?id=" + id);
    }
</script>
    
    <div id="bodyblur">
     <!-- Wallpaper --><img src="https://feeldreams.github.io/pics/awan/5.jpg" id="wallpaper"/>
    </div>
    <form id="form" action="" method="POST">
        <h3>Custom<br></h3>
        <p>Edit kata-kata sesuka hatimu!</p>
        <p>TikTok: @feelthisray</p>
        <p><a href="https://instagram.com/rayyarrr" target="_blank">Tanya ke IG</a> — | — <a href="https://api.whatsapp.com/send?phone=6282126983296&text=Izin%20bertanya%20kak%20custompesanbuatmu%2C%0A%0A%28Masukkan%20pesan%29" target="_blank">Tanya ke WA</a></p>
      
        <input style="display:none" type="text" id="id" name="id" value="<?php echo $id ?>" readonly>

        <label>Pesan Pertama</label>
        <input type="text" placeholder="Hai Kamu 🥰" id="pesan1" name="pesan1" value="<?php echo isset($pesanData[1]) ? $pesanData[1] : '' ?>">
      
        <label>Pesan Kedua</label>
        <input type="text" placeholder="Semangat Jalani Harinya yaa 🤩" id="pesan2" name="pesan2" value="<?php echo isset($pesanData[2]) ? $pesanData[2] : '' ?>">

        <label>Pesan Ketiga</label>
        <input type="text" placeholder="Jaga Kesehatanmu 😍" id="pesan3" name="pesan3" value="<?php echo isset($pesanData[3]) ? $pesanData[3] : '' ?>">

        <label>Pesan Keempat</label>
        <input type="text" placeholder="Jangan Sampe Sakit! 😡" id="pesan4" name="pesan4" value="<?php echo isset($pesanData[4]) ? $pesanData[4] : '' ?>">

        <label>Pesan Kelima (Setelah Pesan Popup)</label>
        <textarea placeholder="Makasih udah mau bukain yaaaa ><" id="pesan5" name="pesan5"><?php echo isset($pesanData[5]) ? str_replace("<br>", "\n", $pesanData[5]) : '' ?></textarea>

        <label>Pesan Keenam</label>
        <input type="text" placeholder="I LOVE YOU ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️" id="pesan6" name="pesan6" value="<?php echo isset($pesanData[6]) ? $pesanData[6] : '' ?>">

        <button class="inibtn" type="submit" name="submit">Simpan dan Lihat Hasil</button>
      
       <!-- <div class="social" id="bawah">
          <div class="go"><label id="bagikan" for='forShare'><i class="fas fa-share"></i>  Bagikan</label></div>
          <div class="fb"><a id="lihat" href="" target="_blank"><i class="fas fa-paper-plane"></i>  Lihat Hasil</a></div>
        </div> -->

    </form>
    <script>
      //lihat.href="https://customdilihatyuk.feeldream.repl.co/mulai.php?id=<?php echo $id ?>";
    </script>
    <!--<form id="form" action="simpan_pesan.php" method="POST">
      <label for="id">ID</label>
      <input type="text" id="id" name="id" value="<?php echo $id ?>" readonly>
      <label for="pesan1">Pesan Pertama</label>
      <input type="text" id="pesan1" name="pesan1" value="<?php echo isset($pesanData[1]) ? $pesanData[1] : '' ?>">
      <label for="pesan2">Pesan Kedua</label>
      <input type="text" id="pesan2" name="pesan2" value="<?php echo isset($pesanData[2]) ? $pesanData[2] : '' ?>">
      <label for="pesan3">Pesan Ketiga</label>
      <input type="text" id="pesan3" name="pesan3" value="<?php echo isset($pesanData[3]) ? $pesanData[3] : '' ?>">
      <button type="submit">Kirim</button>
    </form>-->
  </body>
</html>