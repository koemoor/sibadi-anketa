<?php include "templates/include/header.php" ?>
<?php include "config.php" ?>



<?php /*
 <?php foreach($db->query("SELECT * FROM anketi") as $anketa){?>

   <a href="index.php?action=anketa&name=<?= $anketa['name']?>" >
     <button type="button" class="btn btn-default btn-lg">
       <?= $anketa['name'] ?>
     </button>
   </a>

<?php } ?>

*/?>


<form action="actions/addRes.php" method="post" class="form-horizontal">

  <div class="jumbotron">
    <span>Уважаемый студент! Приглашаем ВАС принять участие в социологическом исследовании «Студенты СибАДИ». Ответьте, пожалуйста, на предложенные вопросы, отметив любым значком выбранную позицию, либо напишите свой ответ в отведенном для этого месте. Ваши ответы помогут эффективному выстраиванию диалога между Вами, преподавателями и руководством вуза, помогут разрешить трудные ситуации, с которыми ВЫ столкнулись в студенческой жизни.</span>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Факультет</label>
    <div class="col-sm-10">
      <select class="form-control" name="question1">
        <option>АДМ</option>
        <option>ПГС</option>
        <option>НСТ</option>
        <option>ИСУ</option>
        <option>АТ</option>
        <option>ЭиУ</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Группа</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="question2">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Форма обучения</label>
    <div class="col-sm-10">
      <select class="form-control" name="question3">
        <option>Бюджет</option>
        <option>Внебюджет</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Ваш пол</label>
    <div class="col-sm-10">
      <select class="form-control" name="question4">
        <option>Не выбрано</option>
        <option>Мужчина</option>
        <option>Женщина</option>
      </select>
    </div>
  </div>

  <div class="form-group">
    <h4>1. Соответствует ли структура программы, по которой обучаетесь, Вашим ожиданиям? (в ней представлены все дисциплины, необходимые для Вашей будущей профессиональной деятельности, соблюдена логика преподавания дисциплин, отсутствует дублирование дисциплин и т.д).</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question5" value="Соответсвует, полностью">
          Соответсвует, полностью
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question5" value="соответствует, в основном">
          Cоответствует, в основном
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question5" value="Затрудняюсь ответить">
          Затрудняюсь ответить
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question5" value="Затрудняюсь ответить">
          Не соответсвует, потому что (укажите)
        </label>
      </div>

      <br>
      <input type="text" class="form-control" name="question5d">
    </div>
  </div>


  <div class="form-group">
    <h4>2.Предоставлялась ли Вам возможность выбора дисциплин?</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question6" value="Да">
          Да
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question6" value="Нет">
          Нет
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question6" value="Затрудняюсь ответить">
          Затрудняюсь ответить
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>3. Какая форма проведения занятий по физической культуре для Вас наиболее оптимальна (можно выбрать несколько вариантов ответов)?</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question7" value="Лекции">
            Лекции
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question7" value="элективные курсы (спортивные секции в вузе в соответствии с графиком)">
          элективные курсы (спортивные секции в вузе в соответствии с графиком)
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question7" value="занятия в спортзале по расписанию">
          занятия в спортзале по расписанию
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question7" value="не посещаю занятия по физической культуре, потому что (укажите)">
          не посещаю занятия по физической культуре, потому что
        </label>
      </div>
      <br>
      <input type="text" class="form-control" name="question7d">
    </div>
  </div>

  <div class="form-group">
    <h4>4.Удовлетворены ли Вы в целом организацией и прохождением практики (последней на момент заполнения анкеты)?</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question8" value="да, полностью">
            да, полностью
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question8" value="да, частично, потому что (укажите причину)">
            да, частично, потому что (укажите причину)
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question8" value="нет, потому что (укажите причину)">
            нет, потому что (укажите причину)
        </label>
      </div>
      <br>
      <input type="text" class="form-control" name="question8d">
    </div>
  </div>

  <div class="form-group">
    <h4>5. Применяют ли преподаватели на вашем курсе современные образовательные технологии (лекция-диалог, семинар-дискуссия, анализ и решение конкретных ситуаций, деловые игры, кейс-стади и др.)?</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question9" value="да, применяют, и мне это помогает лучше освоить предмет">
          да, применяют, и мне это помогает лучше освоить предмет
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question9" value="да, применяют, но в освоении предмета мне это не помогает ">
          да, применяют, но в освоении предмета мне это не помогает
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question9" value="нет">
          нет
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>6. Пользовались ли Вы в этом учебном году материалами, выложенными на сайтах преподавателей</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question10" value="да">
          да
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question10" value="нет (не было необходимости)">
          нет (не было необходимости)
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question10" value="нет, не знаю о существовании таких сайтов">
          нет, не знаю о существовании таких сайтов
        </label>
      </div>
    </div>
  </div>


  <div class="form-group">
    <h4>7. Выберите утверждение, которое соответствует Вашему отношению к учебе в вузе</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question11" value="для получения глубоких знаний, необходимо регулярно заниматься">
          для получения глубоких знаний, необходимо регулярно заниматься
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question11" value="главное – получать хорошие оценки, а знания накопятся">
          главное – получать хорошие оценки, а знания накопятся
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question11" value="можно пропускать занятия, если это не отражается на полученных оценках">
          можно пропускать занятия, если это не отражается на полученных оценках
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question11" value="главное – получить диплом, а какими средствами и с какими оценками, – это не имеет значения">
            главное – получить диплом, а какими средствами и с какими оценками, – это не имеет значения
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>8. С чем, на Ваш взгляд, связаны Ваши проблемы с учебой в вузе? (можно выбрать несколько вариантов ответов)</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question121" value="учеба в вузе не вызывает проблем">
          учеба в вузе не вызывает проблем
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question122" value="со слабой школьной подготовкой">
          со слабой школьной подготовкой
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question123" value="с неумением организовать себя и правильно распределить время">
          с неумением организовать себя и правильно распределить время
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question124" value="с высокими вузовскими требованиями">
          с высокими вузовскими требованиями
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question125" value="с действующей в вузе рейтинговой системой контроля">
          с действующей в вузе рейтинговой системой контроля
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question126" value="с собственной ленью">
          с собственной ленью
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question127" value="с плохим самочувствием">
          с плохим самочувствием
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question128" value="с необходимостью совмещать учебу с работой">
          с необходимостью совмещать учебу с работой
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>9. Что может повысить Ваш интерес к учебе?</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question13" value="только мои личные установки на учебу">
          только мои личные установки на учебу
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question13" value="нормализация отношений в группе">
          нормализация отношений в группе
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question13" value="техническое оснащение вузовских лабораторий и аудиторий (использование преподавателями презентаций, аудио и видео материалов)">
          техническое оснащение вузовских лабораторий и аудиторий (использование преподавателями презентаций, аудио и видео материалов)
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question13" value="использование преподавателями современных образовательных технологий">
          использование преподавателями современных образовательных технологий
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question13" value="другое (укажите)">
          другое (укажите)
        </label>
      </div>
      <br>
      <input type="text" class="form-control" name="question13d">
    </div>
  </div>

  <div class="form-group">
    <h4>10. Нравится ли Вам учиться в данном вузе и на данном направлении подготовки (специальности)?</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question14" value="да">
          да
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question14" value="частично, да">
          частично, да
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question14" value="нет">
          нет
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question14" value="затрудняюсь ответить">
          затрудняюсь ответить
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>11. На данный момент закрыта ли у Вас сессия?</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question15" value="да">
          да
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question15" value="нет, есть задолженности">
          нет, есть задолженности
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>12.Сколько часов в день в среднем у Вас уходит на самостоятельную подготовку к занятиям?</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question16" value="не трачу времени на подготовку">
          не трачу времени на подготовку
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question16" value="от 1 до 3 часов">
          от 1 до 3 часов
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question16" value="от 3 до 6 часов">
          от 3 до 6 часов
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question16" value="свыше 6 часов">
          свыше 6 часов
        </label>
      </div>
    </div>
  </div>



  <div class="form-group">
    <h4>13. Удовлетворены ли Вы условиями обучения в вузе?</h4>
    <div class="form-group" style="padding-left:100px;">
      <h4>Расписание занятий</h4>
      <div class="col-sm-10" style="">
        <div class="radio">
          <label>
            <input type="radio" name="question171" value="да, полностью">
            да, полностью
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question171" value="да, частично (уточните, почему частично)">
            да, частично (уточните, почему частично)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question171" value="нет (уточните, почему)">
            нет (уточните, почему)
          </label>
        </div>
        <br>
        <input type="text" class="form-control" name="question171d">
      </div>
    </div>

    <div class="form-group" style="padding-left:100px;">
      <h4>Организация занятий</h4>
      <div class="col-sm-10" style="">
        <div class="radio">
          <label>
            <input type="radio" name="question172" value="да, полностью">
            да, полностью
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question172" value="да, частично (уточните, почему частично)">
            да, частично (уточните, почему частично)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question172" value="нет (уточните, почему)">
            нет (уточните, почему)
          </label>
        </div>
        <br>
        <input type="text" class="form-control" name="question172d">
      </div>
    </div>

    <div class="form-group" style="padding-left:100px;">
      <h4>Техническая оснащенность аудиторий, лабораторий </h4>
      <div class="col-sm-10" style="">
        <div class="radio">
          <label>
            <input type="radio" name="question173" value="да, полностью">
            да, полностью
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question173" value="да, частично (уточните, почему частично)">
            да, частично (уточните, почему частично)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question173" value="нет (уточните, почему)">
            нет (уточните, почему)
          </label>
        </div>
        <br>
        <input type="text" class="form-control" name="question173d">
      </div>
    </div>

    <div class="form-group" style="padding-left:100px;">
      <h4>Компьютерное обеспечение учебного процесса (наличие специализированных программ)</h4>
      <div class="col-sm-10" style="">
        <div class="radio">
          <label>
            <input type="radio" name="question174" value="да, полностью">
            да, полностью
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question174" value="да, частично (уточните, почему частично)">
            да, частично (уточните, почему частично)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question174" value="нет (уточните, почему)">
            нет (уточните, почему)
          </label>
        </div>
        <br>
        <input type="text" class="form-control" name="question174d">
      </div>
    </div>

    <div class="form-group" style="padding-left:100px;">
      <h4>Профессионализм преподавателей </h4>
      <div class="col-sm-10" style="">
        <div class="radio">
          <label>
            <input type="radio" name="question175" value="да, полностью">
            да, полностью
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question175" value="да, частично (уточните, почему частично)">
            да, частично (уточните, почему частично)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question175" value="нет (уточните, почему)">
            нет (уточните, почему)
          </label>
        </div>
        <br>
        <input type="text" class="form-control" name="question175d">
      </div>
    </div>

    <div class="form-group" style="padding-left:100px;">
      <h4>Вежливость, такт, культура речи и культура общения преподавателей</h4>
      <div class="col-sm-10" style="">
        <div class="radio">
          <label>
            <input type="radio" name="question176" value="да, полностью">
            да, полностью
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question176" value="да, частично (уточните, почему частично)">
            да, частично (уточните, почему частично)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question176" value="нет (уточните, почему)">
            нет (уточните, почему)
          </label>
        </div>
        <br>
        <input type="text" class="form-control" name="question176d">
      </div>
    </div>

    <div class="form-group" style="padding-left:100px;">
      <h4>Возможность встретиться с преподавателями на консультации</h4>
      <div class="col-sm-10" style="">
        <div class="radio">
          <label>
            <input type="radio" name="question177" value="да, полностью">
            да, полностью
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question177" value="да, частично (уточните, почему частично)">
            да, частично (уточните, почему частично)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question177" value="нет (уточните, почему)">
            нет (уточните, почему)
          </label>
        </div>
        <br>
        <input type="text" class="form-control" name="question177d">
      </div>
    </div>

    <div class="form-group" style="padding-left:100px;">
      <h4>Доступность учебников и учебно-методической литературы в электронной и печатной формах</h4>
      <div class="col-sm-10" style="">
        <div class="radio">
          <label>
            <input type="radio" name="question178" value="да, полностью">
            да, полностью
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question178" value="да, частично (уточните, почему частично)">
            да, частично (уточните, почему частично)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question178" value="нет (уточните, почему)">
            нет (уточните, почему)
          </label>
        </div>
        <br>
        <input type="text" class="form-control" name="question178d">
      </div>
    </div>

    <div class="form-group" style="padding-left:100px;">
      <h4>Состояние и техническая оснащенность спортзалов</h4>
      <div class="col-sm-10" style="">
        <div class="radio">
          <label>
            <input type="radio" name="question179" value="да, полностью">
            да, полностью
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question179" value="да, частично (уточните, почему частично)">
            да, частично (уточните, почему частично)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question179" value="нет (уточните, почему)">
            нет (уточните, почему)
          </label>
        </div>
        <br>
        <input type="text" class="form-control" name="question179d">
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>14. Удовлетворены ли Вы работой следующих структурных подразделений и служб?</h4>
    <div class="form-group" style="padding-left:100px;">
      <h4>Деканат</h4>
      <div class="col-sm-10" style="">
        <div class="radio">
          <label>
            <input type="radio" name="question181" value="да, полностью">
            да, полностью
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question181" value="да, частично (уточните, почему частично)">
            да, частично (уточните, почему частично)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question181" value="нет (уточните, почему)">
            нет (уточните, почему)
          </label>
        </div>
        <br>
        <input type="text" class="form-control" name="question181d">
      </div>
    </div>

    <div class="form-group" style="padding-left:100px;">
      <h4>Выпускающая кафедра</h4>
      <div class="col-sm-10" style="">
        <div class="radio">
          <label>
            <input type="radio" name="question182" value="да, полностью">
            да, полностью
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question182" value="да, частично (уточните, почему частично)">
            да, частично (уточните, почему частично)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question182" value="нет (уточните, почему)">
            нет (уточните, почему)
          </label>
        </div>
        <br>
        <input type="text" class="form-control" name="question182d">
      </div>
    </div>

    <div class="form-group" style="padding-left:100px;">
      <h4>Столоваяа</h4>
      <div class="col-sm-10" style="">
        <div class="radio">
          <label>
            <input type="radio" name="question183" value="да, полностью">
            да, полностью
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question183" value="да, частично (уточните, почему частично)">
            да, частично (уточните, почему частично)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question183" value="нет (уточните, почему)">
            нет (уточните, почему)
          </label>
        </div>
        <br>
        <input type="text" class="form-control" name="question183d">
      </div>
    </div>

    <div class="form-group" style="padding-left:100px;">
      <h4>Буфеты</h4>
      <div class="col-sm-10" style="">
        <div class="radio">
          <label>
            <input type="radio" name="question184" value="да, полностью">
            да, полностью
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question184" value="да, частично (уточните, почему частично)">
            да, частично (уточните, почему частично)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question184" value="нет (уточните, почему)">
            нет (уточните, почему)
          </label>
        </div>
        <br>
        <input type="text" class="form-control" name="question184d">
      </div>
    </div>

    <div class="form-group" style="padding-left:100px;">
      <h4>Медицинский кабинет</h4>
      <div class="col-sm-10" style="">
        <div class="radio">
          <label>
            <input type="radio" name="question185" value="да, полностью">
            да, полностью
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question185" value="да, частично (уточните, почему частично)">
            да, частично (уточните, почему частично)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question185" value="нет (уточните, почему)">
            нет (уточните, почему)
          </label>
        </div>
        <br>
        <input type="text" class="form-control" name="question185d">
      </div>
    </div>

    <div class="form-group" style="padding-left:100px;">
      <h4>Психолого-педагогическая служба</h4>
      <div class="col-sm-10" style="">
        <div class="radio">
          <label>
            <input type="radio" name="question186" value="да, полностью">
            да, полностью
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question186" value="да, частично (уточните, почему частично)">
            да, частично (уточните, почему частично)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question186" value="нет (уточните, почему)">
            нет (уточните, почему)
          </label>
        </div>
        <br>
        <input type="text" class="form-control" name="question186d">
      </div>
    </div>

    <div class="form-group" style="padding-left:100px;">
      <h4>Библиотека, читальный зал</h4>
      <div class="col-sm-10" style="">
        <div class="radio">
          <label>
            <input type="radio" name="question187" value="да, полностью">
            да, полностью
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question187" value="да, частично (уточните, почему частично)">
            да, частично (уточните, почему частично)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="question187" value="нет (уточните, почему)">
            нет (уточните, почему)
          </label>
        </div>
        <br>
        <input type="text" class="form-control" name="question187d">
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>15. Принимаете ли Вы участие в научных семинарах, конференциях, конкурсах?</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question19" value="да, регулярно ">
          да, регулярно
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question19" value="да, иногда">
          да, иногда
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question19" value="не участвую, потому что не знаком с информацией о таких мероприятиях">
          не участвую, потому что не знаком с информацией о таких мероприятиях
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question19" value="нет, не участвую">
          нет, не участвую
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>16. Располагаете ли Вы возможностью бесплатно опубликовать статью, тезисы?</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question20" value="да">
          да
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question20" value="нет">
          нет
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question20" value="затрудняюсь ответить">
          затрудняюсь ответить
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>17. Планируете ли Вы поступать в магистратуру (аспирантуру)?</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question21" value="да, в магистратуру СибАДИ">
          да, в магистратуру СибАДИ
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question21" value="да, в аспирантуру СибАДИ">
          да, в аспирантуру СибАДИ
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question21" value="да, планирую, но не в СибАДИ">
          да, планирую, но не в СибАДИ
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question21" value="не планирую">
          не планирую
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question21" value="затрудняюсь ответить">
          затрудняюсь ответить
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>18. При решении возникших трудностей в Вашей студенческой жизни чью поддержку и помощь Вы ощутили в первую очередь? </h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question22" value="деканата">
          деканата
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question22" value="куратора">
          куратора
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question22" value="преподавателей">
          преподавателей
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question22" value="студенческого профкома">
          студенческого профкома
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question22" value="друзей или семьи">
          друзей или семьи
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question22" value="справлялся(ась) самостоятельно">
          справлялся(ась) самостоятельно
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>19. Дайте оценку Вашим отношениям с одногруппниками </h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question23" value="меня в группе уважают">
          меня в группе уважают
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question23" value="со мной считаются">
          со мной считаются
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question23" value="ко мне равнодушны">
          ко мне равнодушны
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question23" value="меня  не замечают ">
          меня  не замечают
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question23" value="меня ущемляют">
          меня ущемляют
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>20. Выберите или предложите сами личностную метафору-образ, с которым сравниваете себя в роли студента</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question24" value="иголка в стоге сена">
          иголка в стоге сена
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question24" value="букашка">
          букашка
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question24" value="сонная муха">
          сонная муха
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question24" value="жертва обстоятельств">
          жертва обстоятельств
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question24" value="затерянный призрак">
          затерянный призрак
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question24" value="одинокий волк">
          одинокий волк
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question24" value="лидер">
          лидер
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question24" value="рыба в воде">
          рыба в воде
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question24" value="впитывающая губка">
          впитывающая губка
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question24" value="ответственный человек">
          ответственный человек
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question24" value="свободная птица">
          свободная птица
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question24" value="белая ворона">
          белая ворона
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question24" value="тусовщик">
          тусовщик
        </label>
      </div>
      <br>
      <input type="text" class="form-control" name="question24d">
    </div>
  </div>

  <div class="form-group">
    <h4>21.Сколько раз Вы встречались с куратором за последние два месяца? (для студентов второго курса)</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question25" value="не знаком(а) с куратором">
          не знаком(а) с куратором
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question25" value="не встречался(ась) в указанный период">
          не встречался(ась) в указанный период
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question25" value="один раз">
          один раз
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question25" value="два и более раз">
          два и более раз
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>22. Как Вы считаете, нужен ли куратор студентам на 3 и 4 курсах?</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question26" value="да">
          да
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question26" value="нет">
          нет
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question26" value="Затрудняюсь ответить">
          Затрудняюсь ответить
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>23. Есть ли у Вас время на культурно-досуговую деятельность?</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question27" value="да, занимаюсь спортом">
          да, занимаюсь спортом
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question27" value="да, хожу в кино и театр, на концерты">
          да, хожу в кино и театр, на концерты
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question27" value="да, участвую в вузовских мероприятий">
          да, участвую в вузовских мероприятий
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question27" value="да, провожу время за компьютером">
          да, провожу время за компьютером
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question27" value="нет, времени не хватает">
          нет, времени не хватает
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question27" value="другое">
          другое
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>24.Какое мероприятие в этом учебном году было самым запоминающимся для Вас?(Общевузовское, Факультетское или мероприятие проводимое в группе ? Напишите тип и название мероприятия) </h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <br>
      <input type="text" class="form-control" name="question28">
    </div>
  </div>

  <div class="form-group">
    <h4>25. Собираетесь ли Вы работать по получаемой квалификации (специальности)?</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question29" value="да">
          да
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question29" value="возможно, да">
          возможно, да
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question29" value="скорее, нет">
          скорее, нет
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question29" value="нет">
          нет
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question29" value="затрудняюсь ответить">
          затрудняюсь ответить
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>26. Как Вы планируете искать себе работу после окончания СибАДИ?</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question30" value="через знакомых и родственников">
          через знакомых и родственников
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question30" value="через рассылку резюме и объявлений">
          через рассылку резюме и объявлений
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question30" value="надеюсь на помощь вуза ">
          надеюсь на помощь вуза
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question30" value="через агентства по трудоустройству">
          через агентства по трудоустройству
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question30" value="обращусь в организацию, где проходил(а) практику">
          обращусь в организацию, где проходил(а) практику
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>27. С какими утверждениями Вы согласны? </h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question311" value="У  СибАДИ есть свои традиции, и я их знаю">
          У  СибАДИ есть свои традиции, и я их знаю
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question312" value="В СибАДИ высокий уровень образования">
          В СибАДИ высокий уровень образования
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question313" value="СибАДИ – престижный вуз">
          СибАДИ – престижный вуз
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question314" value="В вузе созданы хорошие условия для самореализации студентов">
           В вузе созданы хорошие условия для самореализации студентов
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question315" value="Я легко могу получить информацию, касающуюся учебного процесса и внеучебных мероприятий ">
          Я легко могу получить информацию, касающуюся учебного процесса и внеучебных мероприятий
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question316" value="В вузе интересная студенческая жизнь">
          В вузе интересная студенческая жизнь
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question317" value="В вузе отсутствует коррупция">
          В вузе отсутствует коррупция
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question318" value="В вузе строгий контроль за посещаемостью студентов ">
          В вузе строгий контроль за посещаемостью студентов
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question319" value="Мне нравится модульно-рейтинговая система, действующая в вузе">
          Мне нравится модульно-рейтинговая система, действующая в вузе
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question3110" value="Будет правильно, если на стипендию будут назначать (или снимать) по итогам каждой контрольной точки">
          Будет правильно, если на стипендию будут назначать (или снимать) по итогам каждой контрольной точки
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question3111" value="В вузе можно получить дополнительную военно-учетную специальность">
          В вузе можно получить дополнительную военно-учетную специальность
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="question3112" value="В вузе можно получить дополнительную рабочую специальность (профессию)">
          В вузе можно получить дополнительную рабочую специальность (профессию)
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <h4>28. Если Вы проживаете в общежитии, то с какими проблемами Вы сталкиваетесь постоянно?</h4>
    <div class="col-sm-10" style="padding-left:100px;">
      <div class="radio">
        <label>
          <input type="radio" name="question32" value="удовлетворен(а) условиями проживания">
          удовлетворен(а) условиями проживания
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="question32" value="существуют проблемы (укажите какие)">
          существуют проблемы (укажите какие)
        </label>
      </div>
      <br>
      <input type="text" class="form-control" name="question32d">
    </div>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-success pull-right">
      Отправить
    </button>
  </div>

</form>

<?php
  /*
  <div class="radio">
    <label>
      <input type="radio" name="question" value="">

    </label>
  </div>
  */
  /*
  <div class="form-group">
    <h4></h4>
    <div class="col-sm-10" style="padding-left:100px;">

    </div>
  </div>
  */
 ?>




<?php include "templates/include/footer.php" ?>
