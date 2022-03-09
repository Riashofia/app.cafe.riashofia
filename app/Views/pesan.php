<?=$this->extend('layout/admin')?>
<?=$this->section('content')?>
<?php
    if (session()->getFlashdata('success')){
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?=session()->getFlashdata('success')?>
<button type="button" class="close" data-dismiss="alert" aria-label="close">Close</button></button>
</div>
<?php
}
?>
<div class="row">
    <div class="col-md-6">
        <div class="card shadow mb-3 border-left-primary">
            <form action="<?=base_url('pesan')?>" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="menu">Menu</label>
                        <select name="id_menu" class="form-control" id="id_menu">
                            <option value="">Silahkan pilih menu</option>
                            <?php
                                foreach ($data as $key => $val){
                            ?>
                            <option value="<?=$val['id']?>"><?=$val['nama']?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" id="jumlah">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Masukkan keranjang</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow mb-3 border-left-primary">
        <form action="<?=base_url('pesans')?>" method="post">
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="form-group">
                    <label for="no_meja">No_Meja</label>
                    <input type="number" class="form-control" name="no_meja" id="no_meja">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<div class="card">
    <card class="header">
        <h3 class="card-title">Pesanan</h3>
    </card>
    <div class="table responsive">
        <table class="table table-stripped table-hover">
            <thead>
                <th>No</th>
                <th>Makanan</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total Harga</th>
                <th>Option</th>
            </thead>
            <tbody>
            <?php
            if ($menu !=null){
            $no= 0;
                foreach ($menu as $val){
                    $no++
            ?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$val['nama']?></td>
                    <td><?=$val['jumlah']?></td>
                    <td><?=$val['harga']?></td>
                    <td><?=$val['harga'] * $val['jumlah']?></td>
                    <td>
                        <a href="<?=base_url('pesan/delete/'.$val['id_menu'])?>" class="btn btn-warning">Hapus</a>
                    </td>
                </tr>
               <?php
                }
            }
               ?>
            </tbody>
        </table>
    </div>
</div>
<?=$this->endSection();