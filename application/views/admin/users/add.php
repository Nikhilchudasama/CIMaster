<div class="app-content content">
    <div class="content-wrapper">
    
        <div class="content-header row">
        
        </div>
        <div class="content-body">
            <section id="horizontal-form-layouts">
            
            <div class="row">
            <div class="col-md-12">
              <div class="card">
              
                <div class="card-header">
                  <h4 id="horz-layout-colored-controls" class="card-title">Add User</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collpase show">
                  <div class="card-body">
                  <?php $this->load->view($this->folder . "/response_message.php"); ?>
                    <form class="form form-horizontal" method="post" action="<?= $this->adminURL ?>Users/add">
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label for="userinput1" class="col-md-3 label-control">Groom Name</label>
                              <div class="col-md-9">
                                <input type="text" name="groom_name" placeholder="Groom Name" value="<?= set_value('groom_name') ?>" class="form-control border-primary round" id="groom_name">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label for="userinput2" class="col-md-3 label-control">Bride Name</label>
                              <div class="col-md-9">
                                <input type="text" name="bride_name" placeholder="Bride Name" value="<?= set_value('bride_name') ?>" class="form-control border-primary round" id="bride_name">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label for="userinput3" class="col-md-3 label-control">Marriage Date</label>
                              <div class="col-md-9">
                                <input type="text" name="marrige_date" placeholder="Marriage Date" class="form-control border-primary round datepicker-date" id="marrige_date">
                              </div>
                            </div>
                          </div>
                        </div>
                        <h4 class="form-section"><i class="ft-mail"></i> User Email & Password</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label for="userinput5" class="col-md-3 label-control">Email</label>
                              <div class="col-md-9">
                                <input type="email" id="email" placeholder="Email" name="email" class="form-control border-primary round" value="<?= set_value('email') ?>">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                          <div class="form-group row">
                              <label for="userinput6" class="col-md-3 label-control">Password</label>
                              <div class="col-md-9">
                                <input type="password" id="password" name="password" placeholder="Password" class="form-control border-primary round">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions right">
                        <button class="btn btn-warning mr-1" type="button">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button class="btn btn-primary" type="submit">
                          <i class="fa fa-check-square-o"></i> Save
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