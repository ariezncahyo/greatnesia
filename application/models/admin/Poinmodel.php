<?php
/**
* 
*/
class Poinmodel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function countAllTukarPoin()
	{
		$this->db->from('penukaran');
		return $this->db->count_all_results();
	}

	public function getAllTukarPoin($pg,$off)
	{
		$this->db->order_by('waktu_penukaran','desc');
		$this->db->join('barang_poin','penukaran.tid = barang_poin.tid');
        return $this->db->get('penukaran',$pg,$off);
	}

	public function countAllBarangPoin()
	{
		$this->db->from('barang_poin');
		return $this->db->count_all_results();
	}

	public function getAllBarangPoin($pg,$off)
	{
		$this->db->order_by('barang','asc');
        return $this->db->get('barang_poin',$pg,$off);
	}

	public function countPengajuanPenukaran()
	{
		$this->db->where('status',1);
		$this->db->from('penukaran');
		return $this->db->count_all_results();
	}
}