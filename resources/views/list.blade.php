<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax ToDo list project</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">


</head>
<br>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
            <div class="card-header border='1'" >
  <div class="card-body">
    <h5 class="card-title">ajax to do list<a href="#" class="pull-right" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus"></i></a></h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <ul class="list-group">
  <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Cras justo odio</li>
  <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Dapibus ac facilisis in</li>
  <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Morbi leo risus</li>
  <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Porta ac consectetur ac</li>
  <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Vestibulum at eros</li>
</ul>
    <p class="card-text"></p>

  </div>
</div>
            </div>
            
            <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title">Adicionar novo item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><input type="text" placeholder="escreva a tarefa" id="additem" class="form-control"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id = "delete" data-dismiss="modal" style="display: none">delete</button>
        <button type="button" class="btn btn-primary" id="salvar" style="display: none">Save changes</button>
        <button type="button" class="btn btn-primary" id="adicionar">Adicionar</button>
      </div>
    </div>
  </div>
</div>

        </div>
    </div>

    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('.ourItem').each(function(){
            $(this).click(function(event){
                var text = $(this).text();
                $('#title').text('Editar Item');
                $("#additem").val(text);
                $("#delete").show('400');
                $("#salvar").show('400');
                $("#adicionar").hide('400');
                
                console.log(text);
            });
        });
    });
    </script>
</body>
</html>