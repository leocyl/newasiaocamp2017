<div class="content-wrapper">    
    <section class="content-header">
      <h1>
        <i class="fa fa-files-o"></i> 提供Blokus拼圖
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 text-center">
                <form method="post" action="<?php echo base_url(); ?>provide">
					<div class="form-group has-feedback">
					    <br />
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
                        <select class="form-control required" id="groupname" name="groupname">
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
                    <div class="form-group has-feedback">
                        <select class="form-control required" name="ec" style="display: none">
                            <option value="<?php echo $userId ?>"></option>
                        </select>
                    </div>
                    <br />
					<input type="submit" value="提交" class="btn btn-primary btn-block btn-flat" />
				</form>
				<br />
				<h1>
				    <?php echo $groupname ?>
				</h1>
				<h1>
				    <?php
                    if($code != "a:0:{}")
                    {
                        ?>
                        <?php echo $code ?>
                        <?php
                    }
                    ?>
				</h1>
            </div>
        </div>
    </section>
</div>

<script>
        $(function() {
          var conditionalSelect = $("#groupname"),
            // Save possible options
            options = conditionalSelect.children(".conditional").clone();
        
          $("#role").change(function() {
            var value = $(this).val();
            conditionalSelect.children(".conditional").remove();
            options.clone().filter("." + value).appendTo(conditionalSelect);
          }).trigger("change");
        });
    </script>