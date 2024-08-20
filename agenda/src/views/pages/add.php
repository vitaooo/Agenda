<?php $render('header');
$today = new DateTime(); ?>

<h2>Adicionar Novo Usuário</h2>


<form method="POST" action="<?=$base;?>/novo">
    <label>
        Nome:<br/>
        <input type="text" name="nome" />
    </label><br/><br/>

    <label>
        E-mail:<br/>
        <input type="email" name="email" />
    </label><br/><br/>

    <label>
        Telefone:<br/>
        <input type="int-number" name="telefone" />
    </label><br/><br/>

    <label>
        Descrição:<br/>
        <input type="text" name="descrição" />
    </label><br/><br/>
    
    <input type="submit" value="Adicionar" />
</form>

<?php $render('footer'); ?>