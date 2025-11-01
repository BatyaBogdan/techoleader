    <main class="flex-shrink-0">
        <div class="pb-4">
        <div class="container">
            <h2 class="text-center">Студенты</h2>
            <hr class="featurette-divider">
            <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            foreach($students as $row){
                echo '<div class="col">
                <div class="card h-100 text-bg-light">
                <div class="card-body">
                <h5 class="card-title">'.$row['login'].'</h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b>Студенческий билет:</b> №'.$row['number_card'].'</li>
                  <li class="list-group-item"><b>Группа:</b> '.$row['name_group'].'</li>
                  <li class="list-group-item"><b>Год поступления:</b> '.$row['year_accept'].' г.</li>
                  <li class="list-group-item"><b>Форма обучения:</b> '.$row['form_education'].'</li>
                </ul>
              </div>
            </div>';
            }
            ?>
            </div>
        </div>
        </div>
    </main>