 
  <div class="row"><br>
                <div class="col-lg-6">
                     <a href="<?php echo site_url("C_Maison/ajout") ?>" class="btn btn-primary"><i class="fa fa-plus"></i>Ajouter</a>
                </div>

                <!-- /.col-lg-12 -->
            </div><br>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <center><h5><?php echo $titre;?></h5></center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                       <tr>
                                          <th>ID</th>
                                          <th>Nom Maison</th>
                                          <th>Adresse Maison</th>
                                           <th>Action</th>
                                      </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($donne as $row){?>
                                        <tr class="odd gradeX">
                                            <td><?=$row->idm; ?></td>
                                              <td><?=$row->nomM;?></td>
                                              <td><?=$row->adresse ?></td>
                                              <td style="width: 1%; white-space: nowrap;">
                                                <a href="<?php echo site_url("C_Maison/modif?id=$row->idm") ?>" class="btn btn-success"><i class="fa fa-edit"> </i>  </a>
                                                &nbsp;
                                                <a onclick="return confirm('Voulez-vous Confirmer la Suppression ?')" href="<?php echo site_url("C_Maison/delete?id=$row->idm") ?>" class="btn btn-danger"><i class="fa fa-trash"> </i>  </a>
                                              </td>
                                        </tr> 
                                      <?php } ?>  
                             <tfoot>
                               <tr>
                                  <th>ID</th>
                                  <th>Nom Maison</th>
                                  <th>Adresse Maison</th>
                                  <th>Action</th>
                                </tr>
                                </tfoot>
                              </table> 
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
