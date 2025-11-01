    <main class="flex-shrink-0">
        <div class="pb-4">
        <div class="container">
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
                </ul>
              </div>
            </div>';
            }
            ?>
            </div>
        </div>
        </div>
    </main>