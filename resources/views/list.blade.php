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
  <div class="card-body" id="items">
    <h5 class="card-title">ajax to do list<a href="#" id="addnovo" class="pull-right"  data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus"></i></a></h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <ul class="list-group">
    @foreach ($items as $item)
    <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">
    {{$item->item}}
    <input type="hidden" id="itemId" value="{{$item->id}}">
    </li>
    @endforeach
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
      <input type="hidden" id="id">
      <div class="modal-body">
        <p><input type="text" placeholder="escreva a tarefa" id="additem" class="form-control"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id = "delete" data-dismiss="modal" style="display: none">delete</button>
        <button type="button" class="btn btn-primary" id="salvar" data-dismiss="modal" style="display: none">Save changes</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="adicionar">Adicionar</button>
      </div>
    </div>
  </div>
</div>

        </div>
    </div>

    
    {{csrf_field()}}
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>


    $(document).ready(function() {
      $(document).on('click', ' .ourItem', function(event){
       event.preventDefault();
           
                var text = $(this).text();
                var id = $(this).find('#itemId').val();
                $('#title').text('Editar Item');
                $("#additem").val(text);
                $("#delete").show('400');
                $("#salvar").show('400');
                $("#adicionar").hide('400');
                $("#id").val(id);
                
                console.log(text);
            
        });

        
          

        $(document).on('click', '#addnovo', function(event){
          $('#title').text('Adicionar Item');
          $('#additem').val('');
          $('#delete').hide('400');
          $('#salvar').hide('400');
          $('#adicionar').show('400');
        });
        
        $('#adicionar').click(function(event)
        {
          var text = $('#additem').val();
          $.post('list', {'text': text,'_token':$('input[name=_token]').val()}, function(data){
            console.log(data);
            $("#items").load(location.href + ' #items');
            
          });
          
        });

        $('#delete').click(function(){
          var id = $("#id").val();
          $.post('delete',{'id': id , '_token':$('input[name=_token').val()}, function(data){
            $("#items").load(location.href + ' #items');
            console.log(data)
          });
          
        });

        $('#salvar').click(function(){
          var id = $("#id").val();
          var value = $('#additem').val();
          $.post('update',{'id': id , 'value': value ,'_token':$('input[name=_token').val()}, function(data){
            $("#items").load(location.href + ' #items');
            console.log(data)
          });
          
        });
    });
    </script>
</body>
</html>