<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MenuModel;
use CodeIgniter\HTTP\Request;
class MenuController extends Controller{
    /**
     * 
     * Instance of the main Request object.
     * 
     * @var HTTP\IncomingRequest;
     */
    protected $request;
    function __construct()
    {
        $this->menu = new MenuModel();
    }
    public function tampil()
    {
        # code...
        //$this-menu = new MenuModel();
        $data['data']=$this->menu->findAll();
        return view('menu',$data);
    }
    public function create()
    {
        # code...
        $data = array(
            'nama'=>$this->request->getPost('nama'),
            'harga'=>$this->request->getPost('harga'),
            'jumlah'=>$this->request->getPost('jumlah'),
            'jenis'=>$this->request->getPost('jenis'),
            'keterangan'=>$this->request->getPost('keterangan'),
        );
        $this->menu->insert($data);
        return redirect('menu')->with('success', 'data berhasil disimpan');
    }
    public function edit($id)
    {
        # code...
        $data = array(
            'nama'=>$this->request->getPost('nama'),
            'harga'=>$this->request->getPost('harga'),
            'jumlah'=>$this->request->getPost('jumlah'),
            'jenis'=>$this->request->getPost('jenis'),
            'keterangan'=>$this->request->getPost('keterangan'),
        );
        $this->menu->update($id,$data);
        return redirect('menu')->with('success', 'data berhasiil disimpan');
    }
    public function show($id)
    {
        # code...
    }
    public function delete($id)
    {
        # code...
        $this->menu->delete($id);
        return redirect('menu')->with('success', 'data berhasil dihapus');
    }
}