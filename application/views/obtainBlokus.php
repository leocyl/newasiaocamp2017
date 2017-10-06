<div class="content-wrapper">    
    <section class="content-header">
      <h1>
        <i class="fa fa-ticket"></i> 取得Blokus拼圖
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 text-center">
                <form method="post" action="<?php echo base_url(); ?>obtain">
					<div class="form-group has-feedback">
					   <br />
					   <div class="form-group has-feedback">
                        <select class="form-control required" name="userId" style="display: none">
                            <option value="<?php echo $userId ?>"></option>
                        </select>
                    </div>
					   <input type="text" class="form-control" placeholder="Code" name="taskcode" required /><br />
					   <input type="submit" value="提交" class="btn btn-primary btn-block btn-flat" /><br />
				    </div>
				</form>
		    </div>
		    <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 text-center">
				<?php $this->load->helper('form'); ?>
					<?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                        ?>
                        <?php echo $error; ?>
                        <?php
                    }
                ?>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="codeokay" style="display:none">
            <form id="blokussubmit">
                
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    
                    <h3>請選擇其中一個Blokus拼圖：</h3><br />
                    
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                        <input type="radio" name="BlokusCode" id="radio_<?php echo $blokus1 ?>" value="<?php echo $blokus1 ?>"><br>
                        <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus1 ?>.png" />
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                        <input type="radio" name="BlokusCode" id="radio_<?php echo $blokus2 ?>" value="<?php echo $blokus2 ?>"><br>
                        <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus2 ?>.png" />
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                        <input type="radio" name="BlokusCode" id="radio_<?php echo $blokus3 ?>" value="<?php echo $blokus3 ?>"><br>
                        <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus3 ?>.png" />
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                        <input type="radio" name="BlokusCode" id="radio_<?php echo $blokus4 ?>" value="<?php echo $blokus4 ?>"><br>
                        <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus4 ?>.png" />
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                        <input type="radio" name="BlokusCode" id="radio_<?php echo $blokus5 ?>" value="<?php echo $blokus5 ?>"><br>
                        <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus5 ?>.png" />
                    </div>
                    
                   
                </div>
                 <br>
                    <hr>
                    </br>
                    <h3>請選擇所需Blokus拼圖的方向：</h3><br />
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="blokus_<?php echo $blokus1 ?>" style="display:none">
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus1 ?>1"  value="1"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus1 ?>1.png" /> 
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus1 ?>2" value="2"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus1 ?>2.png" /> 
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus1 ?>3" value="3"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus1 ?>3.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus1 ?>4" value="4"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus1 ?>4.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus1 ?>5" value="5"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus1 ?>5.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus1 ?>6" value="6"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus1 ?>6.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus1 ?>7" value="7"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus1 ?>7.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus1 ?>8" value="8"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus1 ?>8.png" /> 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="blokus_<?php echo $blokus2 ?>" style="display:none">
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus2 ?>1"  value="1"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus2 ?>1.png" /> 
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus2 ?>2" value="2"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus2 ?>2.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus2 ?>3" value="3"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus2 ?>3.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus2 ?>4" value="4"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus2 ?>4.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus2 ?>5" value="5"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus2 ?>5.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus2 ?>6" value="6"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus2 ?>6.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus2 ?>7" value="7"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus2 ?>7.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus2 ?>8" value="8"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus2 ?>8.png" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="blokus_<?php echo $blokus3 ?>" style="display:none">
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus3 ?>1"  value="1"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus3 ?>1.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus3 ?>2" value="2"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus3 ?>2.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus3 ?>3" value="3"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus3 ?>3.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus3 ?>4" value="4"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus3 ?>4.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus3 ?>5" value="5"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus3 ?>5.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus3 ?>6" value="6"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus3 ?>6.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus3 ?>7" value="7"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus3 ?>7.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus3 ?>8" value="8"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus3 ?>8.png" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="blokus_<?php echo $blokus4 ?>" style="display:none">
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus4 ?>1"  value="1"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus4 ?>1.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus4 ?>2" value="2"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus4 ?>2.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus4 ?>3" value="3"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus4 ?>3.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus4 ?>4" value="4"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus4 ?>4.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus4 ?>5" value="5"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus4 ?>5.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus4 ?>6" value="6"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus4 ?>6.png" /> 
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus4 ?>7" value="7"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus4 ?>7.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus4 ?>8" value="8"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus4 ?>8.png" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="blokus_<?php echo $blokus5 ?>" style="display:none">
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus5 ?>1"  value="1"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus5 ?>1.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus5 ?>2" value="2"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus5 ?>2.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus5 ?>3" value="3"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus5 ?>3.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus5 ?>4" value="4"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus5 ?>4.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus5 ?>5" value="5"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus5 ?>5.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus5 ?>6" value="6"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus5 ?>6.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus5 ?>7" value="7"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus5 ?>7.png" />
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 text-center">
                            <input type="radio" name="Form" id="radio_<?php echo $blokus5 ?>8" value="8"><br>
                            <img src="<?php echo base_url(); ?>assets/images/blokus/<?php echo $blokus5 ?>8.png" />
                        </div>
                    
                </div>
                <br>
                    <hr>
                    </br>
                    <select name="RoleId" style="display: none">
                        <option value="<?php echo $role ?>"></option>
                    </select>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center table-responsive">
                <br />
                <h3>請將拼圖放入以下版圖（以Blokus紅格為準）：</h3>
                <br />
                <select class="form-control required" name="Origin" style="display: none">
                    <option id="origingrid"></option>
                </select>
                  <table id="blokus" align="center" height="100%">
                    <tbody id="blokusmap">
                    </tbody>
                  </table>
                </div>
                
            </form>
        </div>
    </section>
