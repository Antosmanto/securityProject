<?php
/*** set the content type header ***/
/*** Without this header, it wont work ***/
header("Content-type: text/css");


$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '1 em';
$border = '1px solid';
?>
table {
margin: 8px;
width: 95%;
float: centre;
margin-right: 15px;

}
th {
font-family: <?= $font_family ?>;
font-size: <?= $font_size ?>;
background: #5861cc;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: <?= $border ?> #000


}

td {
font-family: <?= $font_family ?>;
font-size: <?= $font_size ?>;
border: <?= $border ?> #DDD;
}
h1 {
font-size: 2.2em;
padding: 20px 0;
border-bottom: 1px solid #eee;
margin: 0 0 30px 0;
color: #5861cc;

}
p{
margin: 5px 0 30px 0;
width: 95%;
text-align: justify;
padding-bottom:6px:
}
.S{
padding: 8px 12px;
font-size: 1.5em;
font-family: <?= $font_family ?>;
margin-Top: 16px;
text-indent: 20px;
}
input{
background: #fff;
padding: 8px 12px;
border-radius: 4px;
color: #5861cc;
cursor: pointer;
font-size: 1em;
border: 1px solid rgb(32, 86, 178);

}
label{
flex: 14;
padding: 30;
padding-right: 10;
padding-left: 10;

}
a{
padding: 8px 12px;
font-size: 1em;
font-family: <?= $font_family ?>;
margin-Top: 16px;
text-indent: 20px;

}
h3{
text-indent: 20px;
margin-top: 15px;
margin-bottom: 8px;

}
.d{
padding: 8px 12px;
font-size: 1em;
font-family: <?= $font_family ?>;
margin-Top: 16px;
text-indent: 20px;
}
.e{
padding: 8px 12px;
font-size: 1em;
font-family: <?= $font_family ?>;
margin-Top: 16px;
text-indent: 20px;
}