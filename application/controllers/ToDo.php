<?php
/** @property TodoModel $TodoModel */
if(!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of todoController
 *
 * @author adminSio
 */
class Todo extends CI_controller{
    public function __construct(){
        parent::__construct();
        //Instanciation du modèle pour qu'il devienne disponible dans toutes les
        //méthodes du contrôleur.
        //todoModel est la donnée membre de type TodoModem.
        $this->load->model('todoModel');
        $this->load->helper('url','form');
        $this->load->library('form_validation');
    }
    public function index(){
        //1.Charger les données
        $all_todos=$this->todoModel->get_all();
        //2.Préparer les données pour la vue
        $data['title']="Tâches";
        $data['todos']=$all_todos;
        //3.Générer la vue
        $this->load->view('TodoIndex',$data);
    }
    public function fait($id){
        //1.Préparer les données pour la base de données au travers d'un
        //tableau associatif qui contient tous les attributs du update.
        $params=array('completed'=>1);
        //2.Appeler la méthode de mise à jour d'un enregistrement au travers
        //du modèle.
        $this->todoModel->update($id,$params);
        //3.Rediriger vers la page todo/TodoIndex
        redirect(base_url('Todo/Index'));
    }
    
    public function modifier(){
        $this->form_validation->set_rules('id','id','required|numeric');
        $this->form_validation->set_rules('ordre','ordre','required|numeric');
        $this->form_validation->set_rules('task','tâche','required|max_length[66]');
        
        if($this->form_validation->run() == TRUE){
            $task=$this->input->post('task');
            $ordre=$this->input->post('ordre');
            $id=$this->input->post('id');
            
            $params = array('id'=>$id, 'task'=>$task,'ordre'=>$ordre);
            $this->todoModel->update($id,$params);
            redirect(base_url('Todo/Index'));
        }
        else{
            $this->load->view('todoModifier');
        }
    }
    public function supprimer(){
        $this->form_validation->set_rules('id','id','required|numeric');
        if($this->form_validation->run() == TRUE){
            $id=$this->input->post('id');
            $params = array('id'=>$id);
            $this->todoModel->delete($id,$params);
            redirect(base_url('Todo/Index'));
        }
        else{
            $this->load->view('todoSupprimer');
        }
    }
    
    public function add(){
        //définir les règles de validation
        $this->form_validation->set_rules('ordre','ordre','required|numeric');
        $this->form_validation->set_rules('task','tâche','required|max_length[66]');
        
        if($this->form_validation->run() == TRUE){
            //si validation est correcte
            //je créer mon tableau associatif
            //appel de méthode insert sur TodoModel
            $task=$this->input->post('task');
            $ordre=$this->input->post('ordre');
            $params = array('task'=>$task,'ordre'=>$ordre,'completed'=>0);
            $this->todoModel->add($params);
            redirect(base_url('Todo/Index'));
        }
        else{
            $this->load->view('todoAdd');
        }
    }
    public function reordonner(){
        $all_todos=$this->todoModel->get_all();
        $data['todos']=$all_todos;
        $this->form_validation->set_rules('ordre','ordre','required|numeric');
        
        if($this->form_validation->run() == TRUE){
            $ordre=$this->input->post('ordre');
            
            foreach ($todos as $todo){
                $params = array('id'=>$id,'ordre'=>$ordre);
                $this->todoModel->update($params);
            }
            redirect(base_url('Todo/Index'));
        }
        else{
            $this->load->view('todoReordonner',$data);
        }
    }
}
