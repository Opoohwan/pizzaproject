<div class="container-fluid">
  <div class="row">
    <div class="main">
      <div class="placeholder clearfix">
        <img src="images/pizza.jpg" width="40" height="40" class="img-responsive" alt="Generic placeholder thumbnail" style="float:left; margin-right: 10px;">
        <h1 class="page-header">Pizzas</h1>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">Add Pizza</div>
        <div class="panel-body">
            <form class="form-inline" id="PizzaForm">
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
        <div class="panel-heading clearfix">
          Manage Pizzas
          <form id="exportpizza" action="download.php" method="post" style="float:right;">
            <input type="hidden" name="name" id="exportname" value="pizza" />
            <input type="hidden" name="data" id="exportdata" value="" />
              <button type="submit" class="btn btn-default">Export</button>
          </form>
        </div>
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
  var pizza;
  $( document ).ready(function() {
    getPizzas();
  });

  function getPizzas() {
    $('#tbody').html('');
    $('#exportdata').val('');
    $.ajax({
      url: "https://pizzaserver.herokuapp.com/pizzas/",
      context: document.body
    }).done(function(data) {
      pizza = data;
      $('#exportdata').val(JSON.stringify(pizza));
      $.each(data, function( index, pizza ) {
        var row = $('<tr>');
        row.append('<td><a class="btn btn-default" href="pizza.php?pizza='+pizza.id+'" role="button">Edit</a></td>');
        row.append("<td>"+$('<span>').text(pizza.id).html()+'</td>');
        row.append("<td>"+$('<span>').text(pizza.name).html()+'</td>');
        row.append("<td>"+$('<span>').text(pizza.description).html()+'</td>');
        $('tbody').append(row);
      });
    });
  }

  $('#PizzaForm').submit(function(e) {
    var pizzaname = $('#name').val();
    var pizzadescription = $('#description').val();
    $.ajax({
      method: "POST",
      url: "https://pizzaserver.herokuapp.com/pizzas/",
      data: {pizza: {name: pizzaname, description: pizzadescription}}
    }).done(function( ) {
      getPizzas();
    });
    e.preventDefault();
  });
</script>