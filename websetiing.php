<?php include 'header.php';?>

<?php include 'navbar.php';?>

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
  		<div class="row justify-content-md-center">
            <div class="col-md-6">
              <div class="card">
                <div class="card-content collpase show">
                  <div class="card-body">
                    <form class="form form-horizontal">
                      <div class="form-body">
                      	<h4 class="form-section"></i>ตั้งค่าเว็บไซต์</h4>
                        <div class="form-group row">
                          <label class="col-md-3 label-control">โลโก้เว็บ</label>
                          <div class="col-md-9">
                            <label id="projectinput8" class="file center-block">
                              <input type="file" id="filelogo">
                              <span class="file-custom"></span>
                            </label>
                          </div>
                        </div>

                          <div class="form-group row">
                          <label class="col-md-3 label-control">Meta Image 1200*900 </label>
                          <div class="col-md-9">
                            <label id="projectinput8" class="file center-block">
                              <input type="file" id="fileimage">
                              <span class="file-custom"></span>
                            </label>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="eventRegInput1">Meta Title</label>
                          <div class="col-md-9">
                            <input type="text" id="eventRegInput1" class="form-control" placeholder="Meta Title" name="metatitle">
                          </div>
                        </div>

                          <div class="form-group row">
                          <label class="col-md-3 label-control" for="eventRegInput1">Meta Keyword</label>
                          <div class="col-md-9">
                            <textarea id="eventRegInput2" rows="5" class="form-control" name="metakeyword" placeholder="Meta Keyword"></textarea>
                          </div>
                        </div>

                         <div class="form-group row">
                          <label class="col-md-3 label-control" for="eventRegInput1">Meta Description</label>
                          <div class="col-md-9">
                            <textarea id="eventRegInput3" rows="5" class="form-control" name="metadescription" placeholder="Meta Description"></textarea>
                          </div>
                        </div>
                      </div>
                       
                      <h4 class="form-section"></i>ข้อมูลติดต่อ</h4>
                  
                      <div class="form-actions right">
                        <button type="submit" class="btn btn-primary">
                          <i class="la la-check-square-o"></i> บันทึก
                        </button>
                      </div>


                    
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
			</section>
	  </div>
	  </div>
	  </div>

<?php include 'footer.php';?>