<!-- <nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
        <li class="page-item">
            <a href="#" class="page-link" aria-label="Previous">
                <span aria-hidden="true">
                    <span class="lnr lnr-chevron-left"></span>
                </span>
            </a>
        </li>
        <li class="page-item active"><a href="#" class="page-link">01</a></li>
        <li class="page-item"><a href="#" class="page-link">02</a></li>
        <li class="page-item"><a href="#" class="page-link">03</a></li>
        <li class="page-item"><a href="#" class="page-link">04</a></li>
        <li class="page-item"><a href="#" class="page-link">09</a></li>
        <li class="page-item">
            <a href="#" class="page-link" aria-label="Next">
                <span aria-hidden="true">
                    <span class="lnr lnr-chevron-right"></span>
                </span>
            </a>
        </li>
    </ul>
</nav> -->

<?php $pager->setSurroundCount(2) ?>

<nav aria-label="Page navigation" class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
        <?php if ($pager->hasPrevious()) : ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                    <span aria-hidden="true" class="lnr lnr-chevron-left"><?= lang('Pager.first') ?></span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    <span aria-hidden="true" class="lnr lnr-chevron-left"><?= lang('Pager.previous') ?></span>
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
            <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                <a class="page-link" href=" <?= $link['uri'] ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNext()) : ?>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                    <span aria-hidden="true" class="lnr lnr-chevron-right"><?= lang('Pager.next') ?></span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                    <span aria-hidden="true" class="lnr lnr-chevron-right"><?= lang('Pager.last') ?></span>
                </a>
            </li>
        <?php endif ?>
    </ul>
</nav>