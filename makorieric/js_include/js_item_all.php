<?php include JS_THEME."js_header.php"; ?>
	<div id="site_content">	
		
<?php 
	$database = new Js_Dbconn();			
	
		$js_db_query = "SELECT * FROM js_item ORDER BY itemid DESC LIMIT 20";
		$results = $database->get_results( $js_db_query );
	?>
	  <div id="content"> 
        <?php include JS_THEME."js_sidebar.php" ?>
	  
        <div class="content_item">
		<br>
		  <h1><?php echo $database->js_num_rows( $js_db_query ) ?> Items
		  <a style="float:right;width:300px;text-align:center;" href="index.php?action=item_new">New Item</a> </h1> 
          <br><hr><br>
			<div class="main_content" align="center">
			<!--<form method="post" >
			<table style="width:100%;"><tr><td>
			<input type="text" name="js_search" id="js_search" placeholder="Search the warehouse" />
			</td><td>
				<select name="js_catid">
				<option  value=""  > All </option>
			<?php /* $js_class_qry = "SELECT * FROM js_class ORDER BY class_title ASC";
				$class_results = $database->get_results( $js_class_qry );
				
				foreach( $class_results as $js_class ) { ?>
						<option value="<?php echo $js_class['classid'] ?>">  <?php echo $js_class['class_title'] ?></option>
				<?php } */?>
				</select>
			</td>
			<td><input type="submit" style="width:200px" name="SearchThis" value="Search" /></td></tr>
			</table>
			</form> -->
			   <table class="tt_tb">
				<thead><tr class="tt_tr">
				  <th style="width:70px;"></th>
				  <th>Class</th>
				  <th>Qty</th>
				  <th>Unit</th>
				  <th>Price @</th>
				  <th>Topic</th>
				  <th></th>
				</tr></thead>
				<tbody>
                <?php foreach( $results as $row ) { ?>
		        <tr onclick="location='index.php?action=item_view&amp;js_itemid=<?php echo $row['itemid'] ?>'">
				   <td><img class="iconic" src="js_media/<?php echo $row['item_img'] ?>" /></td>
				   <td><?php echo js_class_item($row['item_class']) ?></td>
				   <td><?php echo $row['item_quantity'] ?></td>
				  <td><?php echo $row['item_unit'] ?></td>
				  <td><?php echo $row['item_price'] ?>/=</td>
				  <td><?php echo js_topic_item($row['item_topiclier']) ?></td>
		          <td></td>
		        </tr>
			
			<?php } ?>
			
                      </tbody>
                    </table>
			</div>
		<br>
      <h2><center></center></h2>
		<br>  
		</div><!--close content_item-->
      </div><!--close content-->   
	</div><!--close site_content-->  	
  </div><!--close main-->
<?php include JS_THEME."js_footer.php" ?>
    
