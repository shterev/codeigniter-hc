<h1>Create an account</h1>


<?php 
// <form method="post" action="create_user">

    echo form_open('application/create_user');
    
    echo form_label('First name:','first_name').'<br/>';
    echo form_input('first_name', set_value('first_name')).'<br/>';
    
    echo form_label('Last name:','last_name').'<br/>';
    echo form_input('last_name', set_value('last_name')).'<br/>';
    
    echo form_label('E-mail:').'<br/>';
    echo form_input('email', set_value('email')).'<br/>';
    
    echo '<p><hr/></p>';
    
    
    echo form_label('Username:').'<br/>';
    echo form_input('username', set_value('username')).'<br/>';
    
    echo form_label('Password:').'<br/>';
     echo form_password('password').'<br/>';
    
    echo form_label('Confirm password:').'<br/>';
    echo form_password('password_confirm').'<br/>';
    
    echo form_submit('Submit', 'Create Account');
    
    echo form_close();

    
?>
<?php echo  validation_errors('<p class="error">'); ?>