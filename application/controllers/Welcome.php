<?php
// Sécurité pour empêcher l acces direct au script
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
     
    // Page d'accueil
    public function home()
    {
        $this->load->view('header');
        $this->load->view('home');
        $requete = $this->db->query('SELECT * FROM homme')->result();
        $model["liste_produits"] = $requete;
        $this->load->view('table', $model);
        $requete = $this->db->query('SELECT * FROM femme')->result();
        $model["liste_produits"] = $requete;
        $this->load->view('table2', $model);
        $requete = $this->db->query('SELECT * FROM enfant')->result();
        $model["liste_produits"] = $requete;
        $this->load->view('table3', $model);
        $this->load->view('footer');
    }

   // Page enregistrement
   public function register()
   {
    if ($this->input->post()) 
    { // 2ème appel de la page: traitement du formulaire
        $data = $this->input->post();

        // Si les trois champs sont bien renseignées
        if(!empty($data['email']) && !empty($data['password']) && !empty($data['confirm_password']))
        {
            //Si le mot de passe et la confirmation ne sont pas identiques
            if ($data['password'] != $data['confirm_password'])
                $model['message'] = 'Confirmez un mot de passe identique';
            //Si le mot de passe et la confirmation sont identiques
            else
            {  
                // On encrypte le mot de passe pour l'enregistrer dans la base
                $data['password'] = password_hash($data['password'],PASSWORD_BCRYPT);

                // Insertion dans la base
                $this->db->set('email', $data['email']);
                $this->db->set('password', $data['password']);
                $this->db->insert('users');

                // On redirige sur la page home avec un confirmation de création de compte
                $model['session']  = 'Le compte '.$data['email'].' a bien été créé';
                $this->load->view('header');
                $this->load->view('home');
                $requete = $this->db->query('SELECT * FROM homme')->result();
                $model["liste_produits"] = $requete;
                $this->load->view('table', $model);
                $requete = $this->db->query('SELECT * FROM femme')->result();
                $model["liste_produits"] = $requete;
                $this->load->view('table2', $model);
                $requete = $this->db->query('SELECT * FROM enfant')->result();
                $model["liste_produits"] = $requete;
                $this->load->view('table3', $model);
                $this->load->view('footer');
            }
        }
        // Sinon, il manque un des trois champs
        else
        {
            $model['message'] = 'Veuillez renseigner les trois champs';
        }

        // Si il y a eu un problème on affiche le message
        if(!empty($model['message'])) {
            $this->load->view('header');
            $this->load->view('register',$model);
            $this->load->view('footer');
        }
    }
    else { // 1er appel de la page: affichage du formulaire
        $this->load->view('header');
        $this->load->view('register');
        $this->load->view('footer');
    }
   }

   // Page de connexion
   public function login($model = null)
   {
    if ($this->input->post()) 
    { // 2ème appel de la page: traitement du formulaire
        $data = $this->input->post();

        // Si les deux champs sont bien renseignées
        if(!empty($data['email']) && !empty($data['password']))
        {
            // On vérifie les informations en base
            $this->db->where('email', $data['email']);
            $query = $this->db->get('users'); // on selectionne l'utilisateur dans la table

            // Affiche un message si l'email n'existe pas
            if ($query->num_rows() == 0) {
                 $model['message']  = 'Le compte '.$data['email']. ' n\'existe pas';
            }        

            // On boucle sur les résultat (Même s'il ne doit y en avoir qu'un)
            foreach ($query->result() as $row)
            {
                // Si le mot de passe est correct
                if (password_verify($data['password'],$row->password))
                {
                    // On redirige sur la page home avec un confirmation de création de compte
                    $model['session']  = 'Vous êtes bien connecté sous le mail '.$data['email'];
                    
                    // On remplis la session
                    $this->session->set_userdata('email', $data['email']);
                    $this->session->set_userdata('connected', true);
                    $this->load->view('header');
                    $this->load->view('home');
                    $requete = $this->db->query('SELECT * FROM homme')->result();
                    $model["liste_produits"] = $requete;
                    $this->load->view('table', $model);
                    $requete = $this->db->query('SELECT * FROM femme')->result();
                    $model["liste_produits"] = $requete;
                    $this->load->view('table2', $model);
                    $requete = $this->db->query('SELECT * FROM enfant')->result();
                    $model["liste_produits"] = $requete;
                    $this->load->view('table3', $model);
                    $this->load->view('footer');
                }
                // Sinon
                else
                {
                    $model['message']  = 'Le mot de passe est incorrect';
                }
            }
        }
        // Il manque un champ
        else
        {
            $model['message'] = 'Veuillez renseigner tous les champs';
        }

        // Si il y a eu un problème on affiche le message
        if(!empty($model['message'])) {
            $this->load->view('header');
            $this->load->view('login',$model);
            $this->load->view('footer');
        }
    }
    else { // 1er appel de la page: affichage du formulaire
        $this->load->view('header');
        $this->load->view('login',$model);
        $this->load->view('footer');
    }
   }

   //Page de déconnexion
   public function logout()
   {
    // On deconnecte l'utilisateur
    if ($this->session->userdata('connected')) {
        $this->session->set_userdata('connected', false);
        $this->session->set_userdata('email',null);
    }
    redirect(site_url("welcome/login"));
   }

}// Fin du controleur
?>