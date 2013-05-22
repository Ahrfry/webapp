<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h3>Groups</h3> 

<table id="groups" class="table table-hover">
  <tr>
  </tr>
</table>





<a href="#myModal" role="button" class="text-info btn btn-large" data-toggle="modal" style="position: absolute; left: 500px; top: 100px; ">Click here to create group</a>
 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Please fill out the blanks</h3>
  </div>
  <div class="modal-body">
  <form id="form1" class="form-inline">
  <input type="text" class="input-small" placeholder="Group name">
  <input type="text" class="input-small" placeholder="...">
  <input type="text" class="input-small" placeholder="...">
  <input type="text" class="input-small" placeholder="...">

  <label class="checkbox">
  </label>
  <p class="text-info"> Click Submit Group to submit information</p>
  </div>
  <div class="modal-footer">
    <button class="btn disabled" data-dismiss="modal" aria-hidden="true" onClick="alert('Group information will not be submitted')" >Cancel</button>
    <button id="submitbutton" class="btn btn-primary">Submit Group</button>
  </div>
</div>



</form>



<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/groups.js"></script>
