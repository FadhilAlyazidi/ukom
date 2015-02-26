<header>
	<nav class="navigation-bar default fixed-top">
		<nav class="navigation-bar-content">
			 <a href="/" class="element"><span class="icon-grid-view"></span> POLIKLINIK Application <sup></sup></a>
             <span class="element-divider"></span>
			 <a class="pull-menu" href="#"></a>
                    <ul class="element-menu">
                        <li><a href="{{URL::to("pasien")}}">Pasien</a></li>
                        <li>
                            <a class="dropdown-toggle" href="#">Rekam Medis</a>
                            <ul class="dropdown-menu " data-role="dropdown">
                                <li><a href="{{URL::to("rekammedis")}}">Rekam Medis</a></li>                            
                                <li><a href="{{URL::to("laboratorium")}}">Laboratorium</a></li>
								<li><a href="{{URL::to("tindakan")}}">Tindakan</a></li>
								<li><a href="{{URL::to("obat")}}">Obat</a></li>
								
								<div class="divider"></div>
                                
                            </ul>
                        </li>
						<li><a href="{{ URL::to("dokter") }}">Dokter</a></li>
						<li><a href="{{URL::to("kunjungan")}}">Kunjungan</a></li>
                        <li><a href="{{URL::to("poliklinik")}}">Poliklinik</a></li>
					</ul>                    
					<div class="no-tablet-portrait">
					<div class="element place-right">
                            <a class="dropdown-toggle" href="#">
                                <span class="icon-cog"></span>
                            </a>
                            <ul class="dropdown-menu place-right" data-role="dropdown">
                                <li><a href="{{URL::to("profil")}}">Ubah profil</a></li>
                                <li><a href="{{URL::to("login")}}">Keluar</a></li>
                            </ul>
                        </div>
                        <span class="element-divider place-right"></span>
                        <button class="element image-button image-left place-right">
                            FadhilAlyazidi
                            <img src="{{asset("images/me.jpg")}}"/>
                        </button>
					</div>
		</nav>
	</nav>
	</header>