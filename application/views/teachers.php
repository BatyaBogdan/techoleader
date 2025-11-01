    <main class="flex-shrink-0">
        <div class="pb-4">
        <div class="container">
            <h2 class="text-center">Преподаватели</h2>
            <hr class="featurette-divider">
            <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            foreach($teachers as $row){
                echo '<div class="col">
                <div class="card h-100 text-bg-light">
                <div class="card-body">
                  <h5 class="card-title">'.$row['department'].'</h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b>Ученая степень:</b> '.$row['academic_degree'].'</li>
                  <li class="list-group-item"><b>Должность:</b> '.$row['post'].'</li>
                  <li class="list-group-item"><b>Номер телефона:</b> '.$row['phone_number'].'</li>
                </ul>
              </div>
            </div>';
            }
            ?>
            </div>
        </div>
        </div>
    </main>