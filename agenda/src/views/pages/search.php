<?=$render('header')?>

<section class="container main">
    <?=$render('sidebar', ['activeMenu' =>'search']);?>

    <section class="feed">

        <h1>Você pesquisou por: <?=$searchTerm;?></h1>

    </section>
</section>
<?=$render('footer');?>