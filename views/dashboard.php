<?php include_once 'header.php'; ?>
<div id="content" class="container-fluid background">
<div class="container description">
<div class="card mb-3">
<div class="card-header">
   <i class="fa fa-bell-o"></i> 
   <div class="text-muted smaller display-3">Bienvenu <?php  echo $_SESSION['user_id'] ?> </div>
   Votre offre :
</div>
<div class="list-group list-group-flush small">
   <a class="list-group-item list-group-item-action" href="#">
   <div class="media">
      <div class="media-body">
         <dl class="row">
            <dt class="col-sm-3">Économie</dt>
            <dd class="col-sm-9">Combinez assurance auto et habitation</dd>
            <dt class="col-sm-3">Écologie</dt>
            <dd class="col-sm-9">Conduisez un véhicule hybride ou électrique</dd>
            <dt class="col-sm-3">Prévention</dt>
            <dd class="col-sm-9">Assurez deux véhicules ou plus.</dd>
            <dt class="col-sm-3 text-truncate">Sécurité </dt>
            <dd class="col-sm-9">Faites installer un système antivol approuvé.</dd>
         </dl>
         <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
      </div>
   </div>
</div>