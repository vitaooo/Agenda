<?php $render('header');?>
<br/>
<div>
  <a href="<?=$base;?>/novo">Novo Usuário</a>
</div>
<br/><br/>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Discrição</th>
        <th>Data de criação / Data de atualização</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($notas as $nota):?>
      <tr>
        <td><?=$nota['id'];?></td>
        <td><?=$nota['nome'];?></td>
        <td><?=$nota['email'];?></td>
        <td><?=$nota['telefone'];?></td>
        <td><?=$nota['descrição'];?></td>
        <td><?=$nota['data_criacao'].'  //  '.$nota['data_update']?></td>
        <td>
            <a href="<?=$base;?>/usuario/<?=$nota['id'];?>/editar">
              <img width="40" src="<?=$base;?>/assets/imagens/doc.png" alt="" />
            </a>
            <a href="<?=$base;?>/usuario/<?=$nota['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">
              <img width="40" src="<?=$base;?>/assets/imagens/lixs.png" alt="" />
            </a>
        </td>
      </tr>
      <?php endforeach; ?>
</table>

<?php $render('footer'); ?>