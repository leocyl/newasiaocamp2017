<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>新亞書院迎新營</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/dimension/css/main.css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/dimension/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<!--<div class="logo">
							<span class="icon fa-circle"></span>
						</div>-->
						<div class="content">
							<div class="inner">
								<h1>新亞書院迎新營</h1>
								<p> 求 學 與 作 人 ， 貴 能 齊 頭 並 進 ， 更 貴 能 融 通 合 一 </p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">簡介</a></li>
								<!--<li><a href="#work">營主的話</a></li>-->
								<li><a href="#login">登入</a></li>
								<li><a href="#schedule">時間表</a></li>
							</ul>
						</nav>
						<div class="content">
						    <div class="inner">
						        <ul class="icons">
        							<li><a href="https://www.facebook.com/newasiaocamp/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        							<li><a href="https://www.instagram.com/kelvinleewingyuen/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
        							<li><a href="tel:60392591" class="icon fa-whatsapp"><span class="label">Whatsapp</span></a></li>
        						</ul>
					       	<p class="copyright">&copy;2017 <a href="mailto:newasiaocamp@gmail.com">新亞書院迎新營</a>.</strong> 保留一切權利。</p>
						    </div>
						</div>
						<!--div class="content">
						    <div class="inner">
    					    	<h2>相簿</h2>
        						<nav>    
        						    <ul>
                                        <li><a id="day1tab" onclick="openAlbum('Day1', this);">Day 1</a></li>
                                        <li><a id="day2tab" onclick="openAlbum('Day2', this);">Day 2</a></li>
                                        <li><a id="day3tab" onclick="openAlbum('Day3', this);">Day 3</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                       
                        <div id="Day1" class="tabcontent" style="display: none;">
						    <div id="day1tn"></div>
						    <!--a href="#day1_1" onclick="loadPhoto('day1_1')"><img src="assets/photo/thumbnails/day1_1_tn.jpg" style="width:150px;padding: 5px;"></a-->
        			    <!--/div>
        			
        				<div id="Day2" class="tabcontent" style="display: none;">
						    <div id="day2tn"></div>
            		    </div>
            	
            			<div id="Day3" class="tabcontent" style="display: none;">
    					    <div id="day3tn"></div>
            			</div-->
				    </header>
                </div>
				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">簡介</h2>
								<span class="image main"><img src="assets/images/occover.jpg" alt="" /></span>
								<p>唯天下之誠 明天下之性</p>

                                <p>在同一個時空<br />
                                有大學生為爭取公義面臨牢獄之苦<br />
                                亦有大學生為爭取分數而跑得大汗淋漓<br />
                                Ocamp活動的形式是迎新遊戲<br />
                                但背後卻承載著一眾先賢傳下來的新亞精神</p>
                                
                                <p>四日三夜揮灑青春汗水背後<br />
                                也代表了你正式成為一位大學生<br />
                                對新亞的每人每物<br />
                                對社會的每事每刻<br />
                                都多了一份責任</p>
                                
                                <p>新亞學規第一條：求學與作人，貴能齊頭並進，更貴能融通合一<br />
                                不單只是求學與作人</p>
                                
                                <p>在探求學問和真理的同時<br />
                                在建立自我和關係的同時<br />
                                在追求自由和權利的同時<br />
                                今後要懂得坦然面對自己、良心面對社會</p>
                                
                                <p>不偏不倚、融通合一<br />
                                謂之「誠明」</p>
							</article>

                        
						<!-- 營主的話 -->
							<article id="work">
								<h2 class="major">營主的話</h2>
								<span class="image main"><img src="assets/images/fatyuen.jpg" alt="" /></span>
								<p></p>
							</article>
							
							
                        <!-- Schedule -->
							<article id="schedule">
								<h2 class="major">時間表</h2>
								<span class="image main"><img src="assets/images/timetable.jpg" alt="" /></span>
							</article> 
							
							
						<!-- 登入 -->
							<article id="login">
								<h2 class="major">登入</h2>
								<?php $this->load->helper('form'); ?>
								<?php
                                $this->load->helper('form');
                                $error = $this->session->flashdata('error');
                                if($error)
                                {
                                    ?>
                                    <div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $error; ?>                    
                                    </div>
                                <?php }
                                $success = $this->session->flashdata('success');
                                if($success)
                                {
                                    ?>
                                    <div class="alert alert-success alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $success; ?>                    
                                    </div>
                                <?php } ?>
								<form method="post" action="<?php echo base_url(); ?>loginMe">
									<div class="form-group has-feedback">
                                        <select class="form-control required" id="role" name="role">
                                            <option value="0">大組名稱</option>
                                            <?php
                                                if(!empty($roles))
                                                {
                                                    foreach ($roles as $rl)
                                                    {
                                                        ?>
                                                        <option value="<?php echo $rl->roleId ?>"><?php echo $rl->role ?></option>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                        
                                      </div>
                                      <br />
                                      <div class="form-group has-feedback">
                                        <select class="form-control required" id="email" name="email">
                                            <option value="0">細組名稱</option>
                                            <?php
                                                if(!empty($email))
                                                {
                                                    foreach ($email as $em)
                                                    {
                                                        ?>
                                                        <option value="<?php echo $em->email ?>" class="conditional <?php echo $em->roleId ?>"><?php echo $em->email ?></option>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                        
                                      </div>
                                      
                                      <br />
									<!--<input type="text" class="form-control" placeholder="用戶名稱" name="email" required /><br />-->
									<div class="form-group has-feedback">
                                        <input type="password" class="form-control" placeholder="密碼" name="password" required />
                                        
                                    </div>
									<ul class="actions">
										<li><input type="submit" value="登入" class="btn btn-primary btn-block btn-flat" /></li>
										<li><input type="reset" value="重設" /></li>
									</ul>
								</form>
								
							</article>
							
						<!-- album -->	
                            
						    <!--article id="day1_1">
						        <span class="image main"><img id="img_day1_1" src="" alt="" /></span>
						    </article-->

					</div>

				<!-- Footer 
					<footer id="footer">
					    <ul class="icons">
        							<li><a href="https://www.facebook.com/newasiaocamp/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        							<li><a href="https://www.instagram.com/kelvinleewingyuen/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
        							<li><a href="tel:60392591" class="icon fa-whatsapp"><span class="label">Whatsapp</span></a></li>
        						</ul>
						<p class="copyright">&copy;2017 <a href="mailto:newasiaocamp@gmail.com">新亞書院迎新營</a>.</strong> 保留一切權利。</p>
					</footer>
                -->
			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/dimension/js/jquery.min.js"></script>
			<script src="assets/dimension/js/skel.min.js"></script>
			<script src="assets/dimension/js/util.js"></script>
			<script src="assets/dimension/js/main.js"></script>
			<script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script>
                $(function() {
                  var conditionalSelect = $("#email"),
                    // Save possible options
                    options = conditionalSelect.children(".conditional").clone();
                
                  $("#role").change(function() {
                    var value = $(this).val();
                    conditionalSelect.children(".conditional").remove();
                    options.clone().filter("." + value).appendTo(conditionalSelect);
                  }).trigger("change");
                });
            </script>
            <script>
                 function openAlbum(albumName,elmnt) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    document.getElementById(albumName).style.display = "block";
                }
                // Get the element with id="defaultOpen" and click on it
                //document.getElementById("defaultOpen").click();      
                
                 function loadPhoto(photoName){
                     document.getElementById("img_" + photoName).src = "assets/photo/" + photoName + ".jpg";
                 }
                 
            </script>
            <!--script>
                $('#day1tab').one('click', function loadDay1tn(){
                       
                       var j, albumday1tn, albumday1fs;
                        for (j = 1; j <= 300/4; j++){
                            albumday1tn +=  '<br />' + 
                                            '<a href="#day1_' + (j * 4 - 3) + '" onclick="loadPhoto(' + "'day1_" + (j * 4 - 3) + "'" + ')"><img src="assets/photo/thumbnails/day1_' + (j * 4 - 3) + '_tn.jpg" style="width:150px;padding: 5px;"></a>' + 
                                            '<a href="#day1_' + (j * 4 - 2) + '" onclick="loadPhoto(' + "'day1_" + (j * 4 - 2) + "'" + ')"><img src="assets/photo/thumbnails/day1_' + (j * 4 - 2) + '_tn.jpg" style="width:150px;padding: 5px;"></a>' + 
                                            '<a href="#day1_' + (j * 4 - 1) + '" onclick="loadPhoto(' + "'day1_" + (j * 4 - 1) + "'" + ')"><img src="assets/photo/thumbnails/day1_' + (j * 4 - 1) + '_tn.jpg" style="width:150px;padding: 5px;"></a>' + 
                                            '<a href="#day1_' + (j * 4 - 0) + '" onclick="loadPhoto(' + "'day1_" + (j * 4 - 0) + "'" + ')"><img src="assets/photo/thumbnails/day1_' + (j * 4 - 0) + '_tn.jpg" style="width:150px;padding: 5px;"></a><br />';
                            albumday1fs +=  '<article id="day1_' + (j * 4 - 3) + '" style="display: none"><span class="image main"><img id="img_day1_' + (j * 4 - 3) + '" src="" alt="" /></span></article>' + 
                                            '<article id="day1_' + (j * 4 - 2) + '" style="display: none"><span class="image main"><img id="img_day1_' + (j * 4 - 2) + '" src="" alt="" /></span></article>' +
                                            '<article id="day1_' + (j * 4 - 1) + '" style="display: none"><span class="image main"><img id="img_day1_' + (j * 4 - 1) + '" src="" alt="" /></span></article>' +
                                            '<article id="day1_' + (j * 4 - 0) + '" style="display: none"><span class="image main"><img id="img_day1_' + (j * 4 - 0) + '" src="" alt="" /></span></article>';
                        }
                        //document.getElementById('day1tn').appendChild(albumday1tn);
                    //document.getElementById('main').appendChild(albumday1fs);
                        $('#day1tn').append(albumday1tn);
                        $('#main').append(albumday1fs);
                        //document.getElementById("day1tn").innerHTML = albumday1tn;
                        //document.getElementById("main").innerHTML = originalarticle + albumday1fs;
                    }
                )
                
                $('#day2tab').one('click', function loadDay2tn(){
                   
                    var k, albumday2tn, albumday2fs;
                    for (k = 1; k <= 240/4; k++){
                        albumday2tn +=  '<br />' + 
                                        '<a href="#day2_' + (k * 4 - 3) + '" onclick="loadPhoto(' + "'day2_" + (k * 4 - 3) + "'" + ')"><img src="assets/photo/thumbnails/day2_' + (k * 4 - 3) + '_tn.jpg" style="width:150px;padding: 5px;"></a>' + 
                                        '<a href="#day2_' + (k * 4 - 2) + '" onclick="loadPhoto(' + "'day2_" + (k * 4 - 2) + "'" + ')"><img src="assets/photo/thumbnails/day2_' + (k * 4 - 2) + '_tn.jpg" style="width:150px;padding: 5px;"></a>' + 
                                        '<a href="#day2_' + (k * 4 - 1) + '" onclick="loadPhoto(' + "'day2_" + (k * 4 - 1) + "'" + ')"><img src="assets/photo/thumbnails/day2_' + (k * 4 - 1) + '_tn.jpg" style="width:150px;padding: 5px;"></a>' + 
                                        '<a href="#day2_' + (k * 4 - 0) + '" onclick="loadPhoto(' + "'day2_" + (k * 4 - 0) + "'" + ')"><img src="assets/photo/thumbnails/day2_' + (k * 4 - 0) + '_tn.jpg" style="width:150px;padding: 5px;"></a><br />';
                        albumday2fs +=  '<article id="day2_' + (k * 4 - 3) + '" style="display: none"><span class="image main"><img id="img_day2_' + (k * 4 - 3) + '" src="" alt="" /></span></article>' + 
                                        '<article id="day2_' + (k * 4 - 2) + '" style="display: none"><span class="image main"><img id="img_day2_' + (k * 4 - 2) + '" src="" alt="" /></span></article>' +
                                        '<article id="day2_' + (k * 4 - 1) + '" style="display: none"><span class="image main"><img id="img_day2_' + (k * 4 - 1) + '" src="" alt="" /></span></article>' +
                                        '<article id="day2_' + (k * 4 - 0) + '" style="display: none"><span class="image main"><img id="img_day2_' + (k * 4 - 0) + '" src="" alt="" /></span></article>';
                    }
                    //document.getElementById('day2tn').appendChild(albumday2tn);
                    //document.getElementById('main').appendChild(albumday2fs);
                    $('#day2tn').append(albumday2tn);
                    $('#main').append(albumday2fs);
                    //document.getElementById("day2tn").innerHTML = albumday2tn;
                    //document.getElementById("main").innerHTML = originalarticle + albumday2fs;
                    }
                )
                
                $('#day3tab').one('click', function loadDay3tn(){
                  
                    var l, albumday3tn, albumday3fs;
                    for (l = 1; l <= 720/4; l++){
                        albumday3tn +=  '<br />' + 
                                        '<a href="#day3_' + (l * 4 - 3) + '" onclick="loadPhoto(' + "'day3_" + (l * 4 - 3) + "'" + ')"><img src="assets/photo/thumbnails/day3_' + (l * 4 - 3) + '_tn.jpg" style="width:150px;padding: 5px;"></a>' + 
                                        '<a href="#day3_' + (l * 4 - 2) + '" onclick="loadPhoto(' + "'day3_" + (l * 4 - 2) + "'" + ')"><img src="assets/photo/thumbnails/day3_' + (l * 4 - 2) + '_tn.jpg" style="width:150px;padding: 5px;"></a>' + 
                                        '<a href="#day3_' + (l * 4 - 1) + '" onclick="loadPhoto(' + "'day3_" + (l * 4 - 1) + "'" + ')"><img src="assets/photo/thumbnails/day3_' + (l * 4 - 1) + '_tn.jpg" style="width:150px;padding: 5px;"></a>' + 
                                        '<a href="#day3_' + (l * 4 - 0) + '" onclick="loadPhoto(' + "'day3_" + (l * 4 - 0) + "'" + ')"><img src="assets/photo/thumbnails/day3_' + (l * 4 - 0) + '_tn.jpg" style="width:150px;padding: 5px;"></a><br />';
                        albumday3fs +=  '<article id="day3_' + (l * 4 - 3) + '" style="display: none"><span class="image main"><img id="img_day3_' + (l * 4 - 3) + '" src="" alt="" /></span></article>' + 
                                        '<article id="day3_' + (l * 4 - 2) + '" style="display: none"><span class="image main"><img id="img_day3_' + (l * 4 - 2) + '" src="" alt="" /></span></article>' +
                                        '<article id="day3_' + (l * 4 - 1) + '" style="display: none"><span class="image main"><img id="img_day3_' + (l * 4 - 1) + '" src="" alt="" /></span></article>' +
                                        '<article id="day3_' + (l * 4 - 0) + '" style="display: none"><span class="image main"><img id="img_day3_' + (l * 4 - 0) + '" src="" alt="" /></span></article>';
                    }
                    //document.getElementById('day3tn').appendChild(albumday3tn);
                    //document.getElementById('main').appendChild(albumday3fs);
                        $('#day3tn').append(albumday3tn);
                        $('#main').append(albumday3fs);
                       //document.getElementById("day3tn").innerHTML = albumday3tn;
                        //document.getElementById("main").innerHTML = originalarticle + albumday3fs;
                    }
                )
            </script-->
	</body>
</html>
