<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        .wrap{
    background: #A9A9A9;
    width: auto;
}
 
/*bagian header*/
.wrap .header{
    background: #A9A9A9;
    padding: 2px 10px;
}
 
/*akhir header*/
 
/*bagian menu*/
.wrap .menu{
    background: #DCDCDC;
}
 
.wrap .menu ul{
    padding: 0;
    margin: 0;
    background: ;
    overflow: hidden;
}
 
.wrap .menu ul li{
    float: left;
    list-style-type: none;
    padding: 10px;
}
/*akhir menu*/
 
.clear{
    clear: both;
}
 
.badan{
    height: 450px;
}
/*bagian sidebar*/
.wrap .badan .sidebar{
    background: #E6E6FA;
    float: left;    
    width: 25%;
    height: 100%;
}
 
/*akhir sidebar*/
 
.wrap .badan .content{
    background: #F8F8FF;
    float: left;
    height: 100%;
    width: 75%; 
}
 
.wrap .footer{
    width: 100%;
    padding: 10px;
}
    </style>
</head>
<body>
    <div class="wrap">
        <div class="header">            
            <h1>Astri Fadilah</h1>
            <p>173140914111062</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Galeri</a></li>
                <li><a href="#">Kontak</a></li>
                <li><a href="#">About Us</a></li>           
            </ul>
        </div>
        <div class="badan">         
            <div class="sidebar">
                Menu
                <ul>
                    <li><a href="#">Artikel 1</a></li>
                    <li><a href="#">Artikel 2</a></li>
                    <li><a href="#">Artikel 3</a></li>
                </ul>
            </div>
            <div class="content">
                Konten
            </div>
        </div>
        <div class="clear"></div>
        <div class="footer">
            Astri Fadilah | 173140914111062 | 5 Maret 2019
        </div>
    </div>
</body>
</html>