@section("includes.navbar")

@section("content")
<!DOCTYPE HTML>
<html>
<head>
		 <link rel="stylesheet" href="css/metro-bootstrap.css">
		 <link rel="stylesheet" href="css/metro-bootstrap-responsive.css">
		 <link rel="stylesheet" href="css/iconFont.css">
		 <link href="css/docs.css" rel="stylesheet">
		 <link href="js/prettify/prettify.css" rel="stylesheet">
		 
		<script src="js/jquery/jquery.min.js"></script>
        <script src="js/jquery/jquery.widget.min.js"></script>
        <script src="js/metro.min.js"></script> 
		<script src="js/hitua.js"></script>
		
		<!-- Metro UI CSS JavaScript plugins -->
		<script src="js/load-metro.js"></script>
		<script src="js/prettify/prettify.js"></script>
		
	
</head>
<body class="metro">
	<header>
	<nav class="navbar navbar-inverse">
		<nav class="navigation-bar-content">
			 <a href="/" class="element"><span class="icon-grid-view"></span> POLIKLINIK Application <sup></sup></a>
             <span class="element-divider"></span>
			 <a class="pull-menu" href="#"></a>
                    <ul class="element-menu">
						<li><a href="{{URL::to('pasien')}}">Pasien </a></li>
                        <li>
						
						
                            <a class="dropdown-toggle" href="#">Rekam Medis</a>
                            <ul class="dropdown-menu inverse " data-role="dropdown">
                                
								
								<li><a href="{{URL::to('rekammedis')}}">Rekam Medis</a></li>
                                <li><a href="{{URL::to('laboratorium')}}">Laboratourium</a></li>
								<li><a href="{{URL::to('tindakan')}}">Tindakan</a></li>
								<li><a href="{{URL::to('obat')}}">Obat</a></li>
								<div class="divider"></div>                              
                                
                            </ul>
                        </li>
                        <li><a href="{{URL::to('dokter')}}">Dokter </a></li>
                        <li>
                        <li><a href="{{URL::to('kunjungan')}}">Kunjungan </a></li>
                        <li>
                        <li><a href="{{URL::to('poliklinik')}}">Poliklinik </a></li>
                        <li>
						
					</ul>  
					<div class="no-tablet-portrait">
					<div class="element place-right">
                            <a class="dropdown-toggle" href="#">
                                <span class="icon-cog"></span>
                            </a>
                            <ul class="dropdown-menu place-right inverse" data-role="dropdown">
                                <li><a href="#">Ubah profil</a></li>
                                <li><a href="#">Keluar</a></li>
                            </ul>
                        </div>
                        <span class="element-divider place-right"></span>
                        <button class="element image-button image-left place-right">
                            FadhilAlyazidi
                            <img src="images/me.jpg"/>
                        </button>
					</div>	
		</nav>
	</nav>
	</header>
                                <center>
								<h1>Poliklinik</h1><br>
								<img src="images/home.jpg"/>
								<br><br><br>
								<a href="{{ URL::to('pasien') }}">Data Pasien</a>
								<h4>Poliklinik ini untuk memudahkan admin dalam mendata pasien dan mempermudah admin untuk menyelesaikan tugasnya</h4><br>
								</center>
 
</body>
</html>