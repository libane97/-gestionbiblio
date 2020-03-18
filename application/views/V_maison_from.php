<div class="row">
     <div class="col-xs-12" style="margin-top: 10px">

      <a href="<?php echo site_url("C_Maison") ?>" class="btn btn-default"><i class="fa fa-reply"> </i> Retour a la liste</a>
      </div>
                <div class="col-lg-6" style="margin-top: 10px;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h1><?php echo $titre; ?></h1>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   <form role="form" action="<?php echo site_url('C_Maison/ajouter');?>" method="POST">
                                    <input type="hidden" name="idm" value="<?=empty($row)?'':$row->idm ?>">
                                      <div class="box-body">
                                        <div class="form-group">
                                          <label for="">Nom maison</label>
                                          <input type="text" class="form-control" id="" name="nom" placeholder="Entrer le nom" value="<?=empty($row)==true?'':$row->nom ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="">Adresse</label>
                                          <input type="text" class="form-control" id="" name="adresse" placeholder="Entrer le adresse" value="<?=empty($row)==true?'':$row->adresse?>"></input>    
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