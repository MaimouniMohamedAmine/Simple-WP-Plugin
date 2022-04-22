<?php
/**
 * Plugin Name: Settings Plugin
 * Author: Maimouni
 * Version: 1.0.0
 */
// $servername = "localhost";
// $username = "user";
// $password = "admin";

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

//Setting;s plugin
function settings_plugin()
{
    add_menu_page('Settings','Réglages','manage_options','Amine-admin-menu','réglages_admin_menu_main','dashicons-admin-generic',4);
    add_submenu_page('Amine-admin-menu','Archived Submissions','Sous-menu','manage_options','amine-admin-menu-sub-archive','amine_admin_menu_sub_archive');
}
add_action('admin_menu','settings_plugin');
 function réglages_admin_menu_main()
 {
   echo '<h1>Réglages</h1><b>Bienvenue sur la page des réglages! <br> Veuillez saisir votre texte:</b>
   <div class="wrap">
     <form action="" method="POST">';
         $content = '';//Should remain empty.
         $editor_id = 'id'; //I don't know why it works as it does not refer to anything according to wp_editor documentation. Is it the first instantiation??
         wp_editor($content, $editor_id);
   
   echo'<input id="submit_btn"type="submit" value="Envoyer">
      </form>
   </div>';
 }
 if (isset($_POST['submit_btn']))  
 {
   


 }
 function amine_admin_menu_sub_archive()
{
    echo'<div class="wrap"><b>Ceci est une page Sous-menu</b> </div>';
}
   ?>
   <style>
      #submit_btn
      {  
         padding:7px 7px 7px 7px;
         border:none;
         border-radius:10px;
         text-decoration: none;
         background-color:#0d6efd;
         color:#fff;
      }
   </style>
