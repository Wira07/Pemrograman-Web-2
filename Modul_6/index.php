<!DOCTYPE html>
<html>

<head>
    <title>.:TOBULINE:.</title>
    <style>
    * {
        box-sizing: border-box;
        text-decoration: none;
    }
    div.container {
        width: 100%;
        border: 1px solid gray;
    }

    header,
    footer {
        padding: 1em;
        color: white;
        background-color: #00ccff;
        clear: left;
        text-align: center;
    }

    nav {
        float: left;
        max-width: 160px;
        margin: 0;
        padding: 1em;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
    }

    nav ul a {
        text-decoration: none;
    }

    article {
        margin-left: 170px;
        border-left: 1px solid gray;
        padding: 1em;
        overflow: hidden;
    }
    </style>
</head>

<body>
    <?php include "koneksi.php";?>
    <div class="container">
        <header>
            <h1>TOKO BUKU ONLINE</h1>
        </header>
        <?php include "menu.php";?>
        <article><?php
                extract($_GET);
                if(isset($menu))
                { if ($menu=="daftar") {include "daftar.php";} else if
                    ($menu=="tampil_buku") {include "tampil_buku.php";}
                else if($menu=="simpan_member") {include "simpan_member.php";}
                }?>
        </article>
        <footer><a href="https://www.youtube.com/c/andriyatrio" target="blank">CopyrightTOBULINE | 1210</a></footer>
    </div>
     
</body>

</html>