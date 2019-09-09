<?php

require_once __DIR__ . '/includes/classes/Publications.php';

$title = "Publications Using ECIS - Applied BioPhysics";
$metaDesc = "ECIS systems have been used in over 700 publications world-wide with a variety of different
applications.";

$publications = new Publications();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo $metaDesc; ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,600,700,900" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="public/css/bootstrap.css" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/style.css">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="public/img/favicon.ico">

    <!-- link/script for dynamic publications page -->
    <link rel="stylesheet" type="text/css" href="/public/css/datatables.min.css" />
    <!-- publications.css after dataTables css to override defaults -->
    <link rel="stylesheet" type="text/css" href="public/css/dynamic_publications.css" />
    <!--    <link rel="stylesheet" type="text/css" href="./css/magnific-popup.css" />-->

    <title><?php echo $title; ?></title>
</head>

<body class="d-flex flex-column">

    <?php include_once "includes/navbar.php"; ?>
    <?php include_once "includes/logo-sm.php"; ?>

    <section id="publicationsHeading" class="text-center text-md-left">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mb-0">Publications</h1>
                    <hr class="mt-0">
                </div>
            </div>
        </div>
    </section><!-- /publicationsHeading -->

    <section id="publicationsContent" class="py-4 mb-5">
        <div class="container text-center text-md-left">

            <div class="row">

                <div class="col-md-3">
                    <div class="list-group mb-5" id="publication-labels" role="tablist">
                        <?php foreach ($publications->getUniqueLabels() as $label) : ?>

                        <a class="list-group-item list-group-item-action" href="#" role="tab"
                            data-filter="<?= $label ?>" data-scroll-ignore><?= $label ?></a>

                        <?php endforeach; ?>

                        <!--<a class="list-group-item list-group-item-action submitPubBtn" href="#" role="tab"
                       data-scroll-ignore>
                        Submit A Publication
                    </a>-->

                    </div>
                </div>

                <div class="col-md-9">

                    <h2>Recent Publications
                        <small id="labels-filter-message" class="text-muted"></small>
                    </h2>

                    <hr>

                    <table id="publications-table" class="publications-table table table-hover" hidden>

                        <thead hidden>
                            <th>Reference</th>
                            <th>Year</th>
                            <th>Labels</th>
                        </thead>

                        <tbody>

                            <?php /** @var Publication $publication */
                    foreach ($publications->publications as $publication) : ?>

                            <tr class="publication" data-abstract="<?= $publication->getAbstract() ?>">
                                <td>
                                    <p>
                                        <strong
                                            class="publication-title"><?= $publication->getTitle() ?></strong>.,&nbsp;
                                        <small>
                                            <span
                                                class="publication-authors"><?= implode(',', $publication->getAuthors()) ?></span>&nbsp;
                                            <span
                                                class="publication-year">(<?= $publication->getPublishedDates() ?>)</span>.&nbsp;
                                            <?php if (!empty($publication->getPublishedIn())) : ?>
                                            <em
                                                class="publication-published-in"><?= $publication->getPublishedIn() ?></em>&nbsp;
                                            <?php endif; ?>
                                            <?php if (!empty($publication->getPublishedVolume())) : ?>
                                            <span
                                                class="publication-volume"><?= $publication->getPublishedVolume() ?></span>
                                            <?php endif; ?>
                                            <?php if (!empty($publication->getPublishedIssue())) : ?>
                                            <span
                                                class="publication-issue">(<?= $publication->getPublishedIssue() ?>)</span>&nbsp;:&nbsp;
                                            <?php endif; ?>
                                            <?php if (!empty($publication->getPublishedPages())) : ?>
                                            <span
                                                class="publication-pages"><?= $publication->getPublishedPages() ?></span>
                                            <?php endif; ?>
                                        </small>
                                        <?php if (!empty($publication->getElectronicResourceNum())) : ?>
                                        <a class="publication-doi" href="<?= $publication->getDoiUrl() ?>"
                                            target="_blank">
                                            doi:<?= $publication->getElectronicResourceNum() ?>
                                        </a>
                                        <?php endif; ?>
                                        <a href="" class="publication-abstract link text-dark" data-sroll-ignore
                                            data-toggle="modal" data-target="#publications-modal">[Abstract]</a>
                                    </p>
                                    <?php if (!empty($publication->getPublicationLabels())) : ?>
                                    <div class="publication-labels text-right">
                                        <?php foreach ($publication->getPublicationLabels() as $label) : ?>
                                        <span class="badge badge-primary"><?= $label ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php endif; ?>
                                </td>
                                <td><?= $publication->getPublishedDates() ?></td>
                                <td><?= $publication->getDelimitedPublicationLabels() ?></td>
                            </tr>

                            <?php endforeach; ?>

                        </tbody>

                    </table><!-- /tab-pane -->

                </div><!-- /col-md-9 -->

            </div><!-- /row -->

        </div><!-- /container -->

        <div id="publications-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <button type="button" class="close text-right mr-1" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body"></div>
                </div>
            </div>
        </div>

        <!-- Underscore template for publication modal dialog -->
        <script type="text/x-underscore" id='publication-details-template'>
            <div class="publication-item-detail">
        <dl class="publication-item-description-list">
          <dt>Title</dt>
          <dd class="publication-title"><%= title %></dd>

          <dt>Authors</dt>
          <dd class="publication-authors"><%= authors %></dd>

          <dt>Published In</dt>
          <dd class="publication-title"><i><%= publishedIn %></i></dd>

          <dt>Volume</dt>
          <dd class="publication-published-volume"><%= volume %></dd>

          <dt>Issue</dt>
          <dd class="publication-published-issue"><%= issue %></dd>

          <dt>Date</dt>
          <dd class="publication-published-date"><%= date %></dd>

          <dt>Pages</dt>
          <dd class="publication-published-pages"><%= pages %></dd>

          <dt>DOI</dt>
          <dd><%= doi %></dd>

          <dt>Abstract</dt>
          <dd><%= abstract %></dd>

          <dt>Labels</dt>
          <dd><%= labels %></dd>
        </dl>
      </div>

    </script>

    </section><!-- /publicationsContent -->

    <?php include_once "includes/footer.php"; ?>

    <!-- Scroll to top -->
    <button class="btn btn-outline-dark" id="scrollBtn"><i class="fas fa-angle-up fa-2x"></i></button>

    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/util.js"></script>
    <script src="public/js/smooth-scroll.min.js"></script>
    <script src="public/js/scripts.js"></script>

    <script type="text/javascript" src="/public/js/datatables.min.js"></script>
    <script type="text/javascript" src="public/js/underscore-min.js"></script>

</body>

</html>