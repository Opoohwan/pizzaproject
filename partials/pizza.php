<?php require('partials/header.php'); ?>
    <div class="container-fluid">
      <div class="row">
        <div class="main">
          <h1 class="page-header">Pizza <small>ID: <?php echo $pizza; ?></small></h1>
          <div class="panel panel-default">
            <div class="panel-heading">Add Topping</div>
            <div class="panel-body">
                <form class="form-inline" id="ToppingForm">
                  <div class="form-group">
                    <label for="exampleInputName2">Topping</label>
                    <select class="form-control" id="Topping">
                    </select>
                  </div>
                  <button type="submit" class="btn btn-default" id="addtoppings">Add Topping</button>
                </form>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">Topping(s)</div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th width="10%">ID</th>
                      <th width="40%">Name</th>
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
    getAddedToppings();
    getAvailableToppings()
  });

  function getAddedToppings() {
    $('tbody').html('');
    $.ajax({
      url: "https://pizzaserver.herokuapp.com/pizzas/<?php echo $pizza; ?>/toppings/",
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

  function getAvailableToppings() {
    $.ajax({
      url: "https://pizzaserver.herokuapp.com/toppings/",
      context: document.body
    }).done(function(data) {
      $.each(data, function( index, topping ) {
        var row = $('<option value="'+topping.id+'" selected>'+topping.name+'</option>');
        $('#Topping').append(row);
      });
    });
  }

  $('#ToppingForm').submit(function(e) {
    var topping = $('#Topping').val();
    $.ajax({
      method: "POST",
      url: "https://pizzaserver.herokuapp.com/pizzas/<?php echo $pizza; ?>/toppings/",
      data: { topping_id: topping}
    }).done(function( ) {
      getAddedToppings();
    });
    e.preventDefault();
  });

  alert = function() {};
</script>