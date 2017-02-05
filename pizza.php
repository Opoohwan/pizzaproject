<?php require('partials/header.php'); ?>
    <div class="container-fluid">
      <div class="row">
        <div class="main">
          <h1 class="page-header">Pizzas</h1>
          <div class="panel panel-default">
            <div class="panel-heading">Add Pizza</div>
            <div class="panel-body">
                <form class="form-inline">
                  <div class="form-group">
                    <label for="exampleInputName2">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail2">Description</label>
                    <input type="text" class="form-control" id="description" placeholder="Description">
                  </div>
                  <button type="submit" class="btn btn-default">Create Pizza</button>
                </form>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">Manage Pizzas</div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th width="10%"></th>
                      <th width="10%">ID</th>
                      <th width="40%">Name</th>
                      <th width="40%">Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th><button>Edit</button></th>
                      <td>1</td>
                      <td>Lorem</td>
                      <td>ipsum</td>
                    </tr>
                    <tr>
                      <th><button>Edit</button></th>
                      <td>2</td>
                      <td>amet</td>
                      <td>consectetur</td>
                    </tr>
                    <tr>
                      <th><button>Edit</button></th>
                      <td>3</td>
                      <td>Integer</td>
                      <td>nec</td>
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