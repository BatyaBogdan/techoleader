    <main class="flex-shrink-0">
        <div class="pt-4 pb-4 bg-primary">
        <div class="container">
                    <?php
                    if($this->session->userdata('id_role') == 1){
                        echo '<h5 class="text-center text-light">Вы вошли как: <span class="badge rounded-pill text-bg-light">Студент</span></h5>';
                    }
                    else if($this->session->userdata('id_role') == 2){
                        echo '<h5 class="text-center text-light">Вы вошли как: <span class="badge rounded-pill text-bg-light">Преподаватель</span></h5>';
                    }
                    else if($this->session->userdata('id_role') == NULL and $this->session->userdata('id_user')){
                        echo '<h5 class="text-center text-light">Вы вошли как: <span class="badge rounded-pill text-bg-light">Неактивированный аккаунт</span></h5>';
                    }
                    else {
                        echo '';
                    }
                    ?>
            <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                <div class="container-fluid py-1">
                    <h1 class="display-5 fw-bold">Учебный портал ТехноЛидер</h1>
                    <p class="col-md-8 fs-4">ТехноЛидер - это веб-система для студентов и преподавателей Технологического Лицея "ТехноЛидер", которая создана для упрощения учебного процесса. Система предоставляет студентам доступ к их оценкам и расписанию занятий, а преподавателям помогает эффективно управлять учебными данными и планировать образовательный процесс.</p>
                    <?php
                    if($this->session->userdata('id_role')){
                        echo '';
                    }
                    else if($this->session->userdata('id_role') == NULL and $this->session->userdata('id_user')){
                        echo '';
                    }
                    else {
                        echo '<a class="btn btn-primary btn-lg" href="main/login">Войти</a>';
                    }
                    ?>
                </div>
            </div>
            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-body-tertiary rounded-3">
                        <h2 class="display-5 fw-bold">Студенты</h2>
                        <p>Студент – человек усердно работающий, стремящийся, старающийся и прилежно занимающийся.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                        <h2 class="display-5 fw-bold">Преподаватели</h2>
                        <p>Преподаватель – это тот, кто выращивает две мысли там, где раньше росла одна.</p>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="container">
                <div class="row featurette mt-4 mb-4">
                    <div class="col-md-7 order-md-2 align-self-center">
                        <h2 class="featurette-heading fw-normal lh-1">Важнейший вопрос — это готовность общества, граждан к повсеместному внедрению таких технологий. Нужно обеспечить широкое цифровое просвещение, запустить программы переобучения о цифровых технологиях».</h2>
                        <p class="lead">Президент Российской Федерации Путин В.В.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img class="rounded-3 img-thumbnail" src="img/russia.jpeg" alt="Путин В. В." width="500" height="500">
                    </div>
                </div>
            </div>
        </div>
    </main>