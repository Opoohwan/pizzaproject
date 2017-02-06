<?php require('partials/header.php'); ?>
    <div class="container-fluid">
      <div class="row">
        <div class="main">
        <div class="placeholder clearfix">
          <img src="images/pepperoni.jpg" width="40" height="40" class="img-responsive" alt="Generic placeholder thumbnail" style="float:left; margin-right: 10px;">
          <h1 class="page-header">Toppings</h1>
        </div>
          <div class="panel panel-default">
            <div class="panel-heading">Add Topping</div>
            <div class="panel-body">
                <form class="form-inline" id="ToppingForm">
                  <div class="form-group">
                    <label for="exampleInputName2">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name">
                  </div>
                  <button type="submit" class="btn btn-default">Create Topping</button>
                </form>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading clearfix">
              Manage Toppings
              <form id="exportpizza" action="download.php" method="post" style="float:right;">
                <input type="hidden" name="name" id="exportname" value="topping" />
                <input type="hidden" name="data" id="exportdata" value="" />
                  <button type="submit" class="btn btn-default">Export</button>
              </form>
            </div>
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
              </tbody>
            </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php require('partials/footer.php'); ?>
<script>
  var topping;
  $( document ).ready(function() {
    getToppings();
  });

  function getToppings() {
    $('tbody').html('');
    $.ajax({
      url: "https://pizzaserver.herokuapp.com/toppings/",
      context: document.body
    }).done(function(data) {
      topping = data;
      $('#exportdata').val(JSON.stringify(topping));
      $.each(data, function( index, topping ) {
        var row = $('<tr>');
        row.append("<td>"+$('<span>').text(topping.id).html()+'</td>');
        row.append("<td>"+$('<span>').text(topping.name).html()+'</td>');
        $('tbody').append(row);
      });
    });
  }

  $('#ToppingForm').submit(function(e) {
    var topping = $('#name').val();
    $.ajax({
      method: "POST",
      url: "https://pizzaserver.herokuapp.com/toppings/",
      data: {topping: {name: topping}}
    }).done(function( ) {
      getToppings();
      $('#name').val('');
    });
    e.preventDefault();
  });
</script>