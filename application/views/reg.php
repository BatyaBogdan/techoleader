    <main class="flex-shrink-0">
        <div class="pt-4 pb-4">
        <div class="container">
            <h2 class="text-center text-danger"><?php echo $this->session->flashdata('warning');?></h2>
            <div class="reg col-12 col-xl-4 mx-auto card p-4">
                <h2 class="text-center">Регистрация</h2>
                <form action="main/new_account" method="post">
                    <div class="col mb-3">
                        <label for="login" class="form-label">Логин</label>
                        <input type="text" class="form-control" name="login" placeholder="Придумайте логин">
                    </div>
                    <div class="col mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" name="password" placeholder="Придумайте пароль">
                    </div>
                    <div class="col mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="email" placeholder="Придумайте E-mail">
                    </div>
                    <!-- <div class="col mb-3">
                        <label for="id_group" class="form-label">Группа</label>
                        <select name="id_group" class="form-select">
                            <?php
                            foreach($group as $row){
                                echo '<option value='.$row['id_group'].'>'.$row['name_group'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col mb-3">
                        <label for="year_accept" class="form-label">Год поступления</label>
                        <input type="number" min="1900" max="2025" class="form-control" name="year_accept" placeholder="Введите год">
                    </div>
                    <div class="col mb-3">
                        <label for="form_education" class="form-label">Форма обучения</label>
                        <select class="form-select" name="form_education">
                            <option value="Очная">Очная</option>
                            <option value="Заочная">Заочная</option>
                            <option value="Дистанционная">Дистанционная</option>
                        </select>
                    </div> -->
                    <div class="row mx-auto">
                        <button type="submit" class="btn btn-primary">Создать аккаунт</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </main>