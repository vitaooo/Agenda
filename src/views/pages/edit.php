<?php $render('header'); ?>

<h2>Atualizar Usuário</h2>

<form method="POST" action="<?=$base;?>/usuario/<?=$nota['id'];?>/editar">
    <label>
        Nome:<br/>
        <input type="text" name="nome" value="<?=$nota['nome'];?>" />
    </label><br/><br/>

    <label>
        E-mail:<br/>
        <input type="email" name="email" value="<?=$nota['email'];?>" />
    </label><br/><br/>

    <label>
        Telefone:<br/>
        <input type="int-number" name="telefone" value="<?=$nota['telefone'];?>" />
    </label><br/><br/>

    <label>
        Descrição:<br/>
        <input type="text" name="descrição" value="<?=$nota['descrição'];?>" />
    </label><br/><br/>

    <input type="submit" value="Salvar" />
</form>

<?php $render('footer'); ?>