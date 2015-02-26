v@extends("layout.home")

@section("content")

<div class="container">
        <br />
        
        <h1>
            <a href=""><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
            <small class="on-right">Kunjungan</small>
        </h1>
        
        <fieldset>
        
                
                <label>Tanggal Kunjungan</label>
				<div class="input-control text size" data-role="datepicker" data-format="dddd, mmmm/d/yyyy" data-effect="fade">
                <input type="text" name="tglkunjungan"/>
                <button class="btn-date" type="button"></button>
                </div>
                
                <label>No Pasien</label>
                <div class="input-control text" data-role="input-control">
                    <input type="text" >
                <button class="btn-clear" tabindex="-1"></button>
                </div>
                
                <label>Kode Poliklinik</label>
                <div class="input-control text" data-role="input-control">
                    <input type="text" >
                <button class="btn-clear" tabindex="-1"></button>
                </div>
                
                <label>Jam Kunjungan</label>
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