    <main class="flex-shrink-0">
        <div class="pt-4 pb-4">
        <div class="container">
            <div class="autho col-12 col-xl-4 mx-auto card p-4">
                <h2 class="text-center">Изменение занятия</h2>
                <form action="teacher/edit_lesson" method="post">
                    <input type="hidden" name="id_lesson" value="<?=$id_lesson?>">
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
                    <button type="submit" class="btn btn-danger">Исправить</button>
                </div>
                </form>
            </div>
        </div>
        </div>
    </main>