</div>

<style type="text/css">
  table#blokus{
    border: 1px solid black;
    border-collapse: collapse;
    border-color: gray;
  }
  table#blokus tr, td {
    border: 1px solid black;
    border-collapse: collapse;
    min-width: 18px;
    height: 18px;
    font-size: 1em;
    text-align: center;
    border-color: #A9A9A9;
  }
  .button {
    background-color: #fff;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    font-size: 1em;
    margin: 0px 0px;
    cursor: pointer;
    padding: 0px 0px;
}


hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
} 

</style>

<script>
    $( document ).ready(function(){
        var used = <?php echo $used ?>;
        if (used == '0')
            $("#codeokay").show();
        else
            $("#codeokay").hide();
    }
    )

    $('input[name=BlokusCode]').click(function () {
        if (this.id == "radio_<?php echo $blokus1 ?>")
        {
            $("#blokus_<?php echo $blokus1 ?>").show();
            $("#blokus_<?php echo $blokus2 ?>").hide();
            $("#blokus_<?php echo $blokus3 ?>").hide();
            $("#blokus_<?php echo $blokus4 ?>").hide();
            $("#blokus_<?php echo $blokus5 ?>").hide();
        } 
        else 
        {
            if (this.id == "radio_<?php echo $blokus2 ?>")
            {
                $("#blokus_<?php echo $blokus2 ?>").show();
                $("#blokus_<?php echo $blokus1 ?>").hide();
                $("#blokus_<?php echo $blokus3 ?>").hide();
                $("#blokus_<?php echo $blokus4 ?>").hide();
                $("#blokus_<?php echo $blokus5 ?>").hide();
            }
            else
            {
                if (this.id == "radio_<?php echo $blokus3 ?>")
                {
                    $("#blokus_<?php echo $blokus3 ?>").show();
                    $("#blokus_<?php echo $blokus2 ?>").hide();
                    $("#blokus_<?php echo $blokus1 ?>").hide();
                    $("#blokus_<?php echo $blokus4 ?>").hide();
                    $("#blokus_<?php echo $blokus5 ?>").hide();
                }
                else
                {
                    if (this.id == "radio_<?php echo $blokus4 ?>")
                    {
                        $("#blokus_<?php echo $blokus4 ?>").show();
                        $("#blokus_<?php echo $blokus2 ?>").hide();
                        $("#blokus_<?php echo $blokus3 ?>").hide();
                        $("#blokus_<?php echo $blokus1 ?>").hide();
                        $("#blokus_<?php echo $blokus5 ?>").hide();
                    }
                    else
                    {
                        if (this.id == "radio_<?php echo $blokus5 ?>")
                        {
                            $("#blokus_<?php echo $blokus5 ?>").show();
                            $("#blokus_<?php echo $blokus2 ?>").hide();
                            $("#blokus_<?php echo $blokus3 ?>").hide();
                            $("#blokus_<?php echo $blokus4 ?>").hide();
                            $("#blokus_<?php echo $blokus1 ?>").hide();
                        }
                    }
                }
            }
        }
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
       
/********** Live View of blokus table *************/
        
        //"https://sheets.googleapis.com/v4/spreadsheets/1cdHUgOYcsnIPPVRFhM_pf7fQdyxU2AhFKP2FmG04Ono/values/View!A1%3AAP42?key=AIzaSyDbncw5TqyuNcy0BfN8fpcpHfyUbzYxyXQ";

        var url1 = "https://sheets.googleapis.com/v4/spreadsheets/";
        var url2 = "/values/View!";
        var url3 = "%3A";
        var url4 = "?key=";
        
        var sheetid = "1cdHUgOYcsnIPPVRFhM_pf7fQdyxU2AhFKP2FmG04Ono"
        var secret = "AIzaSyDbncw5TqyuNcy0BfN8fpcpHfyUbzYxyXQ";

        var range1 = "A1";
        var range2 = "AP42";
        
        var jsonurl = url1 + sheetid + url2 + range1 + url3 + range2 + url4 + secret;

        var entries = [];
        var count = 0;
        
        var col = 0;
        var row = -1;

        $.getJSON( jsonurl , function(result){
          $.each(result["values"] , function(a, b){
            row += 1;
            col = 1;
            var tblRow = '<tr>';
            $.each(result["values"][count] , function(c , d){
              if(d == '4'){
                tblRow += '<td style="background-color: #9fc5e8 ; color: #9fc5e8">' + '' + "</td>";
                col += 1;
              }
              else
                if(d == '5'){
                  tblRow += '<td style="background-color: #38761d ; color: #38761d">' + '' + "</td>";
                  col += 1;
                }
                else
                  if(d == '3'){
                    tblRow += '<td style="background-color: #1155cc ; color: #1155cc">' + '' + "</td>";
                    col += 1;
                  }
                  else
                    if(d == '6'){
                      tblRow += '<td style="background-color: #ead1dc ; color: #ead1dc">' + '' + "</td>";
                      col += 1;
                    }
                    else
                      if(d == '---'){
                        tblRow += '<td style="background-color: #C0C0C0 ; color: #C0C0C0">' + '' + "</td>";
                      }
                      else
                        if(d == '霧'){
                          tblRow += '<td style="background-color: #9fc5e8">' + d + "</td>";
                        }
                        else
                          if(d == '楓'){
                            tblRow += '<td style="background-color: #38761d ; color : white">' + d + "</td>";
                          }
                          else
                            if(d == '蒼'){
                              tblRow += '<td style="background-color: #1155cc ; color : white">' + d + "</td>";
                            }
                            else
                              if(d == '嘯'){
                                tblRow += '<td style="background-color: #ead1dc">' + d + "</td>";
                               }
                              else
                                if(d == '0'){
                                    //tblRow += '<td>' + "" + "</td>";
                                    
                                    tblRow += '<td><input type="submit" style="font-size:0; width:15px; " onclick="document.getElementById(' + "'" + 'origingrid' + "'" + ').value = ' + "'" + col + '.' + row + '.' + "'" + '" /></td>';
                                    col += 1;
                                }
                                else
                                {
                                    tblRow += '<td>' + "   " + "</td>";
                                }
            });
            tblRow += "</tr>"
            $("#blokusmap").append(tblRow);
            count += 1;
          })
        });
/********** End of Live View of blokus table *************/
</script>
<script src="//script.sheetsu.com/"></script>
<script>

    document.querySelector("#blokussubmit").addEventListener("submit", function(e) {
      e.preventDefault();
      saveData();
    });
    
    function successFunc(data) {
      window.users = data;
    }
    
    function saveData() {
      // Get data from inputs
      var RoleId = document.getElementsByName("RoleId")[0].value,
          BlokusCode = $("input[name=BlokusCode]:checked").val(),
          Form = $("input[name=Form]:checked").val(),
          Origin = document.getElementsByName("Origin")[0].value;

      // Prepare JSON to be send
      var data = { RoleId: RoleId, BlokusCode: BlokusCode, Form: Form, Origin: Origin };
      
      function successFunc(data) {
          if(data[0].Valid == "1")
          {
            data = { RoleId: RoleId, BlokusCode: BlokusCode, Form: Form, Origin: Origin };
            Sheetsu.write("https://sheetsu.com/apis/v1.0/262fa3aad0f0/sheets/Record", data, {}, function(x) {window.location = "<?php echo base_url();?>blokussubmitsuccess";});
          }
          else
          {
              if(data[0].Valid == "0"){
                  alert("無法放置Blokus拼圖!");
              }
              else
                alert("無法放置Blokus!");
          }
      }
      
      Sheetsu.write("https://sheetsu.com/apis/v1.0/262fa3aad0f0/sheets/ValidationRecord", data, {}, function(x) {
          if(confirm('你確定嗎？') == true){Sheetsu.read("https://sheetsu.com/apis/v1.0/262fa3aad0f0/sheets/Validation", { search: data }, successFunc);};
      });

}
  </script>