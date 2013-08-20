<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include DOCROOT . '/includes/header.php'; ?>
  </head>
  <body>
    <div class="bs-header" id="content">
      <div class="container">
        <h1>{{ page.title }}</h1>
        <p>{{ page.lead }}</p>
      </div>
    </div>

    <div class="container bs-docs-container">
      <div class="row">
        <div class="col-md-3">
          <div class="bs-sidebar hidden-print" role="complementary">
            <ul class="nav bs-sidenav">
                {% navigation %}
            </ul>
          </div>
        </div>
        <div class="col-md-9" role="main">
            <?php include DOCROOT . '/content.php'; ?>
        </div>
      </div>

    </div>

    <?php include DOCROOT . '/includes/footer.php'; ?>

  </body>
</html>
