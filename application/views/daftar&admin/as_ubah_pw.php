<body>
    <section class="body-sign">
        <div class="center-sign">
            <a href="/" class="logo pull-left">
                <img src="<?= base_url(); ?>assets/assets/images/logo fix.png" height="54" alt="Porto Admin">
            </a>

            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Ganti Password</h2>
                </div>
                <div class="panel-body">
                    <div class="alert alert-info">
                        <p class="m-none text-semibold h6">Masukkan Email Anda!</p>
                    </div>

                    <form>
                        <div class="form-group mb-none">
                            <div class="input-group">
                                <input name="username" type="email" placeholder="E-mail" class="form-control input-lg">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-lg" type="submit">Reset!</button>
                                </span>
                            </div>
                        </div>

                        <p class="text-center mt-lg">Remembered? <a href="<?= base_url();  ?>auth/index">Log In!</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>