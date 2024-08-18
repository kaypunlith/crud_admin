<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="max-width:40%">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
          <form action="controller/create.php" method="post" enctype="multipart/form-data">
                <div class="modal-body p-3">
                <div class="row">
                    <div class="col-xl">
                        <div class="form-group">
                            <label for="" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control">
                            
                        </div>
                        <div class="form-group">
                        <label for="" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="" class="form-label">Status</label>
                        <input type="text" name="status" class="form-control">
                        </div>
                    </div>
                    <div class="col-xl-6">
                    <div class="form-group">
                            <label for="" class="form-label">Qty</label>
                            <input type="text" name="qty" class="form-control">
                            
                        </div>
                        <div class="form-group">
                        <label for="" class="form-label">Choose iamge</label>
                        <input type="file" name="img" class="form-control">
                        </div>
                    </div>
                    </div>
                    <div class="form-footer mt-3 float-end">
                            <button type="submit" class="btn btn-primary">Create</button>
                            <button class="btn btn-danger">Close </button>
                    </div>

          </form>
         </div>
      </div>
     
    </div>
  </div>
</div>

<!-- Modal for delete -->
 <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="model_del" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="controller/distroy.php" method="post">
        <div class="modal-body">
           <h3>Are you want to delete?</h3>
           <input type="text" name="id_del" id="id_del">
         </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
        <button type="submit" class="btn btn-success">Yes</button>
      </div>
        </form>
    </div>
  </div>
</div>