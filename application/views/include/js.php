<style type="text/css">
.nav {
    background-color: #000 !important;
}

</style>
<script src="<?php echo base_url('assets/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/jquery.js')?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js')?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('js/sb-admin-2.min.js')?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/chart.js/Chart.min.js')?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('js/demo/chart-area-demo.js')?>"></script>
  <script src="<?php echo base_url('js/demo/chart-pie-demo.js')?>"></script>
  <script>
  new Chart(document.getElementById("horizontalBar"), {
    "type": "horizontalBar",
    "data": {
      "labels": ["SD", "SMP", "SMA", "SMK", "D1", "D3", "S1","S2/S3"],
      "datasets": [{
        "label": "Jumlah Penduduk",
        "data": [<? echo $sd?>, <? echo $smp?>, <? echo $sma?>, <? echo $smk?>, <? echo $d1?>, <? echo $d3?>, <? echo $s1?>,<? echo $s2?>],
        "fill": false,
        "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
          "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)",
          "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
        ],
        "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
          "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"
        ],
        "borderWidth": 1
      }]
    },
    "options": {
      "scales": {
        "xAxes": [{
          "ticks": {
            "beginAtZero": true
          }
        }]
      }
    }
  });

  new Chart(document.getElementById("sarkesBar"), {
    "type": "bar",
    "data": {
      "labels": ["RSU", "RSK", "Puskes RI", "Non-Ranap", "Puskel", "Pustu", "Apotek","Gadar"],
      "datasets": [{
        "label": "Jumlah Sarana Kesehatan",
        "data": [<? echo $rsu?>, <? echo $rsk?>, <? echo $puskesri?>, <? echo $puskes?>, <? echo $puskel?>, <? echo $pustu?>, <? echo $apotek?>,<? echo $s2?>],
        "fill": false,
        "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
          "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)",
          "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
        ],
        "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
          "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"
        ],
        "borderWidth": 1
      }]
    },
    "options": {
      "scales": {
        "xAxes": [{
          "ticks": {
            "beginAtZero": true
          }
        }]
      }
    }
  });

</script>
  <script>
    <?
//foreach ($kunjungan_faskes_data as $kunjungan_faskes)
     //       {
   //           $merk[] = $kunjungan_faskes->nama_faskes;
       //       $stok[] = (float) $kunjungan_faskes->rj_l;
         //     }
    //labels: <?php echo json_encode($merk);
?>
  //doughnut
  var ctxD = document.getElementById("doughnutChart").getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
      
      labels: ["Laki-Laki", "Perempuan"],
      datasets: [{
        data: [<?echo $l?>, <?echo $p?>],
        backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
        hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
      }]
    },
   options: {
    responsive :true,
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: true,
      caretPadding: 10,
    },
    legend: {
      display: true
    },
    cutoutPercentage: 80,
  },
  });

  Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart1");
var myPieChart1 = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Direct", "Referral", "Social"],
    datasets: [{
      data: [30, 30, 40],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

</script>
   <script type="text/javascript">
    $(document).ready(function(){
        $('#kd_kab').change(function(){
            var id=$(this).val();
            $.ajax({
                url : "<?php echo base_url();?>index.php/m_puskes/get_kec",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id+'>'+data[i].kecamatan+'</option>';
                    }
                    $('.subkategori').html(html);
                     
                }
            });

           
        });
    });

    $(document).ready(function(){
        $('#kd_rs').change(function(){
            var id=$(this).val();
            $.ajax({
                url : "<?php echo base_url();?>index.php/m_rs/get_rs",
                method : "POST",
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id+'>'+data[i].nama_rs+'</option>';
                    }
                    $('.subkategori').html(html);
                     
                }
            });
        });
    });

    $(document).ready(function(){
        $('#kd_kec').change(function(){
             //var id=$(this).val();
            var id2 = $( "#kd_kec" ).val();
            $.ajax({
                url : "<?php echo base_url();?>index.php/m_puskes/get_puskes",
                method : "POST",
                data : {id2: id2},
                async : false,
                dataType : 'json',
                success: function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<option value='+data[i].id+'>'+data[i].nama+'</option>';
                    }
                    $('.subpuskes').html(html);
                     
                }
            });
            
        });
    });
</script>