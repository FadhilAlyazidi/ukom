@extends("layout.home")

@section("content")

<div class="container">
        <br />
        
        <h1>
            <a href=""><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
            <small class="on-right">Poliklinik</small>
        </h1>
        
        <fieldset>
                
                <label>Kode Poliklinik</label>
                <div class="input-control text" data-role="input-control">
                    <input type="text" >
                <button class="btn-clear" tabindex="-1"></button>
                </div>
                
                 <label>Nama Poliklinik</label>
                <div class="input-control text" data-role="input-control">
                    <input type="text" >
                <button class="btn-clear" tabindex="-1"></button>
                </div>
                
                
                <label>lantai</label>
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