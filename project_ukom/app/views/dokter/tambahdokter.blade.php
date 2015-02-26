@extends("layout.home")

@section("content")

<div class="container">
        <br />
        
        <h1>
            <a href=""><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
            <small class="on-right">Dokter</small>
        </h1>
        
        <fieldset>
            
            <label>Kode Dokter</label>
                <div class="input-control text" data-role="input-control">
                    <input type="text" >
                <button class="btn-clear" tabindex="-1"></button>
                </div>
                
                <label>Kode Poliklinik</label>
                <div class="input-control text" data-role="input-control">
                    <input type="text" >
                <button class="btn-clear" tabindex="-1"></button>
                </div>
                
                <label>Tanggal Kunjungan</label>
				<div class="input-control text size" data-role="datepicker" data-format="dddd, mmmm/d/yyyy" data-effect="fade">
                <input type="text" name="tglkunjungan"/>
                <button class="btn-date" type="button"></button>
                </div>
                
                <label>Kode User</label>
                <div class="input-control text" data-role="input-control">
                    <input type="text" >
                <button class="btn-clear" tabindex="-1"></button>
                </div>
                
                <label>Nama Dokter</label>
                <div class="input-control text" data-role="input-control">
                    <input type="text" >
                <button class="btn-clear" tabindex="-1"></button>
                </div>
                
                <label>SIP</label>
                <div class="input-control text" data-role="input-control">
                    <input type="text" >
                <button class="btn-clear" tabindex="-1"></button>
                </div>
                
                <label>Tempat Lahir</label>
                <div class="input-control text" data-role="input-control">
                    <input type="text" >
                <button class="btn-clear" tabindex="-1"></button>
                </div>
                
                <label>No Telepon</label>
                <div class="input-control text" data-role="input-control">
                    <input type="text" >
                <button class="btn-clear" tabindex="-1"></button>
                </div>
                
                <label>Alamat</label>
                <div class="input-control text" data-role="input-control">
                    <input type="text" >
                <button class="btn-clear" tabindex="-1"></button>
                </div>
                
            
		
 
<script>
    $("#datepicker").datepicker();
</script>
            <button class="large" class="info">Tambah</button>
			 <button class="large" class="info">Batal</button>
        </fieldset>
    </div>