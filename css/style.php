<style type="text/css">
html{
	scroll-behavior: smooth;
}

*{margin: 0; padding: 0; box-sizing: border-box; font-family: 'Muli', sans-serif;}


.row{
	margin-left: 0!important;
	margin-right: 0!important; 
}
.nav_style{
	background-color: lightgreen!important;
}

.nav_style a{
	color: black;
}
.main_header{
	height: 450px;
	width: 100%;
}
.rightside h1{
	font-size: 3rem;
}
.corona_image img{
	animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
		0% { transform: rotate(0); }
		100% { transform: rotate(360deg); }
		
}

.leftside img{
	animation: heartbeat 3s linear infinite;
}	

@keyframes heartbeat{
	0% { transform: scale(.75); }
	20% { transform: scale(1); }
	40% { transform: scale(.75); }
	60% { transform: scale(1); }
	80% { transform: scale(.75); }
	100% { transform: scale(.75); }
}

/********************* corona update *****************/

.corona_update{
   margin: 0 0 30px 0;
}

.corona_update h3{
	color: red;
}
.corona_update{
	text-align: center;
}

.sub_section{

	background-color: #fbfafd;
}

.footer_style{
	background-color: lightgreen;
}

.footer_style p{
	margin-bottom: 0!important;
}

#mybtn {
	/*display: none;*/
	position: fixed;
	bottom:30px;
	right: 40px;
	z-index: 99;
	border: none;
	outline: none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 10px;
}

#mybtn:hover {
	background:#606060;
}

@media(max-width:768px){
	.main_header{
		height: 700px;
		text-align: center;
	}
	.main_header{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 30px;
	}
}


</style>