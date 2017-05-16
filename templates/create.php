<?php include "templates/include/header.php" ?>
<?php include "config.php" ?>

<form method="post" action="action/createTable.php" class="form-horizontal">

    <div class = "form-group">
      <label class="col-sm-2 control-label">Название анкеты</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="tableName">
      </div>
    </div>

    <div class = "form-group">
      <label class="col-sm-2 control-label"> Описание к анкете</label>
      <div class="col-sm-10">
        <textarea class=form-control name="tableDescription" row = "3"> </textarea>
      </div>
    </div>


    <div class ="jumbotron">
      <h3>Вопрос</h3>

      <div class = "form-group">
        <label class="col-sm-3 control-label"> Название вопроса</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="tableName">
        </div>
      </div>


    </div>








    <div class = "form-group addQuestBut">
      <br><br>
      <button type="button" class="btn btn-primary  pull-right" onclick="addQuest()"> Добавить вопрос</button>
    </div>


    <div class = "form-group">
      <br><br>
      <button type="submit" class="btn btn-success pull-right">
        Создать анкету
      </button>
    </div>

</form>

<script>
  $num = 1;
  function addQuest(){
    $('<div class = "form-group"><label class="col-sm-2 control-label">Название анкеты</label><div class="col-sm-10"><input type="text" class="form-control" name="question'+$num+'"></div></div>').insertBefore(".addQuestBut");
  }

</script>

<?php include "templates/include/footer.php" ?>
