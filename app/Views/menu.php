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
    <button class="btn btn-primary" data-toggle="modal" data-target="#addMenu">Tambah Menu</button>
        <table class="table table-stripped table-hover">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Jenis </th>
            <th>Keterangan</th>
            <th>Option</th>
        </thead>
        <tbody>
        <?php
        $no =1;
        foreach($data as $row):
        ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row['nama']?></td>
                <td><?=$row['harga']?></td>
                <td><?=$row['jumlah']?></td>
                <td><?=$row['jenis']?></td>
                <td><?=$row['keterangan']?></td>
                <td>
                    <button class="btn btn-warning btn-sm btn-edit" data-toggle="modal" data-target="#editMenu-<?=$row['id']?>">Edit</button>
                    <a href="<?=base_url('menu/delete/'.$row['id'])?>" onclick="return confirm('yakin mau dihapus')" class="btn btn-danger btn-sm btn-delete">Delete</a>
                </td>
            </tr>
                <div class="modal fade" id="editMenu-<?=$row['id']?>" tabindex="-1" role="alert" aria-labelledby="example" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="example">Edit Menu</h5>
                    <button class="close" data-dismiss="modal" aria-label="close"></button>
                    </div>
                    <form action="<?=base_url('menu/edit/'.$row['id'])?>" method="post">
                    <div class="modal-body">
                    <input type="hidden" name="id" value="<?=$row['id']?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="inputkan nama" value="<?=$row['nama']?>">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" id="harga" class="form-control" placeholder="inputkan harga" value="<?=$row['harga']?>">
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="inputkan jumlah" value="<?=$row['jumlah']?>">
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis </label>
                            <select name="jenis" id="jenis" class="form-control" value="<?=$row['jenis']?>">
                                <option value="makanan">Makanan</option>
                                <option value="minuman">Minuman</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="inputkan keterangan" value="<?=$row['keterangan']?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        $no++;
    endforeach;
        ?>
        </tbody>
        </table>
        <div class="modal fade" id="addMenu" tabindex="-1" role="alert" aria-labelledby="example" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="example">Tambah Menu</h5>
                    <button class="close" data-dismiss="modal" aria-label="close">Close</button>
                    </div>
                    <div class="modal-body">
                    <form action="<?=base_url('menu')?>" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="inputkan nama">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" id="harga" class="form-control" placeholder="inputkan harga">
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="inputkan jumlah">
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select name="jenis" id="jenis" class="form-control">
                                <option value="makanan">Makanan</option>
                                <option value="minuman">Minuman</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="inputkan keterangan">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
<?=$this->endSection()?>