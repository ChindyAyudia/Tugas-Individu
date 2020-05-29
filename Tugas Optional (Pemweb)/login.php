<!DOCYTPE html>
<html>
<head>
    <title>Halaman Login</title>
<style type="text/css">
body{
    font-family: arial;
    font-size: 14px;
    background-color: #222;
}

#utama{
    width: 300px;
    margin: 0 auto;
    margin-top: 12 px;
}

#judul{
    margin-top: 110px;
    padding: 15px;
    text-align: center;
    color: #fff;
    font-size: 20px;
    background-color: #7c510e;
    border-top-right-radius: 10px;
    border-top-left-radius: 10px;
    border-bottom: 3px solid #ad6005;
}

#inputan{
    background-color: #ccc;
    padding: 20px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
}

#input{
    padding: 10px;
    border: 0;
}

.lg{
    width: 255px;
    height: 31px;
}

.btn{
    width: 255px;
    height: 31px;
    background-color: #7c510e;
    border-radius: 10px;
    color: #fff;
}

.btn:hover{
    background-color:#ad6005;
    cursor:pointer;
}

</style>
</head>
<body>

<div id="utama">
    <div id="judul">
     Halaman Login
    </div>

    <div id="inputan">
    <form action="" method="post">
        <div>
            <input type="text" name="user" placeholder="Username" class="lg"/>
        </div>
        <div style="margin-top:10px;">
            <input type="password" name="pass" placeholder="Password" class="lg"/>
        </div>
        <div style="margin-top:15px;" >
            <input type="submit" name="login" value="login" class="btn"/>
        </div>
    </form>

    <?php
    $user = @$_POST['user'];
    $pass = @$_POST['pass'];
    $login = @$_POST['login'];
    
    if($login){
        if($user == "" || $pass == "") {
            ?>  <script type="text/javascript">alert("Username / Password tidak boleh kosong");</script> <?php
        } else {
            echo "Anda Berhasil Login" ;
        }
    }
    ?>
    </div>
</div>

</body>
</html>