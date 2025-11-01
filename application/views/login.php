    <main class="flex-shrink-0">
        <div class="pt-4 pb-4">
        <div class="container">
            <div class="autho col-12 col-xl-4 mx-auto card p-4">
                <h2 class="text-center">Авторизация</h2>
                <?php echo $this->session->flashdata('error');?>
                <form action="main/auth" method="post">
                    <div class="col mb-3">
                        <label for="login" class="form-label">Логин</label>
                        <input type="text" class="form-control" name="login" placeholder="Введите логин">
                    </div>
                    <div class="col mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" name="password" placeholder="Введите пароль">
                    </div>
                    <div class="row mx-auto">
                        <button type="submit" class="btn btn-primary">Войти</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </main>