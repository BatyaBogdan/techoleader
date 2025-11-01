    <main class="flex-shrink-0">
        <div class="pb-4">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h2 class="text-center">Новое занятие</h2>
              <hr class="featurette-divider">
              <div class="col mb-3">
              <form action="teacher/new_lesson" method="post">
              <div class="col mb-3">
                <label class="form-label" for="date">Дата</label>
                <input type="date" name="date" class="form-control">
              </div>
              <div class="col mb-3">
                <label class="form-label" for="time">Время</label>
                <input type="time" name="time" class="form-control">
              </div>
              <div class="col mb-3">
                <label class="form-label" for="auditorium">Аудитория</label>
                <input type="number" name="auditorium" class="form-control">
              </div>
              <div class="col mb-3">
                <label class="form-label" for="type_occupation">Тип занятия</label>
                <select name="type_occupation" class="form-select">
                  <option value="Лекция">Лекция</option>
                  <option value="Семинар">Семинар</option>
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
              <div class="col mb-3">
                <label class="form-label" for="id_group">Группа</label>
                <select name="id_group" class="form-select">
                  <?php
                  foreach($groups as $row){
                    echo '<option value="'.$row['id_group'].'">'.$row['name_group'].'</option>';
                  }
                  ?>
                </select>
              </div>
              <div class="row mx-auto">
                <button type="submit" class="btn btn-primary">Создать</button>
              </div>
              </form>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h2 class="text-center">Новая дисциплина</h2>
              <hr class="featurette-divider">
              <form action="teacher/new_course" method="post">
              <div class="col mb-3">
                <label class="form-label" for="name_discipline">Название дисциплины</label>
                <input type="text" class="form-control" name="name_discipline">
              </div>
              <div class="col mb-3">
                <label class="form-label" for="description">Описание</label>
                <textarea name="description" class="form-control"></textarea>
              </div>
              <div class="col mb-3">
                <label class="form-label" for="hours">Количество часов</label>
                <input type="number" class="form-control" name="hours">
              </div>
              <div class="col mb-3">
                <label class="form-label" for="semester">Семестр</label>
                <input type="number" class="form-control" name="semester">
              </div>
              <div class="row mx-auto">
                <button type="submit" class="btn btn-primary">Создать</button>
              </div>
              </form>
            </div>
          </div>
          <div class="row">
        <div class="col-12 col-sm-6">
            <h2 class="text-center">Расписание занятий</h2>
            <hr class="featurette-divider">
            <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php
            foreach($schedule as $row){
                echo '<div class="col">
                <div class="card h-100 text-bg-light">
                <div class="card-body">
                  <h5 class="card-title">Занятие №'.$row['id_lesson'].'</h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b>Дата:</b> '.$row['date'].'</li>
                  <li class="list-group-item"><b>Время:</b> '.$row['time'].'</li>
                  <li class="list-group-item"><b>Аудитория:</b> '.$row['auditorium'].'</li>
                  <li class="list-group-item"><b>Тип занятия:</b> '.$row['type_occupation'].'</li>
                  <li class="list-group-item"><b>Преподаватель:</b> '.$row['login'].'</li>
                  <li class="list-group-item"><b>Группа:</b> '.$row['name_group'].'</li>
                </ul>
                <div class="card-footer">
                  <form action="teacher/fix_lesson" method="get">
                  <input type="hidden" name="id_lesson" value="'.$row['id_lesson'].'">
                  <button type="submit" class="btn btn-success">Изменить</button>
                  </form>
                </div>
              </div>
            </div>';
            }
            ?>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <h2 class="text-center">Все дисциплины</h2>
            <hr class="featurette-divider">
            <div class="row row-cols-1 g-4">
            <?php
            foreach($courses as $row){
                echo '<div class="col">
                <div class="card h-100 text-bg-light">
                <div class="card-body">
                  <h5 class="card-title">Дисциплина №'.$row['id_course'].'</h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b>Название:</b> '.$row['name_discipline'].'</li>
                  <li class="list-group-item"><b>Количество часов:</b> '.$row['hours'].'</li>
                  <li class="list-group-item"><b>Семестр:</b> '.$row['semester'].'</li>
                  <li class="list-group-item"><b>Описание:</b> '.$row['description'].'</li>
                </ul>
              </div>
            </div>';
            }
            ?>
            </div>
        </div>
          </div>
        </div>
        </div>
    </main>