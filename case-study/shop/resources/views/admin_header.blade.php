<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Trang chủ Admin</title>
    <link rel="stylesheet" type="text/css" href="css/theme.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/Copy of thme.css" />
    <link rel="stylesheet" type="text/css" href="css/theme1.css" />
    <link rel="stylesheet" type="text/css" href="css/theme2.css" />
    <link rel="stylesheet" type="text/css" href="css/theme3.css" />
    <link rel="stylesheet" type="text/css" href="css/theme4.css" />
    <link rel="stylesheet" type="text/css" href="css/switch.css" />
    <link rel="stylesheet" type="text/css" href="css/ie-sucks.css" />



    <script type="text/javascript" src="http://megacode.vn/themes/megacode/js/xsite.js"></script>
    <script>
        var StyleFile = "theme" + document.cookie.charAt(6) + ".css";
        document.writeln('<link rel="stylesheet" type="text/css" href="css/' + StyleFile + '">');
    </script>
    <!--[if IE]>
<link rel="stylesheet" type="text/css" href="css/ie-sucks.css" />
<![endif]-->
</head>

<body>
    <div id="container">
        <div id="header">
            <h2>Xin Chào ADMIN</h2>
            <div id="topmenu">
                <ul>
                    <li class="current"><a href="index.html">Trang chủ</a></li>
                    <li><a href="#">Đơn Hàng</a></li>
                    <li><a href="#">Khách Hàng</a></li>
                    <li><a href="#">Quản Lý</a></li>
                    <!-- <li><a href="#">CMS</a></li> -->
                    <!-- <li><a href="#">Thống Kê</a></li> -->
                    <!-- <li><a href="#">Settings</a></li> -->
                </ul>
            </div>
        </div>

        <div id="wrapper">
            <div id="content">

                <div id="infowrap">
                    <div id="infobox">
                        <h3>Sales for July</h3>
                        <p><img src="{{asset('source/image/admin/graph.jpg')}}" width="360" height="266" /></p>
                    </div>
                    <div id="infobox" class="margin-left">
                        <h3>Traffic for July</h3>
                        <p><img src="{{asset('source/image/admin/graph2.jpg')}}" alt="a" width="359" height="266" /></p>
                    </div>



                    <div id="footer">
                        <div id="credits">
                            Template by <a href="http://www.bloganje.com">Bloganje</a>
                        </div>
                        <div id="styleswitcher">
                            <ul>
                                <li><a href="javascript: document.cookie='theme='; window.location.reload();" title="Default" id="defswitch">d</a></li>
                                <li><a href="javascript: document.cookie='theme=1'; window.location.reload();" title="Blue" id="blueswitch">b</a></li>
                                <li><a href="javascript: document.cookie='theme=2'; window.location.reload();" title="Green" id="greenswitch">g</a></li>
                                <li><a href="javascript: document.cookie='theme=3'; window.location.reload();" title="Brown" id="brownswitch">b</a></li>
                                <li><a href="javascript: document.cookie='theme=4'; window.location.reload();" title="Mix" id="mixswitch">m</a></li>
                                <li><a href="javascript: document.cookie='theme=5'; window.location.reload();" title="Mix" id="defswitch">m</a></li>
                            </ul>
                        </div><br />

                    </div>
                </div>
</body>

</html>