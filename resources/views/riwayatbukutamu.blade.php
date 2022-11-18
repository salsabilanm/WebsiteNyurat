<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Riwayat Buku Tamu - Nyurat</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/footer.css') !!}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<style>
*,
*::before,
*::after {
    margin: 0;
    padding: 0;
    box-sizing: inherit;
}

html {
    font-family: "Roboto", sans-serif;
    background-color: #ccc5be;
}

.nav {
    overflow: hidden;
    background-color: #fbfaf8;
    height: 60px;
    padding: 8px 15px;
}

.nav a {
    float: right;
    color: #1e1e1e;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    background-color: #f3f1f1;
    font-size: 14px;
    margin: 10px;
    border-radius: 8px;
    font-weight: bold;
}

.nav a:hover {
    background-color: #ddd;
    color: #1e1e1e;
}

.nav a.active {
    float: left;
    background: none;
    padding-top: 0%;
    padding-left: 0%;
}

.nav a img {
    height: 40px;
    width: auto;
    border-radius: 8px;
}

.nav a.logout {
    background-color: #8b1337;
    color: #f2f2f2;
}

.nav a.logout:hover {
    background-color: #67132c;
    color: #f2f2f2;
}

h1 {
    font-family: "Roboto", sans-serif;
    font-style: normal;
    font-weight: 800;
    font-size: 50px;
    margin-top: 50px;
    margin-bottom: 50px;
    color: #ab6135;
}

.boxriw1 {
    font-size: 15px;
    color: black;
    background-color: #ddd;
    align-items: center;
    padding: 1rem;
    width: fit-content;
}

.boxriw2 {
    background-color: #f2f2f2;
    align-items: center;
    height: fit-content;
    width: fit-content;
}

.scroll1 {
    max-width: 100%;
    max-height: fit-content;
}

.scroll2 {
    height: 100%;
    max-width: 100%;
    overflow: auto;
}
</style>

<body>
    <nav class="nav">
        <a class="active" href="#home"><img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Borobudur_Temple.jpg/320px-Borobudur_Temple.jpg" /></a>
        <a class="logout" href="#logout">Logout</a>
        <a href="#sekretaris" style="background: none">Sekretaris</a>
        <a href="#riwayat">Riwayat Saya</a>
        <a href="#nosurat">Nomor Surat</a>
        <a href="/riwayatBuktamu">Buku Tamu</a>
    </nav>
    <center>
        <h1>Riwayat Buku Tamu - Nyurat</h1>
    </center>
    <div class="scroll1">
        <div class="scroll2">
            <div class="boxriw1">
                <table border="0" width="2000px">
                    <thead>
                        <tr>
                            <th class="nomer" width="30px">No</th>
                            <th>Nama</th>
                            <th>Kontak</th>
                            <th>Jenis</th>
                            <th>Kegiatan</th>
                            <th width="500px">File</th>
                        </tr>
                        @foreach($bukutamu as $bk)
                        <tr>
                            <td>{{ $bk->nama }}</td>
                            <td>{{ $bk->kontak }}</td>
                            <td>{{ $bk>jenis }}</td>
                            <td>{{ $bk->kegiatan }}</td>
                            <td>{{ $bk->file }}</td>
                            </td>
                        </tr>
                        @endforeach
                    </thead>
                </table>
            </div>
            <div class="boxriw2"></div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <img src="https://i.postimg.cc/Pqp11spj/logo-2-Traced.png" alt="Nyurat" />
            <ul class="faqcon">
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
            <ul class="socials">
                <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022 KBMSI FILKOM UB</p>
        </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>