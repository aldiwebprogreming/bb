<?php 

	/**
	 * 
	 */
	class Admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			
		}

		function index(){

			$data['admin'] = $this->db->get('tbl_admin')->num_rows();
			$data['kategori'] = $this->db->get('tbl_kategori')->num_rows();
			$data['merek'] = $this->db->get('tbl_kategori')->num_rows();
			$data['produk'] = $this->db->get('tbl_produk')->num_rows();

			$this->load->view('template_admin/header');
			$this->load->view('admin/index', $data);
			$this->load->view('template_admin/footer');
		}
		function data_produk(){


			$data['kategori_produk'] = $this->db->get('tbl_kategori')->result_array();
			$data['sub_kategori'] = $this->db->get('tbl_sub_kategori')->result_array();
			$data['jenis_sub_kategori'] = $this->db->get('tbl_jenis_sub_kategori')->result_array();
			$data['produk'] = $this->db->get('tbl_produk')->result_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/data_produk', $data);
			$this->load->view('template_admin/footer');
		}

		function tambah_produk(){
			if (isset($_POST['kirim'])) {

				$config['upload_path']          = './berkas/';
				$config['allowed_types']        = 'jpg|png|jpeg';
				$config['min_size']             = 9000000;
				$config['remove_spaces']        = false;


				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('img')){
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('message', 'swal("Gambar yang anda masukan terlalu besar", "", "warning" );');
					redirect('admin/data_produk');

				}else{


					$kode = "produk-".rand(1, 100000);

					$data = [
						'kode_produk' => $kode,
						'name_produk' => $this->input->post('nama_produk'),
						'ket_produk' => $this->input->post('ket_produk'),
						'name_kategori' => $this->input->post('kategori'),
						'name_sub_kategori' => $this->input->post('sub_kategori'),
						'name_jenis_sub_kategori' => $this->input->post('jenis_sub_kategori'),
						'image' => $_FILES['img']['name'],
					];

					$this->db->insert('tbl_produk', $data);
					$this->session->set_flashdata('message', 'swal("Sukses!", "Produk berhasil ditambah", "success");');
					redirect('admin/data_produk');

				}

			}
		}


		function hapus_produk(){

			$id = $this->input->post('id');

			$this->db->delete('tbl_produk',['id' => $id]);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil dihapus", "success");');
			redirect('admin/data_produk');
		}


		function data_kategori(){
			$data['kategori'] = $this->db->get('tbl_kategori')->result_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/data_kategori', $data);
			$this->load->view('template_admin/footer');
		}

		function tambah_kategori(){
			$kode = "kategori-".rand(1, 100000);
			$data = [
				'kode_kategori' => $kode,
				'name_kategori' => $this->input->post('nama_kategori'), 
			];	

			$this->db->insert('tbl_kategori', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Kategori berhasil ditambah", "success");');
			redirect('admin/data_kategori');

		}

		function hapus_kategori(){

			$id = $this->input->post('id');
			$this->db->delete('tbl_kategori',['id' => $id]);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil dihapus", "success");');
			redirect('admin/data_kategori');
		}


		function data_merek(){

			$data['merek'] = $this->db->get('tbl_merek')->result_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/data_merek', $data);
			$this->load->view('template_admin/footer');
		}

		function tambah_merek(){
			$kode = "merek-".rand(1, 100000);
			$data = [
				'kode_merek' => $kode,
				'name_merek' => $this->input->post('nama_merek'),
			];

			$this->db->insert('tbl_merek', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Merek berhasil ditambah", "success");');
			redirect('admin/data_merek');
		}

		function hapus_merek(){

			$id = $this->input->post('id');
			$this->db->delete('tbl_merek',['id' => $id]);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil dihapus", "success");');
			redirect('admin/data_merek');

		}

		function data_sub_kategori(){
			$data['sub_kategori'] = $this->db->get('tbl_sub_kategori')->result_array();
			$data['merek'] = $this->db->get('tbl_merek')->result_array();
			$data['kategori'] = $this->db->get('tbl_kategori')->result_array();


			$this->load->view('template_admin/header');
			$this->load->view('admin/data_sub_kategori', $data);
			$this->load->view('template_admin/footer');
		}

		function tambah_sub_kategori(){

			$arr = $this->input->post('merek[]');
			$merek = implode(", ",$arr);

			$data = [
				'kode_sub_kategori' => "subkategori-".rand(1, 100000),
				'name_sub_kategori' => $this->input->post('nama_sub_kategori'),
				'kode_kategori' => $this->input->post('kode_kategori'),
				'kode_merek' => $merek,
			];

			$this->db->insert('tbl_sub_kategori', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil tambah", "success");');
			redirect('admin/data_sub_kategori');

		}

		function edit_sub_kategori($id){
			$data['kategori'] = $this->db->get('tbl_kategori')->result_array();
			$data['merek'] = $this->db->get('tbl_merek')->result_array();
			$data['sub_kategori'] = $this->db->get_where('tbl_sub_kategori', ['id' => $id])->row_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/edit_sub_kategori', $data);
			$this->load->view('template_admin/footer');

		}

		function act_edit_sub_kategori(){

			$arr = $this->input->post('merek[]');
			$merek = implode(", ",$arr);

			$data = [
				
				'name_sub_kategori' => $this->input->post('nama_sub_kategori'),
				'kode_kategori' => $this->input->post('kode_kategori'),
				'kode_merek' => $merek,
			];

			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->update('tbl_sub_kategori',$data);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diubah", "success");');
			redirect('admin/data_sub_kategori');
		}

		function hapus_sub_kategori(){

			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_sub_kategori');
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil dihapus", "success");');
			redirect('admin/data_sub_kategori');
		}

		function data_jenis_sub_kategori(){
			$data['sub'] = $this->db->get('tbl_sub_kategori')->result_array();
			$data['jenis_subkategori'] = $this->db->get('tbl_jenis_sub_kategori')->result_array();

			$this->load->view('template_admin/header');
			$this->load->view('admin/data_jenis_sub_kategori', $data);
			$this->load->view('template_admin/footer');
		} 

		function tambah_jenis_sub_kategori(){
			$data = [
				'kode_jenis_sub_kategori' => "jenis-subkategori-".rand(1, 100000),
				'name_jenis_sub_kategori' => $this->input->post('nama_jenis_sub_kategori'),
				'kode_sub_kategori' => $this->input->post('kode_sub_kategori'),
			];

			$this->db->insert('tbl_jenis_sub_kategori', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');
			redirect('admin/data_jenis_sub_kategori');

		}

		function edit_jenis_sub_kategori($id){

			$data['jenis_subkategori'] = $this->db->get_where('tbl_jenis_sub_kategori',['id' => $id])->row_array();
			$data['sub'] = $this->db->get('tbl_sub_kategori')->result_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/edit_jenis_sub_kategori', $data);
			$this->load->view('template_admin/footer');


		}


		function act_edit_jenis_sub_kategori(){

			$id  = $this->input->post('id');
			$data = [
				'name_jenis_sub_kategori' => $this->input->post('nama_jenis_sub_kategori'),
				'kode_sub_kategori' => $this->input->post('kode_sub_kategori'),
			];

			$this->db->where('id', $id);
			$this->db->update('tbl_jenis_sub_kategori', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil diubah", "success");');
			redirect('admin/data_jenis_sub_kategori');
		}

		function hapus_jenis_sub_kategori(){

			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->delete('tbl_jenis_sub_kategori');
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil dihapus", "success");');
			redirect('admin/data_jenis_sub_kategori');
		}


		function data_admin(){
			$data['admin'] = $this->db->get('tbl_admin')->result_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/data_admin', $data);
			$this->load->view('template_admin/footer');
		}

		function tambah_admin(){

			$data = [
				'username' => $this->input->post('username'),
				'rule' => $this->input->post('rule'),
				'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
			];

			$this->db->insert('tbl_admin', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil ditambah", "success");');
			redirect('admin/data_admin');

		}

		function hapus_admin(){

			$id = $this->input->post('id');
			$this->db->delete('tbl_admin',['id' => $id]);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Data berhasil dihapus", "success");');
			redirect('admin/data_admin');

		}

		function edit_produk($id){
			$data['produk'] = $this->db->get_where('tbl_produk',['id' => $id])->row_array();
			$this->load->view('template_admin/header');
			$this->load->view('admin/edit_produk', $data);
			$this->load->view('template_admin/footer');
		}


		function act_edit_produk(){

			$id = $this->input->post('id');

			$config['upload_path']          = './berkas/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['min_size']             = 9000000;
			$config['remove_spaces']        = false;

			$img = $_FILES['img']['name'];

			if ($img == true) {

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('img')){
					$error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('message', 'swal("Opps", "Anda gagal upload gambar", "warning" );');
					redirect("admin/edit_produk/$id");

				}else{


				// $kode = "produk-".rand(1, 100000);

					$data = [
						'name_produk' => $this->input->post('nama_produk'),
						'ket_produk' => $this->input->post('ket_produk'),
						'kode_kategori' => $this->input->post('kode_kategori'),
						'kode_merk' => $this->input->post('kode_merek'),
						'image' => $_FILES['img']['name'],
					];

					$this->db->where('id',$this->input->post('id'));
					$this->db->update('tbl_produk', $data);
					$this->session->set_flashdata('message', 'swal("Sukses!", "Produk barhasil di ubah", "success");');
					redirect('admin/data_produk');

				}
			}else{

				$data = [
					'name_produk' => $this->input->post('nama_produk'),
					'ket_produk' => $this->input->post('ket_produk'),
					'kode_kategori' => $this->input->post('kode_kategori'),
					'kode_merk' => $this->input->post('kode_merek'),
				];

				$this->db->where('id',$this->input->post('id'));
				$this->db->update('tbl_produk', $data);
				$this->session->set_flashdata('message', 'swal("Sukses!", "Produk barhasil di ubah", "success");');
				redirect('admin/data_produk');

			}

		}

		function edit_kategori($id){

			$data['kate'] = $this->db->get_where('tbl_kategori',['id' => $id])->row_array();

			$this->load->view('template_admin/header');
			$this->load->view('admin/edit_kategori', $data);
			$this->load->view('template_admin/footer');
		}

		function act_edit_kategori(){

			$data = [
				'name_kategori' => $this->input->post('nama_kategori')
			];

			$id = $this->input->post('id');
			$this->db->where('id', $id);
			$this->db->update('tbl_kategori', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Kategori barhasil di ubah", "success");');
			redirect('admin/data_kategori');


		}

		function edit_merek($id){

			$data['merek'] = $this->db->get_where('tbl_merek',['id' => $id])->row_array();

			$this->load->view('template_admin/header');
			$this->load->view('admin/edit_merek', $data);
			$this->load->view('template_admin/footer');
		}

		function act_edit_merek(){

			$id = $this->input->post('id');
			$data = [
				'name_merek' => $this->input->post('nama_merek'),
			];

			$this->db->where('id', $id);
			$this->db->update('tbl_merek', $data);
			$this->session->set_flashdata('message', 'swal("Sukses!", "Merek barhasil di ubah", "success");');
			redirect('admin/data_merek');
		}
	}

	?>