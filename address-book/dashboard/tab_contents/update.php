<div class="container">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-6">
			<form class="form-vertical" role="form" id="updatePersonForm">
				<p class="text-center" id="updateRes"></p>
				<?php
					$fetch = mysql_query("SELECT * FROM persons", $con);
					if(mysql_num_rows($fetch)<=0){
						echo '<h3 class="text-center font">No Records Found.</h3>';
					}
					else{
				?>
				<div class="row">
					<div class="col-sm-4">
						<label>Select Person</label>
					</div>
					<div class="form-group col-sm-6">							        		
						<select class="form-control" id="pemail" name="email">
							<option value=0>Choose...</option>
				    		<?php 	    				    		
				    			while($row = mysql_fetch_array($fetch)){
				    				echo '<option value="'.$row['Email'].'">'.$row['Email'].'</option>';
				    			}
				    		?>
			    		</select>
			    	</div>
			    	<div class="col-sm-3"></div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>First Name</label>
					</div>
					<div class="form-group col-sm-6">							        		
			    		<input type="text" class="form-control" name="updatefn" id="updatefn" autocomplete="off" />
			    	</div>
			    	<div class="col-sm-3"></div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>Last Name</label>
					</div>
					<div class="form-group col-sm-6">							        		
			    		<input type="text" class="form-control" name="updateln" id="updateln" autocomplete="off" />
			    	</div>
			    	<div class="col-sm-3"></div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>Mobile</label>
					</div>
					<div class="form-group col-sm-6">							        		
			    		<input type="text" class="form-control" name="updatemobile" id="updatemobile" autocomplete="off" />
			    	</div>
			    	<div class="col-sm-3"></div>
				</div>	
				<div class="row">
					<div class="col-sm-4">
						<label>Permanant Address</label>
					</div>
					<div class="form-group col-sm-6">							        		
			    		<textarea maxlength="250" class="form-control" name="updatepermanant" id="updatepermanant" autocomplete="off"></textarea>
			    	</div>
			    	<div class="col-sm-3"></div>
				</div>	
				<div class="row">
					<div class="col-sm-4">
						<label>Temporary Address</label>
					</div>
					<div class="form-group col-sm-6">							        		
			    		<textarea maxlength="250" class="form-control" name="updatetemporary" id="updatetemporary" autocomplete="off"></textarea>
			    	</div>
			    	<div class="col-sm-3"></div>
				</div>
				<div class="row">
					<div class="col-sm-4">
					</div>
					<div class="col-sm-3">
						<input type="submit" class="btn btn-success" value="Update" id="updateBtn" />						        			
					</div>
					<div class="col-sm-3">
						<input type="reset" class="btn btn-danger" value="Reset" id="resetBtn" />
					</div>						        		
				</div>
				<?php } ?>
			</form>	 
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>