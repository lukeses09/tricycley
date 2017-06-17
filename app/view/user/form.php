<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form id="f_user" action="" method="" novalidate="" onsubmit="return save_f_user()">
                <div class="header">
					<h4 class="title">
						User Account Form
					</h4>
				</div>
                <div class="content">
	                    <div class="form-group  column-sizing">	                    	
			                <div class="row">


			                	<div class="col-md-3 col-xs-12">
			                        <label class="control-label">
			                        	User Type <star>*</star>
			                        </label>
			                        <select id="f_usertype" class="form-control">
			                        	<option value="user">USER</option>
			                        	<option value="admin">ADMIN</option>
			                        </select>

			                	</div><!--endcol--> 

			                	<div class="col-md-3 col-xs-12">
			                        <label class="control-label">
										Username <star>*</star>
									</label>			                		 
			                        <input class="form-control"
			                               name="username"
			                               id="f_username"
			                               type="text"
			                               required="true"
			                               autocomplete="off"
									/>			                		
			                	</div><!-- end col --> 	
			                			                	
			                	<div class="col-md-3 col-xs-12">
			                        <label class="control-label">
										Name <star>*</star>
									</label>			                		 
			                        <input class="form-control"
			                               name="name"
			                               id="f_name"
			                               type="text"
			                               required="true"
			                               autocomplete="off"
									/>			                		
			                	</div><!-- end col -->

			                	<div class="col-md-3 col-xs-12">
			                        <label class="control-label">Password <star>*</star></label>
			                        <input class="form-control"
		                                name="password"
		                                id="f_password"
		                                type="password"
		                                required="true"
										minLength="6"			                               
									/>
			                	</div><!--endcol--> 



			                </div><!--end row-->
			            </div><!--end form-group-->
                </div><!--end content-->
				<div class="card-footer">
					<input id="btn_save" value="CREATE" type="submit" class="btn btn-info btn btn-fill pull-right"/>
                    <div class="category"><star>*</star> Required fields</div>
                    <div class="clearfix"></div>
				</div>
            </form>

        </div>
    </div>
</div>