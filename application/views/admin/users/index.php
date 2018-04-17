<div class="app-content content">
    <div class="content-wrapper">
    <?php $this->load->view($this->folder . "/response_message.php"); ?>
        <div class="content-header row">
        
        </div>
        <div class="content-body">
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">User List</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                      <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                      <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                      
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <table class="table table-striped table-bordered zero-configuration">
                      <thead>
                        <tr>
                            <th>Groom Name</th>
                            <th>Bride Name</th>
                            <th>Marriage Date</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($users as $user) { ?>
                            <tr>
                                <td><?= $user['first_name'] ?></td>
                                <td><?= $user['last_name'] ?></td>
                                <td><?= date('d-m-Y', strtotime($user['marrige_date'])) ?></td>
                            </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        </div>
    </div>
</div>