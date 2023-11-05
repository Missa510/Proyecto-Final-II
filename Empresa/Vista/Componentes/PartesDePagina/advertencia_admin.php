<?php require_once("Vista\Componentes\PartesDePagina\hd.php"); ?>
<?php require_once("Vista/Componentes/PartesDePagina/nav_users.php"); ?>
<main>
    <div class="main-puro">
        <h1 class="display-1" id="titulo">Confirmación de eliminación</h1>
        <p class="text-danger fs-4">¿Estás seguro de que deseas eliminar este usuario?</p>
        <form class="row p-3" action="?control=eliminar&&funcion=confirmacion&&id=<?= $ID; ?>&&type=Admin" method="post">
            <input type="submit" class="btn-rusure-aceptar col" value="Acpetar" name="Acpetar">
            <input type="submit" class="btn-rusure-cancelar col" value="Cancelar" name="Cancelar">
        </form>
        <br>
        <p class="fs-5">
            This blog post shows a few different types of content that's supported and styled with Bootstrap.
            Basic typography, lists, tables, images, code, and more are all supported as expected.

            This is some additional paragraph placeholder content. It has been written to fill the
            available space and show how a longer snippet of text affects the surrounding content. We'll repeat it
            often to keep the demonstration flowing, so be on the lookout for this exact same string of text.
        </p>
        <h1 class="display-4">Blockquotes</h1>
        <p class="fs-5">This is an example blockquote in action:</p>

        <h1 class="fs-2 fw-normal">Quoted text goes here.</h1>

        <p class="fs-5">
            This is some additional paragraph placeholder content. It has been written to fill the available space and
            show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the
            demonstration flowing, so be on the lookout for this exact same string of text.
        </p>
        <h1 class="display-4">Example lists</h1>
        <p class="fs-5">
            This is some additional paragraph placeholder content. It's a slightly shorter version of the
            other highly repetitive body text used throughout.
            <br><br>
            This is an example unordered list:
        <ul>
            <li>First list item</li>
            <li>Second list item with a longer description</li>
            <li>Third list item to close it out</li>
        </ul>
        And this is an ordered list:
        <ol>
            <li>First list item</li>
            <li>Second list item with a longer description</li>
            <li>Third list item to close it out</li>
        </ol>
        And this is a definition list:<br><br>
        <dl>
            <dt>HyperText Markup Language (HTML)</dt>
            <dd>The language used to describe and define the content of a Web page.</dd>
            <dt>Cascading Style Sheets (CSS)</dt>
            <dd>Used to describe the appearance of Web content.</dd>
            <dt>JavaScript (JS)</dt>
            <dd>The programming language used to build advanced Web sites and applications.</dd>
        </dl>
        </p>
    </div>
</main>
<?php require_once("Vista/Componentes/PartesDePagina/foot.php"); ?>