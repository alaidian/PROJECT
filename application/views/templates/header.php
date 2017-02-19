
<html>
	<head>
	<style>
	 div.ani{width:200px;
          height: 120px;
          background:w3-white;
		  font-family:Monotype Corsiva;
		  font-size:20px;
          position:relative;
		  
		animation: myfirst infinite;
          animation:myfirst 15s;
		  
          -moz-animation:myfirst 15s; /* Firefox */
          -webkit-animation:myfirst 15s; /* Safari and Chrome */
          -o-animation:myfirst 15s; /* Opera */}
          
      @keyframes myfirst{
	0%   {background:grey; left:0px; top:0px;}
        20%  {background:light yellow; left:210px; top:0px;}
        40%  {background:lightblue; left:420px; top:0px;}
        60%  {background:light green; left:730px; top:0px;}
        80%  {background:light red; left:940px; top:0px;}
    	100% {background:grey; left:1150px; top:0px;}}
  
      @-moz-keyframes myfirst /* Firefox */{
	0%   {background:grey; left:0px; top:0px;}
        20%  {background:lightyellow; left:210px; top:0px;}
        40%  {background:lightblue; left:420px; top:0px;}
        60%  {background:lightgreen; left:730px; top:0px;}
        80%  {background:lightred; left:940px; top:0px;}
    	100% {background:grey; left:1150px; top:0px;}}
		          
      @-webkit-keyframes myfirst /* Safari and Chrome */{
        0%   {background:grey; left:0px; top:0px;}
        20%  {background:lightyellow; left:210px; top:0px;}
        40%  {background:lightblue; left:420px; top:0px;}
        60%  {background:lightgreen; left:730px; top:0px;}
        80%  {background:lightred; left:940px; top:0px;}
    	100% {background:grey; left:1150px; top:0px;}}
	</style>
		
	
		<title>Agile Scrum Dashboard</title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/w3.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/boot.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/css/bootstrap.min.css">
    		
    <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
	</head>
	<body style="background-image:url('http://localhost/CI/image/bg.jpg');background-repeat:no-repeat;background-size:cover;">
	<nav class="navbar navbar-inverse" style="background-color:#910836">
	
     <div class="container" style="background-color:#910836">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url(); ?>home">Agile Scrum Dashboard</a>
       </div>
        <div id="navbar">
           <ol class="breadcrumb" style="background-color:#910836">
            <li><a href="<?php echo base_url(); ?>home"><span class="glyphicon glyphicon-home"></span>Home</a></li>
            <li><a href="<?php echo base_url(); ?>about"><span class="glyphicon glyphicon-envelope"></span>Features</a></li>
             <li><a href="<?php echo base_url(); ?>login"><span class="glyphicon glyphicon-lock"></span>Login</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
                    </ul>
        </div>
      </div>
	 
    </nav>
	 <div class="ani">AGILE SCRUM DASHBOARD</div>
    <div class="w3-panel">

   

