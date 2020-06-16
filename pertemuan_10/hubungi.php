<?php
include('header.php');
include('head.php');
include('menubar.php');
?>
<div class="row bg-white mt-2 p-2">
    <div class="col-12">
        <form action="">
            <div class="form-group row">
                <label for="nama" class="col-3">Nama</label>
                <input type="text" class="form-control col-9">
            </div>
            <div class="form-group row">
                <label for="email" class="col-3">Email</label>
                <input type="text" class="form-control col-9">
            </div>
            <div class="form-group row">
                <label for="pesan" class="col-3">Pesan</label>
                <textarea name="pesan" id="" cols="30" rows="10" class="form-control col-9"></textarea>
            </div>
            <div class="form-group row">
                <a href="" class="offset-3 col-9 btn btn-success">Kirim Pesan</a>
            </div>
        </form>
    </div>
</div>
<?php
include('footer.php');
?>