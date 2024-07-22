<?php
include_once ("templates/header.php");

if (isset($_GET["id"])) {
    $postId = $_GET["id"];
    $currentPost;

    foreach ($posts as $post) {
        if ($post["id"] == $postId) {
            $currentPost = $post;
        }
    }
}
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost["title"] ?></h1>
        <p id="post-description"><?= $currentPost["description"] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost["img"] ?>" alt="<?= $currentPost["title"] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor odio ipsa nemo,
            exercitationem distinctio alias commodi soluta asperiores officiis. Eveniet reprehenderit et nobis aliquid
            magnam, laboriosam minus assumenda alias sed.
            Eum, ipsa sint excepturi, asperiores ratione enim deleniti quod fuga neque est exercitationem quasi quisquam
            quia minima rem saepe. Error nobis adipisci nesciunt debitis impedit hic nulla similique accusantium
            maiores!
            Repudiandae sint doloremque corrupti? Vitae nihil sequi blanditiis quo debitis quam culpa nam ex possimus
            facere accusamus laboriosam pariatur, ipsum expedita consequuntur odit ad, in praesentium cupiditate
            recusandae cum laborum.
            Neque laboriosam sit aut unde commodi omnis voluptas porro assumenda sunt, consequatur facilis? Distinctio
            nihil repudiandae atque libero suscipit quibusdam unde? Minus voluptatum consequuntur molestias, eum id quam
            optio veritatis.
            Quaerat dolores quasi, culpa rerum ad pariatur, veritatis adipisci numquam totam officia delectus cupiditate
            facere quibusdam. Iure nulla sit voluptatem ducimus, nisi amet corporis eos illo vel qui eius soluta?
        </p>
        <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor odio ipsa nemo,
            exercitationem distinctio alias commodi soluta asperiores officiis. Eveniet reprehenderit et nobis aliquid
            magnam, laboriosam minus assumenda alias sed.
            Eum, ipsa sint excepturi, asperiores ratione enim deleniti quod fuga neque est exercitationem quasi quisquam
            quia minima rem saepe. Error nobis adipisci nesciunt debitis impedit hic nulla similique accusantium
            maiores!
            Repudiandae sint doloremque corrupti? Vitae nihil sequi blanditiis quo debitis quam culpa nam ex possimus
            facere accusamus laboriosam pariatur, ipsum expedita consequuntur odit ad, in praesentium cupiditate
            recusandae cum laborum.
            Neque laboriosam sit aut unde commodi omnis voluptas porro assumenda sunt, consequatur facilis? Distinctio
            nihil repudiandae atque libero suscipit quibusdam unde? Minus voluptatum consequuntur molestias, eum id quam
            optio veritatis.
            Quaerat dolores quasi, culpa rerum ad pariatur, veritatis adipisci numquam totam officia delectus cupiditate
            facere quibusdam. Iure nulla sit voluptatem ducimus, nisi amet corporis eos illo vel qui eius soluta?
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost["tags"] as $tag): ?>
                <li> <a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category): ?>
                <li> <a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>
<?php
include_once ("templates/footer.php");
?>