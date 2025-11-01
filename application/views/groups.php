    <main class="flex-shrink-0">
        <div class="pb-4">
        <div class="container">
            <h2 class="text-center">Группы</h2>
            <hr class="featurette-divider">
            <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            foreach($groups as $row){
                echo '<div class="col">
                <div class="card h-100 text-bg-light">
                <div class="card-body">
                  <h5 class="card-title">'.$row['name_group'].'</h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><b>Куратор:</b> '.$row['curator'].'</li>
                  <li class="list-group-item"><b>Год формирования:</b> '.$row['year_formation'].' г.</li>
                </ul>
              </div>
            </div>';
            }
            ?>
            </div>
        </div>
        </div>
    </main>