    <main class="flex-shrink-0">
        <div class="pb-4">
        <div class="container">
            <h2 class="text-center">Расписание занятий</h2>
            <hr class="featurette-divider">
            <div class="row row-cols-1 row-cols-md-3 g-4">
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
              </div>
            </div>';
            }
            ?>
            </div>
        </div>
        </div>
    </main>