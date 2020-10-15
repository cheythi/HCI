<?php include 'headerLogged.php'; ?>
<style>
span{
    font-size:15px;
}

.box{
    padding:60px 0px;
}

.box-part{
    background:#FFF;
    border-radius:0;
    padding:60px 10px;
    margin:30px 0px;
}
.text{
    margin:20px 0px;
}

.clr{
     color:#4183D7;
}
/* progress bar */
.progress {
    position: relative;
	height: 25px;
}
.progress > .progress-type {
	position: absolute;
	left: 0px;
	font-weight: 800;
	padding: 3px 30px 2px 10px;
	color: rgb(255, 255, 255);
	background-color: rgba(25, 25, 25, 0.2);
}
.progress > .progress-completed {
	position: absolute;
	right: 0px;
	font-weight: 800;
    padding: 3px 10px 2px;
    color:black;
}
</style>
<section id="user" class="container-fluid">
    <div class="container">
        <div class="box">
        <div class="container">
        	<div class="alert alert-info alert-dismissible text-center">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
                Welcome back to E-Learning portal
            </div>
            <div class="row">
                
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                        <div class="box-part text-center">
                            
                            <i class="fa fa-language fa-3x clr" aria-hidden="true"></i>
                            
                            <div class="title" style="margin-top:2rem;">
                                <h4>Sinhala</h4>
                            </div>

                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                    <span class="sr-only">95% Complete (warning)</span>
                                </div>
                                <span class="progress-completed">95%</span>
                            </div>
                            
                            <div class="btn btn-primary">Enter Course</div>
                            
                        </div>
                    </div>	 
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                        <div class="box-part text-center">
                            
                            <i class="fa fa-language fa-3x clr" aria-hidden="true"></i>
                            
                            <div class="title" style="margin-top:2rem;">
                                <h4>English</h4>
                            </div>

                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>
                                <span class="progress-completed">60%</span>
                            </div>
                            
                            <div class="btn btn-primary">Enter Course</div>
                            
                        </div>
                    </div>	 
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                        <div class="box-part text-center">
                            
                            <i class="fa fa-sort-numeric-desc fa-3x clr" aria-hidden="true"></i>
                            
                            <div class="title" style="margin-top:2rem;">
                                <h4>Mathematics</h4>
                            </div>

                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>
                                <span class="progress-completed">60%</span>
                            </div>
                            
                            <div class="btn btn-primary">Enter Course</div>
                            
                        </div>
                    </div>	 
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                        <div class="box-part text-center">
                            
                            <i class="fa fa-flask fa-3x clr" aria-hidden="true"></i>
                            
                            <div class="title" style="margin-top:2rem;">
                                <h4>Science</h4>
                            </div>

                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>
                                <span class="progress-completed">60%</span>
                            </div>
                            
                            <div class="btn btn-primary">Enter Course</div>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                        <div class="box-part text-center">
                            
                            <i class="fa fa-history fa-3x clr" aria-hidden="true"></i>
                            
                            <div class="title" style="margin-top:2rem;">
                                <h4>History</h4>
                            </div>

                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>
                                <span class="progress-completed">60%</span>
                            </div>
                            
                            <div class="btn btn-primary">Enter Course</div>
                            
                        </div>
                    </div>	 
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                
                        <div class="box-part text-center">
                            
                            <i class="fa fa-globe fa-3x clr" aria-hidden="true"></i>
                            
                            <div class="title" style="margin-top:2rem;">
                                <h4>Geography</h4>
                            </div>

                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                    <span class="sr-only">10% Complete (warning)</span>
                                </div>
                                <span class="progress-completed">10%</span>
                            </div>
                            
                            <div class="btn btn-primary">Enter Course</div>
                            
                        </div>
                    </div>
            
            </div>		
    </div>
</div>
    </div>
</section style="margin-bottom: 3rem;">
<?php include 'footer.php'; ?>