@extends("layout.home")

@section("content")

<div class="container">
        <br />
        
        <h1>
            <a href=""><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
            <small class="on-right">Tindakan</small>
        </h1>
        
        <fieldset>
            
                 <label>Kode Tindakan</label>
                <div class="input-control text" data-role="input-control">
                    <input type="text" >
                <button class="btn-clear" tabindex="-1"></button>
                </div>            
            
                <label>Nama Tindakan</label>
                <div class="input-control text" data-role="input-control">
                    <input type="text" >
                <button class="btn-clear" tabindex="-1"></button>
                </div>
                 
                
                <label>Keterangan</label>
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