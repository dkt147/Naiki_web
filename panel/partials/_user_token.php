<?php
//Connection Stablishing...
                      include 'dbconnection.php';
                      
                      $query = "SELECT * FROM `register`";
                      $res = mysqli_query($conn, $query);

                                            if (mysqli_num_rows($res) > 0) {
                                              $count = mysqli_num_rows($res);
                                                while ($row = mysqli_fetch_assoc($res)) {
                                                  $count;
                                                    
                                                }
                                              }
                                              
                                            ?>
<div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Registered User</h6>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-12 col-xl-5">
                        <h3 class="mb-2"><?php echo $count;?></h3>
                        <div class="d-flex align-items-baseline">
                          <p class="text-success">
                            <span>+3.3%</span>
                            <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                          </p>
                        </div>
                      </div>
                      <div class="col-6 col-md-12 col-xl-7">
                        <div id="apexChart1" class="mt-md-3 mt-xl-0"></div>
                      </div>
                    </div>
                  </div>
                </div>