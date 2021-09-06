<div class="content-wrapper">
    <h2><?= $title?></h2>
    <div class="row">
        <div class="col-md-12">
            <?php 
                if ($this->session->flashdata('pesan')){
                    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                            '.$this->session->flashdata('pesan').'<button type="button" class="close" data-dismiss="alert" aria-label="Close">x
                            <span aria-hidden="true"></span>
                        </button>
                        </div>';
                }
            ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Peta</h4>
                  <div id="map" style = "width: 100%; height:600px;"></div>
                 
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Input Sekolah</h4>
                  <!-- <p class="card-description">
                    Basic form layout
                  </p> -->
                    <?php 
                        echo validation_errors('
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                           ','<button type="button" class="close" data-dismiss="alert" aria-label="Close">x
                           <span aria-hidden="true"></span>
                       </button>
                        </div>
                        ');
                        echo form_open('sekolah/input');?>
                        <div class="form-group">
                            <label >Nama Sekolah</label>
                            <input type="text" name ="nama_sekolah" class="form-control" placeholder="Nama Sekolah" value =<?= set_value('nama_sekolah')?>>
                        </div>
                        <div class="form-group">
                            <label >Alamat</label>
                            <input type="text" name ="alamat" class="form-control" placeholder="Alamat" value =<?= set_value('alamat')?> >
                        </div>
                        <div class="form-group">
                            <label >Status</label>
                            <select name="status_sekolah" id="" class ="form-control">
                                <option value="">--Pilih Sekolah---</option>
                                <option value="Negeri">Negeri</option>
                                <option value="Swasta">Swasta</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Kepala Sekolah</label>
                            <input type="text" name ="kepala_sekolah" class="form-control"  placeholder="Kepala Sekolah" value =<?= set_value('kepala_sekolah')?>>
                        </div>
                        <div class="form-group">
                            <label >Latitude</label>
                            <input type="text" id="Latitude" name ="latitude" class="form-control" placeholder="Latitude" readonly value =<?= set_value('latitude')?> >
                        </div>
                        <div class="form-group">
                            <label >Longitude</label>
                            <input type="text" id ="Longitude" name ="longitude" class="form-control" placeholder="Longitude" readonly value =<?= set_value('longitude')?> >
                        </div>
                        <div class="form-group">
                            <label >Keterangan</label>
                            <input type="text" name ="ket" class="form-control" placeholder="keterangan" value =<?= set_value('keterangan')?>>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-light">Cancel</button>
                            <button type="submit" class="btn btn-sm btn-primary ">Submit</button>
                        </div>


                        <?php echo form_close();?>

                    
                </div>
            </div>
        </div>
    </div>
</div>


<script>
var curLocation=[0,0];
if (curLocation[0]==0 && curLocation[1]==0) {
	curLocation =[-6.447686, 111.024596];	
}

    var mymap = L.map('map').setView([-6.447686, 111.024596], 14);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
    }).addTo(mymap);

    mymap.attributionControl.setPrefix(false);
    var marker = new L.marker(curLocation, {
        draggable:'true'
    });

    marker.on('dragend', function(event) {
    var position = marker.getLatLng();
    marker.setLatLng(position,{
        draggable : 'true'
        }).bindPopup(position).update();
        $("#Latitude").val(position.lat);
        $("#Longitude").val(position.lng).keyup();
    });

    $("#Latitude, #Longitude").change(function(){
        var position =[parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
        marker.setLatLng(position, {
        draggable : 'true'
        }).bindPopup(position).update();
        mymap.panTo(position);
    });
    mymap.addLayer(marker);

</script>
