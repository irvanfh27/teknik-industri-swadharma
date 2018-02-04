<?php

    /******************************************
    *      Codeigniter 3 Simple Login         *
    *   Developer  :  rudiliucs1@gmail.com    *
    *        Copyright © 2017 Rudi Liu        *
    *******************************************/

    if (!defined('BASEPATH')) {
        exit('No direct script access allowed');
    }

    class Dashboard extends CI_Controller {

        public function __Construct() {
            parent::__Construct();
            if(!$this->session->userdata('logged_in')) {
                redirect(base_url());
            }
            $this->load->library('grocery_CRUD');
            $this->crud = new grocery_CRUD();
        }

        public function index() {
            $this->load->view('frame/header_view');
            $this->load->view('frame/sidebar_nav_view');
            $this->load->view('dashboard');
            $this->load->view('frame/footer_view');
        }

        public function settings()
        {
            $crud = new grocery_CRUD();

            $crud->set_table('home_setting');
            $crud->set_subject('Settings');
            $crud->set_field_upload('file_url','assets/uploads/files');
            $crud->unset_print();
            $crud->unset_export();

            $output = $crud->render();

            $data['title'] = "Data Home Setting";


            $this->load->view('frame/header_view');
            $this->load->view('frame/sidebar_nav_view');
            $this->load->view('frame/title_table', $data);
            $this->load->view('admin/template_crud',(array)$output);
        }

        public function gallery_kegiatan()
        {
            $crud = new grocery_CRUD();

            $crud->set_table('gallery_kegiatan');
            $crud->display_as('file_url','Gambar');
            $crud->set_subject('Gallery Kegiatan');
            $crud->set_field_upload('file_url','assets/uploads/files');
            $crud->unset_print();
            $crud->unset_export();
            $crud->callback_after_delete(array($this,'user_after_delete'));

            $output = $crud->render();

            $data['title'] = "Gallery Kegiatan";

            $this->load->view('frame/header_view');
            $this->load->view('frame/sidebar_nav_view');
            $this->load->view('frame/title_table', $data);
            $this->load->view('admin/template_crud',(array)$output);
        }

        public function user_after_delete($primary_key)
        {

            return $this->db->insert('user_logs',array('id_was_deleted' => $primary_key,'role'=> $this->session->userdata('role'),'email'=> $this->session->userdata('email'), 'action'=>'delete', 'updated' => date('Y-m-d H:i:s')));


        }


        public function gallery_kampus()
        {
            $crud = new grocery_CRUD();

            $crud->set_table('gallery_kampus');
            $crud->display_as('file_url','Gambar');
            $crud->set_subject('Gallery Kampus');
            $crud->set_field_upload('file_url','assets/uploads/files');
            $crud->unset_print();
            $crud->unset_export();

            $output = $crud->render();

            $data['title'] = "Gallery Kampus";


            $this->load->view('frame/header_view');
            $this->load->view('frame/sidebar_nav_view');
            $this->load->view('frame/title_table', $data);
            $this->load->view('admin/template_crud',(array)$output);
        }

        public function struktur_organisasi()
        {
            $crud = new grocery_CRUD();

            $crud->set_table('struktur_organisasi');
            $crud->display_as('file_url','Foto');
            $crud->set_subject('Struktur Organisasi');
            $crud->set_field_upload('file_url','assets/uploads/files');
            $crud->unset_print();
            $crud->unset_export();


            $output = $crud->render();
            $data['title'] = "Sturktur Organisasi";


            $this->load->view('frame/header_view');
            $this->load->view('frame/sidebar_nav_view');
            $this->load->view('frame/title_table', $data);
            $this->load->view('admin/template_crud',(array)$output);
        }


        public function teknik_industri()
        {
            $crud = new grocery_CRUD();

            $crud->set_table('teknik_industri');
            $crud->display_as('sejarah_ti','Sejarah Teknik Industri')

            ->display_as('keunggulan_ti','Keunggulan D3 Teknik Industri');
            $crud->set_subject('Keunggulan Dan Sejarah Teknik Industri');

            $crud->unset_print();
            $crud->unset_export();

            $output = $crud->render();
            $data['title'] = "Keunggulan Dan Sejarah Teknik Industri";


            $this->load->view('frame/header_view');
            $this->load->view('frame/sidebar_nav_view');
            $this->load->view('frame/title_table', $data);
            $this->load->view('admin/template_crud',(array)$output);
        }

        public function alumni()
        {
            $crud = new grocery_CRUD();

            $crud->set_table('alumni');
            $crud->display_as('nama','Nama Alumni')->display_as('file_url','Foto Alumni')->display_as('tahun','Tahun Lulus');
            $crud->set_subject('Alumni');
            $crud->set_field_upload('file_url','assets/uploads/files');
            $crud->unset_print();
            $crud->unset_export();

            $output = $crud->render();
            $data['title'] = "Keunggulan Dan Sejarah Teknik Industri";


            $this->load->view('frame/header_view');
            $this->load->view('frame/sidebar_nav_view');
            $this->load->view('frame/title_table', $data);
            $this->load->view('admin/template_crud',(array)$output);
        }



        public function message()
        {
            $crud = new grocery_CRUD();

            $crud->set_table('contactus');
            $crud->set_subject('Message');

            $crud->unset_print();
            $crud->unset_export();
            $crud->unset_add();

            $output = $crud->render();
            $data['title'] = "Message";


            $this->load->view('frame/header_view');
            $this->load->view('frame/sidebar_nav_view');
            $this->load->view('frame/title_table', $data);
            $this->load->view('admin/template_crud',(array)$output);
        }

        public function programkerja()
        {
            $crud = new grocery_CRUD();

            $crud->set_table('program_kerja');
            $crud->set_subject('Program Kerja');
            $crud->set_field_upload('file','assets/uploads/files');
            $crud->change_field_type('create_at', 'invisible')->change_field_type('slug','invisible');
            $crud->unset_columns('slug');
            $crud->unset_print();
            $crud->unset_export();

            $crud->callback_before_insert(array($this,'before_insert'));

            $output = $crud->render();
            $data['title'] = "Program Kerja";


            $this->load->view('frame/header_view');
            $this->load->view('frame/sidebar_nav_view');
            $this->load->view('frame/title_table', $data);
            $this->load->view('admin/template_crud',(array)$output);
        }

        function before_insert($post_array, $primary_key = null)
        {
            $slug = url_title($post_array['judul']);

            $post_array['slug'] = $slug;
    

            return $post_array;

        }

    }

    /* End of file */
