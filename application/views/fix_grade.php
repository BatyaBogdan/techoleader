    <main class="flex-shrink-0">
        <div class="pt-4 pb-4">
        <div class="container">
            <div class="autho col-12 col-xl-4 mx-auto card p-4">
                <h2 class="text-center">Исправление оценки студента</h2>
                <form action="teacher/edit_grade" method="post">
                    <input type="hidden" name="id_grade" value="<?=$id_grade?>">
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
                <div class="row mx-auto">
                    <button type="submit" class="btn btn-danger">Исправить</button>
                </div>
                </form>
            </div>
        </div>
        </div>
    </main>