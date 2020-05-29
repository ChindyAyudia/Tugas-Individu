<!DOCYTYPE html>
<html>
<head>
    <title>Membuat desain web</title>
<style type="text/css">
<body>{
    font-family:arial;
    font-size: 14px;
}

#canvas{
    width :960px;
    margin: 0 auto;
    border: 1px solid silver;
}

#header{
    font-size: 20px;
    padding: 20px;
}

#menu{
   background-color:#ad6005;
}

#menu ul{
    list-style: none;
    margin: 0;
    padding: 0;
}

#menu ul li.utama{
    display: inline-table;

}

#menu ul li:hover{
    background-color: #7c510e;
}
#menu ul li a{
    display: block;
    text-decoration: none;
    line-height : 40px;
    padding 0 10px;
    color: #fff;
}

.utama ul{
    display: none;
    position: absolute;
    z-index: 2;
}

.utama:hover u{
    display: block;
}

.utama ul li{
    display:block;
    background-color: #6cf;
    width: 140px;
}

#isi{
    min-height: 400px;
    padding: 20px;
}

#footer{
    text-align: center;
    padding: 20px;
    background-color:#ccc;
}
</style>
</head>
<body>

<div id="canvas">
    <div id="header">
    PENJUALAN PERMEN COKLAT
    </div>

    <div id="menu">
    <ul>
        <li class="utama"><a href="">  Beranda</a></li>
        <li class="utama"><a href="">Barang</a></li>
        <li class="utama"><a href="">Pelanggan</a></li>
    </ul>
    </div>

    <div id="isi">
    Belum ada isi
    </div>

    <div id="footer">
    Copyright 2020 - Chindy Ayudia Sri Fastaf
    </div>
</div>