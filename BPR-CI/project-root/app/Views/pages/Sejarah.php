<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>



<!------ Include the above in your HEAD tag ---------->

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>SEJARAH</h1>
            <ul class="timeline">
                <li>
                    <a>New Web Design</a>
                    <a class="float-right">21 March, 2014</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                </li>
                <li>
                    <a>21 000 Job Seekers</a>
                    <a class="float-right">4 March, 2014</a>
                    <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                </li>
                <li>
                    <a>Awesome Employers</a>
                    <a class="float-right">1 April, 2014</a>
                    <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>