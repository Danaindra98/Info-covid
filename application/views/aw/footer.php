<section class="content-header">
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModal" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header" >
            <h5 class="modal-title" id="newSubMenuModal">List Rumah Sakit Rujukan Covid 19</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
     <div class="container" style="text-align: center;">
        <strong>**referensi by : </strong>          
            <a href="https://indonesia.go.id/layanan/kesehatan/ekonomi/daftar-100-rumah-sakit-rujukan-covid-19-di-indonesia">https://indonesia.go.id</a>
     </div>
  <div class="container">
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%" >
      <thead>
        <tr>
          <th><center>No</th></center>
          <th><center> provinsi </th></center>
          <th><center> nama rs</th></center>
          <th data-priority="1"><center> alamat</th></center>
          <th><center> telepon</th></center>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($tbl_rs as $rs) {
        ?>
        <tr>
          <td><?php echo $no++;?></td>
          <td><?php echo $rs->provinsi; ?></td>
          <td><?php echo $rs->nama_rs; ?></td>
          <td><?php echo $rs->alamat; ?></td>

          <td><?php echo $rs->telepon; ?></td>
         
        </tr>
        <?php } ?>
      </tbody>
    </table>
            
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
          </div>
        </div>
      </section>
<footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="#">danaindra.co</a>.</strong>
      <strong>**SUMBER DATA WHO &  SUMBER LAINNYA. </strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Server By</b><a href="https://cloud.google.com/"> Google Cloud
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url()?>assets/plugins/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/chart.js/Chart.bundle.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/chart.js/Chart.bundle.js"></script>
<script src="<?php echo base_url()?>assets/plugins/chart.js/Chart.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url()?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url()?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url()?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>



  <script>
$(document).ready(function(){
    
      getGlobalInfo();
      getCountryInfo();
      getIndoInfo();
      

    });

    function getIndoInfo(){
      $.ajax({
      url: 'https://coronavirus-19-api.herokuapp.com/countries/indonesia',
      success: function (data){

        try{
          var json = data;

          var negara = json.country;
          var kasus = json.cases;
          var kasusbaru = json.todayCases;
          var meninggal = json.deaths;
          var meninggalsekarang = json.todayDeaths;
          var sembuh = json.recovered;
          var aktif = json.active;

          $("#indo-negara").html(negara);
          $("#indo-kasus").html(kasus);
          $("#indo-kasusbaru").html(kasusbaru);
          $("#indo-meninggal").html(meninggal);
          $("#indo-meninggalsekarang").html(meninggalsekarang);
          $("#indo-sembuh").html(sembuh);
          $("#indo-aktif").html(aktif);



        }catch(e){
         /*alert("gagal mendapatkan data dari server");*/
        }
      }, error : function(resp){

      }
    });
    }

    function getGlobalInfo(){
      $.ajax({
      url: 'https://coronavirus-19-api.herokuapp.com/all',
      success: function (data){

        try{
          var json = data;

          var kasus = json.cases;
          var meninggal = json.deaths;
          var pulih = json.recovered;

          $("#global-kasus").html(kasus);
          $("#global-meninggal").html(meninggal);
          $("#global-pulih").html(pulih);
        }catch(e){
          alert("gagal mendapatkan data dari server");
        }
      }, error : function(resp){

      }
    });
}
/*
 function getGlobalInfo(){
      $.ajax({
      url: 'https://covid19-api.azurewebsites.net/api/v1/stats',
      success: function (data){

        try{
          var json = data;

          var kasus = json.total;
          var pulih = json.recovered;
          var meninggal = json.deaths;
          var lastupdate = json.fetchedAt;

          $("#global-kasus").html(kasus);
          $("#global-pulih").html(pulih);
          $("#global-meninggal").html(meninggal);
          $("#global-lastupdate").html(lastupdate);
        }catch(e){
          alert("gagal mendapatkan data dari server");
        }
      }, error : function(resp){

      }
    });
}*/
    function getCountryInfo(){
      $.ajax({
        url: 'https://coronavirus-19-api.herokuapp.com/countries',
        success: function(data){
          try{
            var json = data;


            if(json.length>0){
              var i;
              for(i = 0; i<json.length; i++){
                var dataNegara = json[i]
                var html = [];
                var no = i+1;

                var namaNegara = dataNegara.country;
                var kasus = dataNegara.cases;
                var kasusHariIni = dataNegara.todayCases;
                var active = dataNegara.active;
                var meninggal = dataNegara.deaths;
                var meninggalHariIni = dataNegara.todayDeaths;
                var pulih = dataNegara.recovered;
                var kritis = dataNegara.critical;



                html.push("<tr>");

                html.push("<td>" + no + "</td>");
                html.push("<td>" + namaNegara + "</td>");
                html.push("<td>" + kasus + "</td>");
                html.push("<td>" + kasusHariIni + "</td>");
                html.push("<td>" + active + "</td>");
                html.push("<td>" + meninggal + "</td>");
                html.push("<td>" + meninggalHariIni + "</td>");
                html.push("<td>" + pulih + "</td>");
                html.push("<td>" + kritis + "</td>");

                html.push("</tr>");

                $("#daftar-negara").append(html.join(""));
              }
            }
          }catch(e){

          }
        }, error: function(){

        }
      });
    }


  </script>



 <!--
<script type="text/javascript">
  document.onmousedown=disableclick;
status="Mau ngapain ?";
function disableclick(event)
{
  if(event.button==2)
   {
     alert(status);
     return false;   
   }
}</script>
-->

<script type="text/javascript">
  $(document).ready(function(){
      $('#table_id').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
    })
</script>

</body>
</html>