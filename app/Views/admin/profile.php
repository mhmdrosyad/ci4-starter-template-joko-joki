<?= $this->extend('admin/layout/admin_layout') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title">
                        <h2>My Profile</h2>
                    </div>
                </div>
                <!-- end col -->
                <!-- <div class="col-md-6">
                    <div class="breadcrumb-wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#0">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#0">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Settings
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div> -->
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- ========== title-wrapper end ========== -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card-style settings-card-1 mb-30">
                    <div class="title mb-30 d-flex justify-content-between align-items-center">
                        <h6>My Profile</h6>
                        <!-- <button class="border-0 bg-transparent">
                            <i class="lni lni-pencil-alt"></i>
                        </button> -->
                    </div>
                    <div class="profile-info">
                        <div class="d-flex align-items-center mb-30">
                            <div class="profile-image">
                                <img src="/assets/admin/images/profile/profile-1.png" alt="" />
                                <div class="update-image">
                                    <input id="profile-img" type="file" />
                                    <label for="profile-img"><i class="lni lni-cloud-upload"></i></label>
                                </div>
                            </div>
                            <div class="profile-meta">
                                <h5 class="text-bold text-dark mb-10 text-capitalize"><?= $user['name'] ?></h5>
                                <p class="text-sm text-gray"><?= $user['email'] ?></p>
                            </div>
                        </div>
                        <form action="<?= route_to('update-profile', $user['id']) ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="input-style-1">
                                <label>Name</label>
                                <input name="name" type="text" placeholder="input your name" value="<?= $user['name'] ?>" />
                            </div>
                            <div class="input-style-1">
                                <label>Username</label>
                                <input name="username" type="text" placeholder="input your username" value="<?= $user['username'] ?>" />
                            </div>
                            <div class="input-style-1">
                                <label>Email</label>
                                <input name="email" type="email" placeholder="admin@example.com" value="<?= $user['email'] ?>" />
                            </div>
                            <div class="col-12">
                                <button class="main-btn primary-btn btn-hover">
                                    Update Profile
                                </button>
                            </div>
                        </form>
                        <?php if (session()->get('error')) : ?>
                            <div class="alert-box danger-alert mt-3">
                                <div class="alert">
                                    <p><?= session()->get('error') ?></p>
                                </div>
                            </div>

                        <?php endif ?>

                        <?php if (session()->get('status')) : ?>
                            <div class="alert-box success-alert mt-3">
                                <div class="alert">
                                    <p>
                                        <?= session()->get('status') ?>
                                    </p>
                                </div>
                            </div>

                        <?php endif ?>

                        <?php if (session()->get('errors')) : ?>
                            <div class="alert-box danger-alert mt-3">
                                <div class="alert">
                                    <ul>
                                        <?php foreach (session()->get('errors') as $error) : ?>
                                            <li><?= esc($error) ?></li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <div class="col-lg-6">
                <div class="card-style settings-card-1 mb-30">

                    <div class="title mb-30 d-flex justify-content-between align-items-center">
                        <h6>Change Password</h6>
                    </div>
                    <div class="profile-info">
                        <form action="<?= route_to('change-password', $user['id']) ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="input-style-1">
                                <label>Old Password</label>
                                <input type="password" name="old_password" placeholder="input your old password" value="" />
                            </div>
                            <div class="input-style-1">
                                <label>New Password</label>
                                <input type="password" name="new_password" placeholder="input your new password" value="" />
                            </div>
                            <div class="col-12">
                                <button class="main-btn primary-btn btn-hover">
                                    Update Password
                                </button>
                            </div>
                        </form>
                        <?php if (session()->get('error-pw')) : ?>
                            <div class="alert-box danger-alert mt-3">
                                <div class="alert">
                                    <p><?= session()->get('error-pw') ?></p>
                                </div>
                            </div>

                        <?php endif ?>

                        <?php if (session()->get('status-pw')) : ?>
                            <div class="alert-box success-alert mt-3">
                                <div class="alert">
                                    <p>
                                        <?= session()->get('status-pw') ?>
                                    </p>
                                </div>
                            </div>

                        <?php endif ?>

                        <?php if (session()->get('errors-pw')) : ?>
                            <div class="alert-box danger-alert mt-3">
                                <div class="alert">
                                    <ul>
                                        <?php foreach (session()->get('errors-pw') as $error) : ?>
                                            <li><?= esc($error) ?></li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>


<?= $this->endSection() ?>