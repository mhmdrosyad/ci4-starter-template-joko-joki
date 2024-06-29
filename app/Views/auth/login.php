<?= $this->extend('auth/layout/auth_layout') ?>

<?= $this->section('content') ?>
<div class="container-sm mt-5">
    <div class="row g-0 auth-row shadow">
        <div class="col-lg-6">
            <div class="auth-cover-wrapper bg-primary-100">
                <div class="auth-cover">
                    <div class="title text-center">
                        <h1 class="text-primary mb-10">Welcome Back</h1>
                        <p class="text-medium">
                            Sign in to your Existing account to continue
                        </p>
                    </div>
                    <div class="cover-image">
                        <img src="<?= base_url('assets/admin/images/auth/signin-image.svg') ?>" alt="" />
                    </div>
                    <div class="shape-image">
                        <img src="<?= base_url('assets/admin/images/auth/shape.svg') ?>" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-lg-6">
            <div class="signin-wrapper">
                <div class="form-wrapper">
                    <h6 class="mb-15">Sign In</h6>
                    <!-- <p class="text-sm mb-25">
                                Start creating the best possible user experience for you
                                customers.
                            </p> -->
                    <form action="<?= route_to('authenticate') ?>" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label for="identifier">Username or Email</label>
                                    <input class="<?= session()->has('error') ? 'form-control is-invalid' : '' ?>" type="text" name="identifier" id="identifier" placeholder="Username or Email" value="<?= old('identifier') ?>" required>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label for="password">Password</label>
                                    <input class="<?= session()->has('error') ? 'form-control is-invalid' : '' ?>" type="password" name="password" id="password" placeholder="Password" required>
                                </div>
                            </div>
                            <!-- end col -->
                            <!-- <div class="col-xxl-6 col-lg-12 col-md-6">
                                        <div class="form-check checkbox-style mb-30">
                                            <input class="form-check-input" type="checkbox" value="" id="checkbox-remember" />
                                            <label class="form-check-label" for="checkbox-remember">
                                                Remember me next time</label>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-lg-12 col-md-6">
                                        <div class="text-start text-md-end text-lg-start text-xxl-end mb-30">
                                            <a href="reset-password.html" class="hover-underline">
                                                Forgot Password?
                                            </a>
                                        </div>
                                    </div> -->
                            <!-- end col -->
                            <div class="col-12">
                                <div class="button-group d-flex justify-content-center flex-wrap">
                                    <button class="main-btn primary-btn btn-hover w-100 text-center">
                                        Sign In
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </form>
                    <?php if (session()->get('error')) : ?>
                        <div class="alert-box danger-alert mt-3">
                            <div class="alert">
                                <p><?= session()->get('error') ?></p>
                            </div>
                        </div>

                    <?php endif ?>

                    <?php if (session()->get('message')) : ?>
                        <div class="alert-box success-alert mt-3">
                            <div class="alert">
                                <p>
                                    <?= session()->get('message') ?>
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
        </div>
        <!-- end col -->
    </div>
</div>
<?= $this->endSection() ?>