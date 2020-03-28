<?php
header("Access-Control-Allow-Headers: Authorization, Content-Type");
header("Access-Control-Allow-Origin: *");
?>


<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Poppins&display=swap" rel="stylesheet">
    <title>Pantau Penyebaran Virus COVID-19</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif
        }

        body {
            background: #eeeeee;
        }

        .fontPoppins {
            font-family: 'Poppins', sans-serif !important;
        }

        .fontNoto {
            font-family: 'Noto Sans', sans-serif !important;
        }

        .uppercase {
            text-transform: uppercase !important
        }

        .darkColor {
            color: #333 !important
        }

        .navbar {
            background: #fff;
            margin: 0;
            padding: 0;
            border-bottom: 1px solid rgba(0, 0, 0, .1)
        }

        .navbar-brand {
            color: #333;
            text-decoration: none;
            font-size: 18px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .center {
            text-align: center
        }

        .col-3 {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr
        }

        .col-4 {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr
        }

        .col-2 {
            display: grid;
            grid-template-columns: 2fr 1fr
        }

        .col-1 {
            display: grid;
            grid-template-columns: 1fr
        }

        .lighter {
            font-weight: lighter !important
        }

        .top {
            margin-top: 2em !important
        }

        .left {
            text-align: left !important
        }

        .box {
            background: #fff;
            margin: 0;
            padding: 30px 50px;
            margin: 10px;
            border-radius: 5px
        }
        .box-table {
            background: #fff;
            margin: 0;
            border-radius: 5px;
            border: 1px solid rgba(103, 103, 103, 0.12)
        }

        .green {
            background: #2ecc71 !important
        }

        .orange {
            background: #e74c3c !important
        }

        .pink {
            background: #ee5253 !important
        }

        .blue {
            background: #3498db !important
        }

        .textSmall {
            font-size: 13px !important
        }
        .textMed {
            font-size: 16px !important
        }

        .whiteColor {
            color: #fff !important
        }

        .table {
            border: 1px solid rgba(88, 88, 88, 0.1);
            border-collapse: collapse;
            background: #fff
        }

        .table tr,
        .table td,
        .table th {
            border: 1px solid rgba(0, 120, 183, 0.12);
            padding: 15px
        }

        .table th {
            background: #f8f8f8
        }

        .header-box {
            background: #f8f8f8;
            margin: 0;
            padding: 15px 20px;
            color: #333
        }
        .box-body{
            background: #fff;
            padding: 20px 35px
        }

        @media only screen and (min-width:1440px) {

            .container {
                margin: 0 180px;
                padding: 25px 0
            }
        }

        @media only screen and (min-width:768px) and (max-width:1439px) {
            .container {
                margin: 0 30px;
                padding: 25px 0
            }

            .col-4 {
                display: grid;
                grid-template-columns: 1fr 1fr
            }

        }

        @media only screen and (min-width:320px) and (max-width:767px) {
            .container {
                margin: 0 30px;
                padding: 25px 0
            }

            .col-4 {
                display: grid;
                grid-template-columns: 1fr
            }
        }

    </style>
    <script src="jquery.js"></script>
</head>

<body>
    <header class="navbar">
        <div class="container">
            <a href="index.php" class="navbar-brand fontPoppins">PANTAU COVID-19</a>
        </div>
    </header>
    <div class="container top">
        <div class="center">
            <h1 class="fontNoto darkColor uppercase lighter">Pantau Penyebaran Virus COVID-19 di Dunia</h1>
            <h2 class="fontNoto darkColor uppercase lighter">Secara Real-Time</h2>
            <h3 class="darkColor lighter" style="margin-top:8px">Mari bersama menjaga kesehatan diri kita.</h3>
            <div class="col-4 top dekstop" style="text-align:left !important">
                <div>
                    <div class="col-2 box orange whiteColor">
                        <div>
                            <h5 class="fontPoppins uppercase" style="font-weight:lighter">Positif</h5>
                            <h2 id="data-kasus" style="margin-top:5px" class="fontNoto"></h2>
                            <h5 class="fontPoppins uppercase" style="font-weight:lighter">Orang</h5>
                        </div>
                        <div class="center"><img src="img/sad.svg" style="width:80px" /></div>
                    </div>
                </div>
                <div>
                    <div class="col-2 box pink whiteColor">
                        <div>
                            <h5 class="fontPoppins uppercase" style="font-weight:lighter">Meninggal</h5>
                            <h2 id="data-mati" style="margin-top:5px" class="fontNoto"></h2>
                            <h5 class="fontPoppins uppercase" style="font-weight:lighter">Orang</h5>
                        </div>
                        <div class="center"><img src="img/cry.svg" style="width:80px" /></div>
                    </div>
                </div>
                <div>
                    <div class="col-2 box green whiteColor">
                        <div>
                            <h5 class="fontPoppins uppercase" style="font-weight:lighter">Sembuh</h5>
                            <h2 id="data-sembuh" style="margin-top:5px" class="fontNoto"></h2>
                            <h5 class="fontPoppins uppercase" style="font-weight:lighter">Orang</h5>
                        </div>
                        <div class="center"><img src="img/happy.svg" style="width:80px" /></div>
                    </div>
                </div>
                <div>
                    <div class="col-2 box blue whiteColor">
                        <div>
                            <h5 class="fontPoppins uppercase" style="font-weight:lighter">Indonesia</h5>
                            <h5 class="fontPoppins uppercase" style="font-weight:lighter" id="data-id"></h5>
                        </div>
                        <div class="center"><img src="img/indonesia.svg" style="width:80px" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container top">
        <div class="box-table">
            <h3 class="header-box textMed darkColor">Data berdasarkan Provinsi di Indonesia</h3>
            <div class="box-body" style="overflow-x:auto">
                <table class="table borderless" width="100%">
                    <thead>
                        <tr>
                            <th class="darkColor fontPoppins center textSmall" width="50px">No</th>
                            <th class="darkColor fontPoppins left textSmall">Nama Provinsi</th>
                            <th class="darkColor fontPoppins left textSmall">Positif</th>
                            <th class="darkColor fontPoppins left textSmall">Sembuh</th>
                            <th class="darkColor fontPoppins left textSmall">Meninggal</th>
                        </tr>
                    </thead>
                    <tbody id="table-data">
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer class="navbar darkColor bottom">
        <div class="container center">
            Made with <img src="img/heart.svg" style="width:14px" /> by <a href="https://www.instagram.com/sfyn_17/" style="color:royalblue;text-decoration:none" target="_blank">Mochamad Sofyan</a>
        </div>
    </footer>
    <script>
        $(document).ready(function() {

            semuaData();
            dataNegara();
            table();

            setInterval(function() {
                semuaData()
            }, 3000)
            
            setInterval(function() {
                table()
            }, 3000)

            function semuaData() {
                $.ajax({
                    url: 'https://coronavirus-19-api.herokuapp.com/all',
                    success: function(data) {
                        try {
                            var json = data;
                            var kasus = data.cases
                            var meninggal = data.deaths;
                            var sembuh = data.recovered;

                            $('#data-kasus').html(kasus)
                            $('#data-mati').html(meninggal)
                            $('#data-sembuh').html(sembuh)

                            $('#data-kasus-mobile').html(kasus)
                            $('#data-mati-mobile').html(meninggal)
                            $('#data-sembuh-mobile').html(sembuh)

                        } catch {
                            alert('Eror')
                        }
                    }
                })
            }

            function dataNegara() {
                $.ajax({
                    url: 'https://coronavirus-19-api.herokuapp.com/countries',
                    success: function(data) {
                        try {
                            var json = data;
                            var html = [];

                            if (json.length > 0) {
                                var i;

                                for (i = 0; i < json.length; i++) {
                                    var dataNegara = json[i];

                                    var namaNegara = dataNegara.country;

                                    if (namaNegara === 'Indonesia') {
                                        var kasus = '1,155';
                                        var mati = '102';
                                        var sembuh = '59';
                                        $('#data-id').html(kasus + ' Positif,<br/> ' + mati + ' Meninggal,<br/> ' + sembuh + ' Sembuh')
                                    }
                                }
                            }
                        } catch {
                            alert('Eror')
                        }
                    }
                })
            }
            
            function table(){
                $.ajax({
                    url: 'curl.php',
                    type: 'GET',
                    success: function(data){
                        $('#table-data').html(data);
                    }
                })
            }

        })

    </script>
</body>
