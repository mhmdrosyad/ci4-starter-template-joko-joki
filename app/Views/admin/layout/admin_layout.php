<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('admin/partials/head') ?>
</head>

<body>
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <?= $this->include('admin/partials/sidebar') ?>

    <div class="overlay"></div>

    <main class="main-wrapper">
        <?= $this->include('admin/partials/header') ?>

        <section class="section">
            <div class="container-fluid">
                <?= $this->renderSection('content') ?>
            </div>
        </section>

        <?= $this->include('admin/partials/footer') ?>
    </main>
    <?= $this->include('admin/partials/js') ?>
    <?= $this->renderSection('script') ?>
</body>

</html>