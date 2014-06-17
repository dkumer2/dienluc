<div class="form-box" id="login-box">
    <div class="header">Sign In</div>
    <?php
        echo $this->Form->create($model, array(
            'action' => 'login')); 
    ?>
        <div class="body bg-gray">
            <?php $authFlash = $this->Session->flash('auth') ?>
            <?php if (!empty($authFlash)): ?>
                <?php echo $authFlash;?>
            <?php endif; ?>
            
            <div class="form-group">
                <?php echo $this->Form->input('email', array(
                    'label' => false, 'wrapInput' => false,
                    'placeholder' => __d('users', 'Email'),
                    'class' => 'form-control'
                )); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input('password', array(
                    'label' => false, 'wrapInput' => false,
                    'placeholder' => __d('users', 'Password'),
                    'class' => 'form-control'
                )); ?>
            </div>          
            <div class="form-group" style="margin-left:25px">
                <?php echo $this->Form->input('remember_me', array('type' => 'checkbox', 'label' =>  __d('users', 'Remember Me'))); ?>
            </div>
        </div>
        <div class="footer">                                                               
            <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
            
            <?php echo '<p>' . $this->Html->link(__d('users', 'I forgot my password'), array('action' => 'reset_password')) . '</p>'; ?>
            
        </div>
    <?php echo $this->Form->end(); ?>

</div>