<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Homepage Sekretaris - Nyurat</title>
    <style>
    html,
    body {
        padding: 0;
        margin: 0;
        font-family: 'Roboto', sans-serif;
        background-color: #CCC5BE;
    }

    .nav {
        overflow: hidden;
        background-color: #FBFAF8;
        height: 60px;
        padding: 8px 15px;
    }

    .nav a {
        float: right;
        color: #1E1E1E;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        background-color: #F3F1F1;
        font-size: 14px;
        margin: 10px;
        border-radius: 8px;
        font-weight: bold;

    }

    .nav a:hover {
        background-color: #ddd;
        color: #1E1E1E;
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
    }

    .nav a.logout {
        color: #8B1337;
        background: none;
    }

    .nav a.logout:hover {
        background-color: #921339;
        color: #cea5a5;
    }


    .selamatDatang p {
        margin-left: 160px;
        vertical-align: middle;
        justify-content: center;
        color: #AB6135;
        font-size: 60px;
        font-weight: bold;
    }

    .home {
        margin-top: 60px;
        margin-right: 100px;
        display: flex;
        justify-content: right;
        text-align: middle;
    }

    .home img {
        width: 600px;
        height: auto;
    }

    .home #tombol {
        color: #fff;
        text-align: center;
        padding: 12px;
        padding-left: 71px;
        padding-right: 71px;
        text-decoration: none;
        background-color: #AB6135;
        font-size: 16px;
        border-radius: 8px;
        font-weight: bold;
    }

    #tombol.bukutamu {
        padding-left: 76px;
        padding-right: 76px;
    }

    .home #tombol:hover {
        background-color: #ddd;
        color: #1E1E1E;
    }


    footer {
        position: absolute;
        min-height: auto;
        background-image: url("https://i.postimg.cc/k51JwQqW/Footer.png");
        width: 100%;
        min-height: 200px;
        font-family: "Open Sans";
        padding-top: 170px;
        color: #fff;
        background-repeat: no-repeat;
    }

    .footer-content {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        text-align: center;
    }

    .socials {
        list-style: none;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 0 20px 0;
        padding: 0;
    }

    .socials li {
        margin: 0 10px;
    }

    .socials a {
        text-decoration: none;
        color: #fff;
    }

    .socials a i {
        font-size: 1.1rem;
        transition: color 0.4s ease;
    }

    .socials a:hover i {
        color: aqua;
    }

    .footer-bottom {
        background: #485b51;
        padding-bottom: 20px;
        text-align: center;
    }

    .footer-bottom p {
        font-size: 14px;
        word-spacing: 2px;
        text-transform: capitalize;
    }

    .footer-bottom span {
        text-transform: uppercase;
        opacity: 0.4;
        font-weight: 200;
    }

    .footer-content img {
        width: 120px;
        height: auto;
        margin-top: 30px;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
    }
    </style>

</head>

<body>
    <nav class="nav">
        <a class="active" href="/home"><img src=" https://i.postimg.cc/3N1zdmXf/logo.png" /></a>
        <a class="logout" href="{{url('logout')}}">Logout</a>
        <a href="/riwayatPengajuan">Nomor Surat</a>
        <a href="/riwayatBuktamu">Buku Tamu</a>
    </nav>

    <div class="selamatDatang">
        <p>SEMANGAT PAGI!</p>
    </div>
    <div class="home">
        <table cellpadding="10">
            <tr>
                <td>
                    <a id="tombol" href="/riwayatpengajuan">Nomor Surat</a>
                    <br><br><br><br><br><br>
                    <a id="tombol" class="bukutamu" href="/riwayatbukutamu">Buku Tamu</a>
                </td>
                <td>
                    <img src="https://i.postimg.cc/yxx1x5C6/homepage-sekre.png" alt="Semangat Pagi">
                </td>
            </tr>
        </table>
    </div>
    <footer>
        <div class="footer-content">
            <img src="https://i.postimg.cc/Pqp11spj/logo-2-Traced.png" alt="Nyurat">
            <ul class="socials">
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2022 KBMSI FILKOM UB</p>
        </div>
    </footer>
</body>

</html>