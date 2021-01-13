<?php
/**
 * Plugin Name: ContactForm
*/

function contact_form_custom(){

    $content = '';
    
    $content .='<h2>Formulaire de contact</h2>';
    $content .='<form method="post" action"http://localhost/wpplugin/wpcontactform/merci/">';
    $content .='<label for="your_name">Nom</label>';
    $content .='<br/><input type="text" name="your_name" class="form-control" placeholder="Entrez votre nom" />';
    $content .='<br/><label for="your_email">Email</label>';
    $content .='<br/><input type="email" name="your_email" class="form-control" placeholder="Entrez votre email" />';
    $content .='<br/><label for="your_comments">Questions ou Commentaires</label>';
    $content .='<br/><textarea name="your_comments" class="form-control" placeholder="Entrez vos questions ou commentaires">Questions ou commentaires</textarea>';
    $content .='<br/><input type="submit" name="contact_form_submit" class="btn btn-md btn-primary" value="Envoyer"/>';
    $content .='</form>';
    
    return $content;
}

add_shortcode('contact_form','contact_form_custom');

function example_form_capture(){

if(isset($_POST['contact_form_submit'])){

    echo "<pre>";print_r($_POST);echo"</pre>";   
    //$name = sanitize_text_field($_POST['your_name']);
    //$email = sanitize_text_field($_POST['your_email']);
    //$comments = sanitize_text_field($_POST['your_comments']);

    //$to = 'hantamp@gmail.com';
    //$subject = 'Test pour submission';
    //$message = ''.$name.' - '.$email.' - '.$comments;

    //wp_mail($to,$subject,$subject);
}
}
add_action('wp_head','example_form_capture');


?>