    <main class="flex-shrink-0">
        <div class="pb-4">
        <div class="container">
            <h2 class="text-center">Ввод оценок</h2>
            <hr class="featurette-divider">
            <div class="grades col-12 col-xl-4 mx-auto card p-4">
              <form action="teacher/add_grade" method="post">
              <div class="col mb-3">
                <label class="form-label" for="evaluation_value">Значение оценки</label>
                <input class="form-control" type="number" min="2" max="5" name="evaluation_value">
              </div>
              <div class="col mb-3">
                <label class="form-label" for="date_issue">Дата выставления</label>
                <input class="form-control" type="date" name="date_issue">
              </div>
              <div class="col mb-3">
                <label class="form-label" for="type_work">Тип работы</label>
                <select name="type_work" class="form-select">
                  <option value="Тест">Тест</option>
                  <option value="Экзамен">Экзамен</option>
                  <option value="Домашняя работа">Домашняя работа</option>
                </select>
              </div>
              <div class="col mb-3">
                <label class="form-label" for="id_student">Студент</label>
                <select name="id_student" class="form-select">
                  <?php
                  foreach($students as $row){
                    echo '<option value="'.$row['id_student'].'">'.$row['login'].'</option>';
                  }
                  ?>
                </select>
              </div>
              <div class="col mb-3">
                <label class="form-label" for="id_course">Дисциплина</label>
                <select name="id_course" class="form-select">
                  <?php
                  foreach($courses as $row){
                    echo '<option value="'.$row['id_course'].'">'.$row['name_discipline'].'</option>';
                  }
                  ?>
                </select>
              </div>
              <div class="row mx-auto">
                <button type="submit" class="btn btn-primary">Отправить</button>
              </div>
            </form>
            </div>
            <h2 class="text-center mt-3">Оценки</h2>
            <hr class="featurette-divider">
            <div class="row row-cols-1 row-cols-md-3 g-4">

            <?php
            foreach($grades as $row){
                echo '<div class="col">
                <div class="card h-100 text-bg-light">
                <div class="card-body">
                  <h5 class="card-title">Оценка №'.$row['id_grade'].'</h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b>Значение оценки:</b> '.$row['evaluation_value'].'</li>
                  <li class="list-group-item"><b>Дата выставления:</b> '.$row['date_issue'].'</li>
                  <li class="list-group-item"><b>Тип работы:</b> '.$row['type_work'].'</li>
                  <li class="list-group-item"><b>Дисциплина:</b> '.$row['name_discipline'].'</li>
                  <li class="list-group-item"><b>Студент:</b> '.$row['login'].'</li>
                </ul>
                <div class="card-footer">
                  <form action="teacher/fix_grade" method="get">
                  <input type="hidden" name="id_grade" value="'.$row['id_grade'].'">
                  <button type="submit" class="btn btn-success">Исправить</button>
                  </form>
                </div>
              </div>
            </div>';
            }
            ?>
            </div>
        </div>
        </div>
    </main>