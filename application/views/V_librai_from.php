<div class="row">
     <div class="col-xs-12" style="margin-top: 10px">

      <a href="<?php echo site_url("C_librai") ?>" class="btn btn-default"><i class="fa fa-reply"> </i> Retour a la liste</a>
      </div>
                <div class="col-lg-6" style="margin-top: 10px;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h1><?php echo $titre; ?></h1>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   <form role="form" action="<?php echo site_url('C_librai/ajouter');?>" method="POST">
                                    <input type="hidden" name="idl" value="<?=empty($row)?'':$row->idl ?>">
                                      <div class="box-body">
                                        <div class="form-group">
                                          <label for="">Nom libraire</label>
                                          <input type="text" class="form-control" id="" name="nom" placeholder="Entrer le nom" value="<?=empty($row)==true?'':$row->nom ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="">Adresse libraire</label>
                                          <input type="text" class="form-control" id="" name="adress" placeholder="Entrer le adresse" value="<?=empty($row)==true?'':$row->adress?>"></input>    
                                        </div>
                                      </div>
                                      <!-- /.box-body -->

                                      <div class="box-footer">
                                        <button type="submit" class="btn btn-primary" >Enregistrer</button>
                                      </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>