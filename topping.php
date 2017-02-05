<?php require('partials/header.php'); ?>
    <div class="container-fluid">
      <div class="row">
        <div class="main">
          <h1 class="page-header">Toppings</h1>
          <div class="panel panel-default">
            <div class="panel-heading">Add Topping</div>
            <div class="panel-body">
                <form class="form-inline">
                  <div class="form-group">
                    <label for="exampleInputName2">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name">
                  </div>
                  <button type="submit" class="btn btn-default">Create Topping</button>
                </form>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">Manage Toppings</div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped">
              <thead>
                <tr>
                  <th width="10%">ID</th>
                  <th>Name</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Lorem</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>amet</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Integer</td>
                </tr>
              </tbody>
            </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php require('partials/footer.php'); ?>