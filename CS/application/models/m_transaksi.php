<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_transaksi extends CI_Model
{


	public function getRows()
	{
		$query = $this->db->query('SELECT * from transaksi');
 		return $query->num_rows() ;
	}

	public function get_data()
	{
		$query = $this->db->query('SELECT * from transaksi');
		return $query->result();
	}

	public function tambah($data)
	{

		$query = $this->db->get_where('transaksi', array('kdTrx' => $data['kdTrx']));
 		$confirm = $query->num_rows();
		if($confirm==0){
			$this->db->insert('transaksi', $data);
			return TRUE;
		} else {
			return FALSE;
		}	
	}

	public function tambahProduk($data)
	{
		$kdTrx = $this->getRows();
		$this->db->insert('trx'.$kdTrx, $data);

		$total = $this->db->query("SELECT SUM(total) as total  from trx".$kdTrx."")->result();
		foreach ($total as $key ) {
			$data = array(
        		'hargaTotal' => $key->total,
			);
		}
		$this->db->where('kdTrx','trx'.$kdTrx);
		$this->db->update('transaksi', $data);
	}


	public function createTable(){
		$this->load->dbforge();
		$kdTrx = $this->getRows() +1;
        $fields = array(
            'produk' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '5',
            ),
            'kuantitas' => array(
                    'type' =>'INT',
                    'constraint' => 3,
            ),
            'harga' => array(
                    'type' => 'INT',
                    'null' => 10,
            ),
            'total' => array(
                    'type' => 'INT',
                    'null' => 10,
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('trx'.$kdTrx, TRUE);

        $data = array(
        'kdTrx' => 'trx'.$kdTrx,
		);

		$this->db->insert('transaksi', $data);
		return 'trx'.($kdTrx-1);
    }

	public function setPembeli($data)
	{
		$kdTrx = $this->getRows();
		$kdPembeli = array(
        		'pembeli' => $data,
        		'statusCheckout' => TRUE,
			);
		$this->db->where('kdTrx','trx'.$kdTrx);
		$this->db->update('transaksi', $kdPembeli);
		return 'trx'.$kdTrx;
	}

	public function cart()
	{
		if ($this->getRows() == 0){
			$this->createTable();
		}
		$kdTrx = $this->getRows();
		$query = $this->db->query("SELECT hargaTotal as cart FROM transaksi WHERE kdTrx='trx".$kdTrx."'");
		if ($query->num_rows() > 0){
			return $query->result();
		}else{
			return FALSE;
		}
	}

	public function getPembayaran(){
		$query = $this->db->query("SELECT kdTrx, tanggal, hargaTotal from transaksi where statusCheckout = TRUE AND statusPembayaran = FALSE");
		return $query->result();
	}

	public function validasiPembayaran($data){
		$this->db->set('statusPembayaran', TRUE);
		$this->db->where('kdTrx',  $data);
		$this->db->update('transaksi');
	}

	public function getPesanan(){
		$query = $this->db->query("SELECT kdTrx from transaksi where statusPembayaran = TRUE AND statusProduksi = FALSE");
		return $query->result();
	}

	public function getPesananDetil($data){
		$query = $this->db->query("SELECT produk, kuantitas from ".$data."");	
		return $query->result();
	}

	public function validasiProduksi($data){
		$this->db->set('statusProduksi', TRUE);
		$this->db->where('kdTrx',  $data);
		$this->db->update('transaksi');
	}

	public function getPengantaran(){
		$query = $this->db->query("SELECT kdTrx, nama, alamat from transaksi join pembeli where statusProduksi = TRUE AND statusAntar = FALSE AND transaksi.pembeli = pembeli.kdPembeli");
		return $query->result();
	}

	public function validasiPengantaran($data){
		$this->db->set('statusAntar', TRUE);
		$this->db->where('kdTrx',  $data);
		$this->db->update('transaksi');
	}

	public function cari($data){
		$baris = $this->db->query("SELECT kdTrx from transaksi where kdTrx = '".$data."'")->num_rows();
		if ( $baris > 0 ){
			$hasil = $this->db->query("SELECT statusCheckout, statusPembayaran, statusProduksi, statusAntar from transaksi where kdTrx = '".$data."'")->result();
			foreach ($hasil as $x ) {
				if ($x->statusAntar == 1){
					return "Pesanan telah selesai";
				}elseif ($x->statusProduksi == 1 AND $x->statusAntar == 0) {
					return "Pesanan sedang diantar";
				}elseif ($x->statusPembayaran == 1 AND $x->statusProduksi == 0) {
					return "Pesanan sedang diproduksi";
				}else{
					return "Pesanan sedang diverifikasi";
				}
			}
		}
		else{
			return FALSE;
		}
		
	}

}
?>
