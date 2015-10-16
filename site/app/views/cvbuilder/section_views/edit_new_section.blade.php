  <div class="modal-body">
	<form id="editsection_form" action="" method="POST">		          
      <div class="form-group">
        <label for="message-text" class="control-label">Section Name</label>
        <input type="text" class="form-control" name="section_name" id="recipient-name" placeholder="New Section" value="{{$section->section_name}}">
      </div>
    </form>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   <button type="button" onclick="editsection_submit({{$section->id}})" class="btn btn-primary">Update</button>
  </div>