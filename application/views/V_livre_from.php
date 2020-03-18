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
                                   <form role="form" action="<?php echo site_url('C_livre/ajouter');?>" method="POST">
                                    <input type="hidden" name="idlv" value="<?=empty($row)?'':$row->idlv ?>">
                                      <div class="box-body">
                                        <div class="form-group">
                                          <label for="">Numero</label>
                                          <input type="text" class="form-control" id="" name="numero" placeholder="Entrer le numero" value="<?=empty($row)==true?'':$row->numero ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="">titre</label>
                                          <input type="text" class="form-control" id="" name="titre" placeholder="Entrer le titre" value="<?=empty($row)==true?'':$row->titre ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="">auteurs</label>
                                          <input type="text" class="form-control" id="" name="auteurs" placeholder="Entrer l' auteurs" value="<?=empty($row)==true?'':$row->auteurs ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="">nbrp</label>
                                          <input type="text" class="form-control" id="" name="nbrp" placeholder="Entrer le nombre de pages" value="<?=empty($row)==true?'':$row->nbrp ?>">
                                        </div>
                                        <div class="form-group">
                                          <label for="">prixe</label>
                                          <input type="text" class="form-control" id="" name="prixe" placeholder="Entrer le prix" value="<?=empty($row)==true?'':$row->prixe ?>">
                                        </div>
                                      <div class="form-group">
                                        <label for="">Librairie</label>  
                                         <select name="idl" class="form-control">
                                                 <option value=""></option>
                                                 <?php  foreach ($donne as $row){ ?> 

                                                   <option value="<?=$row->idl?>">
                                                    <?=$row->nomL?>    
                                                   </option>
                                                 <?php } ?>       
                                          </select>
                                      </div>
                                        <div class="form-group">
                                        <label for="">Maison</label>  
                                         <select name="idm" class="form-control">
                                                 <option value=""></option>
                                                 <?php  foreach ($donne as $row){ ?> 

                                                   <option value="<?=$row->idm?>">
                                                    <?=$row->nomM?>    
                                                   </option>
                                                 <?php } ?>       
                                          </select>
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