<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head() ?>
</head>

<body <?php body_class(["bg-dark", "text-white", "d-flex", "flex-column", "h-100"]) ?> dir="ltr">

  <header>
    <?php get_template_part("partials/navbar") ?>
  </header>
