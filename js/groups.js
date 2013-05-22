$(function(){
  getGroups();
  setupClicks();
});

function setupClicks() {
  $('#create-group').on('click', function() {
    createGroup();
  });
};
function getGroups(){

  $.ajax({
    url: 'getAllUsersGroups',
    //data: JSON.stringify(payload),
    //dataType: 'json',
    type: 'GET',
    success: function(response){
      var groups = $.parseJSON(response).data.groups;
      for(var i = 0; i < groups.length; ++i){

        var name = groups[i].name;

        var row = "";
        var nameTd = '<td>'+name+'</td>';
        
        row += '<tr>';
        row += nameTd;
        row += '</tr>';
        $('#groups').append(row);


      }
    },
    error: function(response){
      $.sticky("Error while fetching groups.", {'position': 'top-center', 'type': 'st-error'});
    }

  });
}
function createWebApp(){
console.log($('hit me'));
}

function createGroup(){

  $.ajax({
    url: 'create',
// TODO raf
//  data: <-- this should be gotten from the modal's form
  <div class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn">Close</a>
    <a href="#" class="btn btn-primary">Save changes</a>
  </div>
</div> 

    dataType: 'json',
    type: 'POST',
    success: function(data, textStatus, jqXHR){
      $.sticky("Successfully created new group.", {'position': 'top-center', 'type': 'st-success'});
    },
    error: function(jqXHR, textStatus, errorThrown){
      $.sticky("Error creating group.", {'position': 'top-center', 'type': 'st-error'});
    }

  });
}
