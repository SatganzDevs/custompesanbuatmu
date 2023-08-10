<html><meta charset='UTF-8'/><meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5' name='viewport'/><meta content='IE=edge' http-equiv='X-UA-Compatible'/>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
  <script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
  <link href="/style.css" rel="stylesheet" type="text/css" />
  <head>
<title>Script HTML</title>
<!-- 
  Made with love by Rayys!

     Blog: https://PalingIT.com
     Instagram: @rayyarrr
     TikTok: @rayy4r
     Email: rayyar0703@gmail.com

  Thanks to all <3
-->
</head>
<style>
:root {
--warna-bg: rgba(0, 0, 0, .75); 
--warna-teks: white;
--warna-bingkai: rgba(255, 255, 255, .8);
--bingkai: 10px;
--gaya-font: 'Ubuntu', sans-serif;
}
@keyframes fanim {0% {background-position: 0% 0%;}25% {background-position: 100% 100%;} 50% {background-position: 0% 100%;} 75% {background-position: 50% 50%;} 100% {background-position: 0% 0%;}}
body{background-color:#101010;font-family:var(--gaya-font);padding: 25px;-webkit-user-select: none; -ms-user-select: none; user-select: none;} a{text-decoration:none;}
body::before{content:"\00A9  SatganzDevs!";color:white;opacity:0;font-size:2vw;position:fixed;bottom:25px;left:25px;z-index:2}
#bodyblur{display:block;position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.4);-webkit-backdrop-filter:blur(2px); backdrop-filter:blur(2px);transition:all 1s ease;}
#bodyblur img{opacity:.6;width:100%;height:100%}

@keyframes kont{0%  {left:-1px; top:-3px;} 50% {left:1px; top:3px;} 100% {left:-1px; top:-3px;}}
blockquote{opacity:0;visibility:hidden;transition:all .3s ease;position:relative;margin-top:120px;margin-left:0;margin-right:0;}
blockquote{width:400px;background:var(--warna-bg);color:var(--warna-teks);text-shadow: 0px 2px 2px rgba(0, 0, 0, .8);text-align:center;line-height:1.3em;padding:25px;border: 1px solid var(--warna-bingkai);border-radius:var(--bingkai);}
p{color:var(--warna-teks);font-size:15px;font-weight:700;line-height:1.4em;margin:0px;text-shadow: 0px 2px 2px rgba(0, 0, 0, .8);transition:all .3s ease;}
#kalimat{text-align:center;font-size:15px;font-weight:400;}

#katajawab{font-weight:400;margin:0;display:none;}
@keyframes rto{from {transform:scale(1);} to {transform:scale(1.1);}}
@keyframes aniopa{0% {transform: scale(1);} 50% {transform: scale(.75);} 100% {transform: scale(1);}}
#katabawah{transform:scale(.1);font-size:30px;font-weight:400}
#katatiga{font-size:18px;} #kataempat{font-size:13px;font-weight:400;text-align:right;}
@keyframes rtf{from {transform: rotate(0deg);} to {transform: rotate(360deg);}} @keyframes rt{from {transform: scale(.9);/* transform: rotate(-5deg); */} to {transform: scale(1);/* transform: rotate(5deg); */}}
#bq img{display:none;padding:10px;width:130px;height:130px;margin:20px 0 0 0;}
#bq img:first-child{display:inline-flex}
#akhiran{display:none;color:#FFC700;font-size:14px;text-align:center;background:rgba(0,0,0,.55);text-shadow: 0px;padding:10px;border-radius:var(--bingkai);line-height:10px;transition:all .2s ease;} #akhiran:hover{transform: scale(.9);opacity:.5;}

#pergeseran{opacity:0;visibility:hidden;transition:all 1s ease;display:flex;flex-wrap:nowrap;align-items:flex-start;justify-content:flex-start;position:relative;max-width:500px;padding:0 20px; overflow-y:hidden;overflow-x:scroll;scroll-behavior:smooth;scroll-snap-type:x mandatory; -ms-overflow-style:none;-webkit-overflow-scrolling:touch}
#pergeseran p{background:#003A76;color:white;border: 1px dashed #fff;border-radius:8px;padding:8px;display:flex;flex-wrap:nowrap;text-align:center;font-size:16px;font-weight:700;align-items:center;justify-content:center;flex-shrink:0; width:90%; min-height:130px;margin:0 15px 0 0; scroll-snap-align:center} #pergeseran > *:last-child{margin-right:0} #pergeseran:after{content:'';display:block;flex-shrink:0; align-self:stretch;padding-left:20px}
#pergeseran p b{display:block;} #pergeseran p b img{width:80px;height:80px;margin:20px 0;}
/*#pergeseran p b span{display:flex;}*/
#tm{color:#FFB400;transition:all .5s ease;} #tm:hover{transform: scale(.7);}
#idgeser{position:relative;top:30vh;font-size:17px;color:white}

#Tombol{opacity:0;margin:0;display:flex;align-items:left;list-style:none;transform: scale(.1);transition:all 1s ease;}
#Tombol a{cursor:pointer;display:inline-flex;align-items:center; margin:0;margin:12px 0 12px 0;transition:all .2s ease;padding:10px;outline:0;border:1px solid var(--warna-bingkai); border-radius:var(--bingkai);line-height:15px;background:var(--warna-bg);color:var(--warna-teks);font-size:12px;font-weight:400;white-space:nowrap;overflow:hidden;z-index:1} 
#Tombol a:hover{transform: scale(.90);opacity:.98;}
#buttonv2{position:absolute;font-size:15px;color:white;background:var(--warna-bg);padding:10px;border-radius:8px;line-height:10px;text-shadow: 0px 2px 2px rgba(0, 0, 0, .8);opacity:0}

.lovein{font-size:50px;display:flex;align-items:center;justify-content:center;transition:all .3s ease;}
.lovein svg{width:80px;height:80px;fill:#fefefe}

.content2{display:block;text-align:center;width:100%;height:180px;margin-top:50px;}
.content2 > *{display:flex;align-items:center;justify-content:center;margin-top:15px;font-size:17px;color:white}
.image img{border-radius:10%;transform:scale(.1);transition:all .8s ease;}
#k2 .image > *{margin-bottom:40px;} #k2{font-weight:700;font-size:17px;color:white;text-shadow: 0px 2px 2px rgba(0, 0, 0, .8);} #final1{transition:all 3s ease;}

#idkirim{font-size:13px;text-shadow: 0px 2px 2px rgba(0, 0, 0, .8);color:white;transition:all .5s ease;}
#idkirim{opacity:0;visibility:hidden;margin-top:100px} #idkirim:hover{transform:scale(.8);}

.content2{display:none;}
#Content{animation-name:none;animation-duration: 3s;animation-iteration-count: infinite;position:relative;opacity:0;margin-top:50px;width:100%;height:180px;transition:all 1.3s ease;}
#Content > *{display:flex;align-items:center;text-align:center;justify-content:center;margin-top:15px;}
#Content img{display:none;background:rgba(255,255,255, 1);border-radius:50%;padding:10px;width:110px;height:110px;margin:20px 0 0 0;}

#fotolove img{transition:all .5s ease;width:75px;height:75px;padding:0;background:none}
#suratin img{display:inline-flex;background:rgba(255,255,255, 1);border-radius:10%;padding:10px;width:140px;height:110px;transition:all .3s ease;}
#suratin img:hover{transform:scale(.9);}

.swal2-modal > *{font-size:16px;}
.swal2-title{line-height:1.3em;margin-right:20px;margin-left:20px;font-size:19px;text-align:center;padding:15px 30px 0 30px;}
.swal2-timer-progress-bar-container > *{opacity:.3;background:#007AFF;margin:0 5px}
.swal2-modal{background:rgba(255,255,255,1);border: .7px solid #fff;border-radius:var(--bingkai);top:-60px;}

.fa-heart {opacity:.3;color:white;font-size: 30px;position: absolute;animation:  heartMove linear 1;top: -10vh;z-index: 0;}
@keyframes heartMove {0%{transform: translateY(-10vh) ;} 100%{transform: translateY(100vh) ;}}
.kumpulanstiker > img{display:none;}

.adB,.adB a{color:#fff}.sticky-ad{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;overflow:visible;position:fixed;text-align:center;bottom:-130px;left:0;width:100%;z-index:1000;max-height:120px;background-image:none;background-color:rgba(0,0,0,.5);box-shadow:0 0 5px 0 rgba(0,0,0,.2);margin-bottom:0;padding-top:4px;transition:.8s ease-in-out}.sticky-ad-close-button{position:absolute;width:28px;height:28px;top:-28px;right:0;background-image:url("data:image/svg+xml;charset=utf8,%3csvg width='13' height='13' viewBox='341 8 13 13' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3e%3cg%3e%3cpath style='fill:%23FFFFFF' d='M354 9.31L352.69 8l-5.19 5.19L342.31 8 341 9.31l5.19 5.19-5.19 5.19 1.31 1.31 5.19-5.19 5.19 5.19 1.31-1.31-5.19-5.19z'%3e%3c/path%3e%3c/g%3e%3c/svg%3e");background-size:13px 13px;background-position:9px;background-color:rgba(0,0,0,.5);background-repeat:no-repeat;box-shadow:0 -1px 1px 0 rgba(0,0,0,.2);border:none;border-radius:12px 0 0;cursor:pointer}.sticky-ad-close-button:before{position:absolute;content:"";top:-20px;right:0;left:-20px;bottom:0}:active,:focus{outline:0}.adB{min-height:45px;display:flex;align-items:center;justify-content:center;font-size:15px;font-weight:700}.adB::before{content:attr(data-text)}a{text-decoration:none}
</style>
<body>
	
   <div id="bodyblur">
     <!-- Wallpaper --><img src="https://feeldreams.github.io/wpjalanan.jpg" width="100%" height="100%"/>
   </div>
  
  <div class="kumpulanstiker">
         <!-- Stiker untuk Konten -->
         <img src="https://i.ibb.co/4VBkZwn/bunga.gif" id="fotoakhir1"/>
         <img src="https://feeldreams.github.io/mndkat.gif" id="fotoakhir2"/>
         <img src="https://i.ibb.co/xGc2wBh/cartoons.gif" id="fotoakhir3"/>
         <img src="https://i.ibb.co/hBJWz6S/tinju.gif" id="fotoakhir4"/>
  </div>

   <div id='Content'>
   	
     <div id="suratin" onClick="memulai();audio.play();">
       <!-- Surat --><img src="https://rayyscoding.github.io/envelope.png"/>
     </div>
     <p id="ket">Klik Suratnya!</p>
   
     <div><!-- Foto Akhir --><img src="https://i.ibb.co/z7N6gKp/tos.gif" id="fotoakhir" /></div>
     <div><blockquote id='bq'>
       <p id="kalimat"></p>
       <p id="kalimatc"></p>
     </blockquote></div>
   
     <!-- Tombol Kirim Pesan -->
     <div id="Tombol">
       <a onClick="sjawab()">
         <b>Kirim Pesan</b>
       </a>
     </div>
     
   </div>

  <div id="initom" class="menu">
  <a class='tombol' onclick="tes()">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/> </svg>
  </a>
  </div>

  <style>
    svg{vertical-align: middle;width: 22px;height: 22px;fill: #fff}
    .tomKirim{position: fixed;background-color: #4dc247;bottom: 30px;right: 30px;border-radius: 50px;z-index: 999;overflow: hidden;display: flex;align-items: center;justify-content: center;width: 45px;height: 45px;-webkit-transition: all .2s ease-out;transition: all .2s ease-out}
    .tomKirim svg{margin: auto;fill: #fff} .tomKirim:hover{transform: scale(.8)}
  </style>
  
  <script></script>
  
  <a id="tomWA" class='tomKirim' href=''>
    <svg class='svg-1' viewBox='0 0 32 32'><g><path d='M16,2A13,13,0,0,0,8,25.23V29a1,1,0,0,0,.51.87A1,1,0,0,0,9,30a1,1,0,0,0,.51-.14l3.65-2.19A12.64,12.64,0,0,0,16,28,13,13,0,0,0,16,2Zm0,24a11.13,11.13,0,0,1-2.76-.36,1,1,0,0,0-.76.11L10,27.23v-2.5a1,1,0,0,0-.42-.81A11,11,0,1,1,16,26Z'></path><path d='M19.86,15.18a1.9,1.9,0,0,0-2.64,0l-.09.09-1.4-1.4.09-.09a1.86,1.86,0,0,0,0-2.64L14.23,9.55a1.9,1.9,0,0,0-2.64,0l-.8.79a3.56,3.56,0,0,0-.5,3.76,10.64,10.64,0,0,0,2.62,4A8.7,8.7,0,0,0,18.56,21a2.92,2.92,0,0,0,2.1-.79l.79-.8a1.86,1.86,0,0,0,0-2.64Zm-.62,3.61c-.57.58-2.78,0-4.92-2.11a8.88,8.88,0,0,1-2.13-3.21c-.26-.79-.25-1.44,0-1.71l.7-.7,1.4,1.4-.7.7a1,1,0,0,0,0,1.41l2.82,2.82a1,1,0,0,0,1.41,0l.7-.7,1.4,1.4Z'></path></g></svg>
  </a>

  <div class='sticky-ad' id='sticky-ad'>

<button aria-label='Close this ad' class='sticky-ad-close-button' onclick='hilangkan();'/>
</div>
  
<!-- Jangan Edit Bagian Ini --><script>
  function showDiv() {Content.style = "opacity:1;margin-top:15vh;";ket.style="margin-top:30px";}
  function memulai(){suratin.style="transition:all 1s ease;transform:scale(.1);opacity:0";ket.style="transition:all 1s ease;transform:scale(.1);opacity:0";setTimeout(pesan,300);}
  function kpemb() {suratin.style="display:none";ket.style="display:none";fotoakhir.style="display:inline-flex;transform:scale(1);";Content.style = "opacity:1;margin-top:2vh;";bq.style = "opacity:1;visibility:visible;margin-top:5px";setTimeout(ngetik,500);}
  
  function tombol(){Tombol.style="margin-top:15px;opacity:1;transform: scale(1);";ftom=1;} ftom=0; function fakhiran(){document.getElementById("akhiran").style = "display:inline-flex";}
  const swals = Swal.mixin({allowOutsideClick: false, cancelButtonColor: '#FF0040', imageWidth: 100, imageHeight: 100,}); 
  const swalst = Swal.mixin({allowOutsideClick: false, showConfirmButton: false, timer: 3300, timerProgressBar: true, imageWidth: 100, imageHeight: 100,}); const style = document.createElement('style'); var today = new Date();var dd = String(today.getDate()).padStart(2, '0');var mm = String(today.getMonth() + 1).padStart(2, '0');var yyyy = today.getFullYear();const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];today = dd + ' ' + monthNames[today.getMonth()] + ' ' + yyyy;
  function setel(){audio.play();} function setel2(){bgm.play();} function sjawab(){if(ftom==1){Tombol.style="display:none";jawab();}}
  function tunjukkan(){document.getElementById("sticky-ad").style = "bottom: 0px";}
  function hilangkan() {document.getElementById("sticky-ad").style = "bottom: -130px";}
  
  var aa=0,katangetik;
  function ngetik() {
    new TypeIt("#kalimat", {
      strings: ["" + katangetik], startDelay: 50, speed: 55, cursor: true,
      afterComplete: function(){
      	kalimat.innerHTML = katangetik;
        kalimatc.style="margin-top:30px;margin-bottom:10px";
        setTimeout(ngetik2,500);
      },}).go();
  }
  var ai=0,katangetik2;
  function ngetik2() {
    new TypeIt("#kalimatc", {
      strings: ["" + katangetik2], startDelay: 50, speed: 55, cursor: true,
      afterComplete: function(){
      	kalimatc.innerHTML = katangetik2;
        setTimeout(tombol,300);
      },}).go();
    }
</script> <!-- Sampai Sini -->

<script type="text/javascript">
      async function jawab(){await swals.fire('Kirim pesan ke WhatsApp aku, ya!');window.location = "https://api.whatsapp.com/send?phone=&text=" + pesanwhatsapp;}

      async function pertama(){
         audio = new Audio('https://feeldreams.github.io/almostday.mp3');setTimeout(showDiv,100);
       } pertama();

      pesan1 = "Hai Kamu 🥰";
      pesan2 = "Semangat Jalani Harinya yaa 🤩";
      pesan3 = "Jaga Kesehatanmu 😍";
      pesan4 = "Jangan Sampe Sakit! 😡";
      katangetik = "Makasih udah mau bukain yaaaa ><";
      katangetik2 = "I LOVE YOU ❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️";
  
       async function pesan(){
             	   await swalst.fire({
                  title: '' + pesan1, 
                  imageUrl: '' + fotoakhir1.src,
                  });   	
                 await swalst.fire({
                  title: '' + pesan2,
                  imageUrl: '' + fotoakhir2.src,
                  });
                 await swalst.fire({
                  title: '' + pesan3,
                  imageUrl: '' + fotoakhir3.src,
                  });
                 await swalst.fire({
                  title: '' + pesan4,
                  imageUrl: '' + fotoakhir4.src,
                  });
                                    
                  pesanwhatsapp = "Aaaaa baper ><";
                 setTimeout(kpemb,300);
            }
  tunjukkan();
</script>
<?php
      // Ambil nilai parameter id dari URL
      $id = $_GET["id"];
    ?><script>tomWA.href="https://api.whatsapp.com/send?phone=&text=https%3A%2F%2Fcustompesanbuatmu.satganzdevs.repl.co%2Fmulai.php%3Fid%3D<?php echo $id ?>";</script><?php
      
      // Buka file pesan.txt
      $file = fopen("pesan.txt", "r");
      
      // Cari pesan dengan id yang sesuai dan tampilkan pada halaman
      while (($line = fgets($file)) !== false) {
        $pesanData = explode("|", $line);
        if ($pesanData[0] == $id) {
          ?>
          <script>
            <?php if (!empty($pesanData[1])) { ?>
            pesan1 = "<?php echo $pesanData[1] ?>";
            <?php } ?>
            
            <?php if (!empty($pesanData[2])) { ?>
            pesan2 = "<?php echo $pesanData[2] ?>";
            <?php } ?>
            
            <?php if (!empty($pesanData[3])) { ?>
            pesan3 = "<?php echo $pesanData[3] ?>";
            <?php } ?>
            
            <?php if (!empty($pesanData[4])) { ?>
            pesan4 = "<?php echo $pesanData[4] ?>";
            <?php } ?>
            
            <?php if (!empty($pesanData[5])) { ?>
            katangetik = "<?php echo $pesanData[5] ?>"; // Pesan Setelah Popup
            <?php } ?>
            
            <?php if (!empty($pesanData[6])) { ?>
            katangetik2 = "<?php echo $pesanData[6] ?>";
            <?php } ?>
            
          </script>
          <script src="script.js"></script>
          <?php
        }
      }
      
      // Tutup file pesan.txt
      fclose($file);
    ?>
</body>
</html>