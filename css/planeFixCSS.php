<?php
    header("Content-type: text/css; charset: UTF-8");
?>


body{
	font-family:Georgia, serif;
	color:black;
	font-size:18px;
}

body {
  -webkit-user-select: none;
     -moz-user-select: -moz-none;
      -ms-user-select: none;
          user-select: none;
}


#top{
	padding-left:180px;
		border-bottom:2px solid #f5f5f5;
}

.title{
	display:inline-block;
	width:300px;
	height:100px;

}

.title h1{
	display:inline-block;
	margin-top:20px;
	margin-bottom:5px;
	font-weight:100;
	font-size:30px;
  color: rgb(0, 0, 85);
  text-align:left;
}

.title a{
font-size:13px;
display:block;
vertical-align:top;
line-height:14px;
}

/*  TARGET LAWS */

.target{
	display:inline-block;

		height:100px;
}

.targetFrame{
	padding-top:20px;
	padding-left:20px;
	padding-right:20px;
	display:inline-block;
	text-align:center;
}


.targetFrame.top{
	padding-top:0px;
	padding-left:150px;
	display:inline-block;
}

.targetRow{
	display:block;
	height:15px;
}

.targetCell{
	vertical-align:top;
	border:1px solid white;
	display:inline-block;
	width:15px;
	height:15px;
	background:#CCCCCC;
}


/* frame laws I WANT TO CENTER THIS - there seems to be an issue centering a variable size div.*/ 

.frame {
	padding-top:50px;
	padding-left:180px;
	white-space: nowrap;
	font-size:0px;

}

#topButtonRow{
	white-space: nowrap;
}

#bottomButtonRow{
	white-space: nowrap;
}


#leftButtonColumn{
	display:inline-block;
}

/* container laws */

.container {
	width:80px;
	text-align:center;
	display:inline-block;
	padding:2px;
	font-size:0px;
}

.btnRowContainer {
	height:80px;
	width:80px;
	text-align:center;
	display:inline-block;
	vertical-align:top;
	padding:2px;
}

.btncontainer {
	height:70px;
	width:25px;
	text-align:center;
	display:inline-block;
	vertical-align:top;
	padding-top:10px;
	padding-right:2px;
	padding-left:2px;
}



.buttonRow{
	padding-left:28px;
	height:35px;
	text-align:center;
	display:inline-block;
	white-space:nowrap;
}


#bottomButtonRow{

}

svg{
height:70px;
width:60px;
}


.left{
    -ms-transform: rotate(270deg); /* IE 9 */
    -webkit-transform: rotate(270deg); /* Chrome, Safari, Opera */
    transform: rotate(270deg);
}
.right{
	float:right;
    -ms-transform: rotate(90deg); /* IE 9 */
    -webkit-transform: rotate(90deg); /* Chrome, Safari, Opera */
    transform: rotate(90deg);
}
.down{
	height:30px;
    -ms-transform: rotate(180deg); /* IE 9 */
    -webkit-transform: rotate(180deg); /* Chrome, Safari, Opera */
    transform: rotate(180deg);
}

/* cell laws */




.cell {
	width:80px;
	height:80px;
	line-height: 80px;
 	text-align: center;
	color:white;
	font-size:18px;
	background: #CCCCCC;

}

.cell span {
      display: inline-block;
      vertical-align: middle;
      line-height: normal;
}

.cell {
	-moz-transition: all .5s ease;
	-webkit-transition: all .5s ease;
	-o-transition: all .5s ease;
	transition: all .5s ease;
}

.rotate {-moz-transform: rotate(15deg);
         -webkit-transform:rotate(15deg); 
         -ms-transform:rotate(15deg);
         -o-transform:rotate(15deg);
         }

.rotate {-moz-transform: rotate(-15deg);
         -webkit-transform:rotate(-15deg); 
         -ms-transform:rotate(-15deg);
         -o-transform:rotate(-15deg);
         }

.cell.levelComplete{
background:gold;
}



/* Cell Color Classes */

.c1 {
	background: red;
}
.c2 {
	background:rgb(71, 181, 71);
}
.c3 {
	background: rgb(28, 42, 72);
}

.c4{
background:red;
}



/* levelSelector */

#levelSelector {
	background:rgba(45, 42, 39, 0.85);
	top:155px;
	left:178px;
	width:500px;
	min-height:500px;
	position:absolute;
	display:none;
	text-align:center;
	color:white;
}
