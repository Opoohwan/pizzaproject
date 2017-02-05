<?php require('partials/header.php'); ?>
    <div class="container-fluid">
      <div class="row">
        <div class="main">
          <h1 class="page-header">Toppings</h1>
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
  $( document ).ready(function() {
    getToppings();
  });

  function getToppings() {
    $('tbody').html('');
    $.ajax({
      url: "https://pizzaserver.herokuapp.com/toppings/",
      context: document.body
    }).done(function(data) {
      $.each(data, function( index, topping ) {
        var row = $('<tr>');
        row.append('<td>'+topping.id+'</td>');
        row.append('<td>'+topping.name+'</td>');
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