<?php
$nama = "Berkah Aryo Bima Sakti";
$nim = "102022300237";
$fakultas = "Rekayasa Industri";
$prodi = "S1 Sistem Informasi";
$instagram = "http://instagram.com/bimaasky__";
$linkedin = "https://www.linkedin.com/in/berkaharyobimasakti/";
$github = "http://github.com/bimaaqt";
$youtube = "http://youtube/bimaasky ";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Bima</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="/image/telkom.png" type="" />
</head>

<body>
    <section id="container">
        <div class="content">
            <div class="profil">
                <img src="/image/foto.png" alt="" />
                <h1>Profil Mahasiswa</h1>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $nama ?></td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><?php echo $nim ?></td>
                    </tr>
                    <tr>
                        <td>Fakultas</td>
                        <td>:</td>
                        <td><?php echo $fakultas ?></td>
                    </tr>
                    <tr>
                        <td>Prodi</td>
                        <td>:</td>
                        <td><?php echo $prodi ?></td>
                    </tr>
                    <tr></tr>
                </table>
            </div>
            <div class="sosmed">
                <a href="<?php echo $instagram ?>" target="_blank">
                    <img src="image/instagram.png" alt="" />
                </a>
                <a href="<?php echo $linkedin ?>" target="_blank">
                    <img src="image/linkedin.png" alt="" />
                </a>
                <a href="<?php echo $github ?>" target="_blank">
                    <img src="image/github.png" alt="" />
                </a>
                <a href="<?php echo $youtube ?>" target="_blank">
                    <img src="image/youtube.png" alt="" />
                </a>
            </div>
        </div>
        <span id="time"></span>
    </section>
    <!-- Java Script -->
    <script type="text/javascript" charset="utf-8">
        let a;
        let time;
        setInterval(() => {
            a = new Date();
            time =
                "Tanggal : " +
                (a.getMonth() + 1) +
                " - " +
                a.getDate() +
                " - " +
                a.getFullYear() +
                " - Jam : " +
                a.getHours() +
                " : " +
                a.getMinutes() +
                " : " +
                a.getSeconds();
            document.getElementById("time").innerHTML = time;
        }, 1000);
    </script>
</body>

</html>