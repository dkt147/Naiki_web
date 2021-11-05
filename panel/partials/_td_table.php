 <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">Today's Donation</h6>
                 
                </div>
                <div class="table-responsive">
                  <table class="table table-hover mb-0">
                    <thead>
                      <tr>
                        <th class="pt-0">Id</th>
                        <th class="pt-0">Item</th>
                        <th class="pt-0">Quantity</th>
                        <th class="pt-0">Note</th>
                        <th class="pt-0">Image</th>
                        <th class="pt-0">Status</th>
                        <th class="pt-0">User</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
//Connection Stablishing...
                      include 'dbconnection.php';
                      $date = date('d-m-Y');
                      $query = "SELECT * FROM `donate` WHERE date='$date'";
                      $res = mysqli_query($conn, $query);

                                            if (mysqli_num_rows($res) > 0) {
                                              $count = mysqli_num_rows($res);
                                                while ($row = mysqli_fetch_assoc($res)) {
                                                  ?>

                      <tr>
                        <td><?php echo $row['d_id'];?></td>
                        <td><?php echo $row['item_name'];?></td>
                        <td><?php echo $row['quantity'];?></td>
                        <td><?php echo $row['note'];?></td>
                        <td><img src="<?php echo "../../../naiki/images/".$row['item_image'];?>"></td>
                        <td><span class="badge badge-danger"><?php echo $row['status'];?></span></td>
                        <td><?php echo $row['r_id'];?></td>
                      </tr>
                      <?php
                                                    
                                                }
                                              }
                                              
                                            ?>
                    </tbody>
                  </table>
                </div>
              </div> 
            </div>