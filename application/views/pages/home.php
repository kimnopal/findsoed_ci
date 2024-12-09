<style>
    .card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-img-top {
        object-fit: cover;
        height: 200px;
    }

    .card-body {
        display: flex;
        flex-direction: column;
    }
</style>

<h2><?= $title ?></h2>
<div class="row row-cols-1 row-cols-md-4 g-4">
    <?php foreach ($posts as $post) : ?>
        <div class="col">
            <div class="card h-100" style="width: 100%;">
                <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['photo']; ?>" class="card-img-top" alt="Image of <?php echo $post['title']; ?>">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?php echo $post['title']; ?></h5>
                    <span class="badge text-bg-primary mb-2" style="width: fit-content;"><?php echo $post['name']; ?></span>
                    <p>Diposting pada: <?php echo $post['created_at']; ?></p>
                    <p class="card-text"><?php echo word_limiter($post['description'], 60); ?></p>
                    <a href="<?php echo site_url('/posts/' . $post['slug']); ?>" class="btn btn-primary mt-auto">Detail</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>