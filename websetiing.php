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
                          <label class="col-md-3 label-control">Logo Web</label>
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
                          <label class="col-md-3 label-control">Meta Title</label>
                          <div class="col-md-9">
                            <input type="text" id="metatitle" class="form-control" placeholder="Meta Title" name="metatitle">
                          </div>
                        </div>

                         <div class="form-group row">
                          <label class="col-md-3 label-control">Meta Keyword</label>
                          <div class="col-md-9">
                            <textarea id="metakeyword" rows="5" class="form-control" name="metakeyword" placeholder="Meta Keyword"></textarea>
                          </div>
                        </div>

                         <div class="form-group row">
                          <label class="col-md-3 label-control">Meta Description</label>
                          <div class="col-md-9">
                            <textarea id="metadescription" rows="5" class="form-control" name="metadescription" placeholder="Meta Description"></textarea>
                          </div>
                        </div>
                      </div>
                       
                      <h4 class="form-section"></i>ข้อมูลติดต่อ</h4>

                         <div class="form-group row">
                          <label class="col-md-3 label-control">Address</label>
                          <div class="col-md-9">
                            <textarea id="address" rows="5" class="form-control" name="address" placeholder="address"></textarea>
                          </div>
                        </div>


                        <div class="form-group row">
                          <label class="col-md-3 label-control">Phone</label>
                          <div class="col-md-9">
                            <input type="text" id="phone" class="form-control" placeholder="Phone" name="phone">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-md-3 label-control">Facebook</label>
                          <div class="col-md-9">
                            <input type="text" id="faceboook" class="form-control" placeholder="Faceboook" name="faceboook">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-md-3 label-control">Line</label>
                          <div class="col-md-9">
                            <input type="text" id="line" class="form-control" placeholder="Line" name="line">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-md-3 label-control">Youtube</label>
                          <div class="col-md-9">
                            <input type="text" id="youtube" class="form-control" placeholder="Youtube" name="youtube">
                          </div>
                        </div>
                  
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