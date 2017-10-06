<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-home"></i> 主頁
      </h1>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
             <div class="small-box bg-aqua">
                <div class="inner">
                  <div id="mo"></div>
                  <p>霧凝霜</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-snowy"></i>
                </div>
                <a href="<?php echo base_url(); ?>blokusView" class="small-box-footer"> 查看戰況 <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <div id="fung"></div>
                  <p>楓緣騫</p>
                </div>
                <div class="icon">
                  <i class="ion ion-leaf"></i>
                </div>
                <a href="<?php echo base_url(); ?>blokusView" class="small-box-footer"> 查看戰況 <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <div id="chong"></div>
                  <p>蒼雲皞</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-cloud-outline"></i>
                </div>
                <a href="<?php echo base_url(); ?>blokusView" class="small-box-footer"> 查看戰況 <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <div id="siu"></div>
                  <p>嘯翔風</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-paw"></i>
                </div>
                <a href="<?php echo base_url(); ?>blokusView" class="small-box-footer"> 查看戰況 <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-xs-12 text-center">
                <h1>CityHunt x Blokus</h1>
                <br />
                <h4>以八個細組（即大組）為一個勢力進行遊戲，每勢力視為同一顏色。遊戲內共有四個大組。</h4>
                <h4>各細組每完成一個task後可以選擇放一棋子放在空棋格上，也可放棄不放棋子。同顏色的方塊只能角對角相連，不能邊對邊。沒有位置擺放的細組就必須放棄放棋。</h4>
                <h4>棋子可以隨意翻轉，以對稱形式放下，並可以隨意旋轉，每次為90度。</h4>
                <h4>每大組的第一個棋子各自從一個角落開始。</h4>
                <h4>所有大組無法放棋子或收task後，oc會計算各大組在棋盤上的方格數總和，最多者為勝。</h4>
            </div>
          </div>
    </section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
        var jsonurl = "https://sheets.googleapis.com/v4/spreadsheets/1cdHUgOYcsnIPPVRFhM_pf7fQdyxU2AhFKP2FmG04Ono/values/View!B45%3AB48?key=AIzaSyDbncw5TqyuNcy0BfN8fpcpHfyUbzYxyXQ";
        
        $.getJSON( jsonurl, function( json ) {
          
           var fung = json.values[1];
           var chong = json.values[2];
           var siu = json.values[3];
         
         
         $("#mo").append("<h3>" + json.values[0] + "</h3>");
         $("#fung").append("<h3>" + json.values[1] + "</h3>");
         $("#chong").append("<h3>" + json.values[2] + "</h3>");
         $("#siu").append("<h3>" + json.values[3] + "</h3>");
        });

</script>