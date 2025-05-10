<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <?php wp_head(); ?>
    </head>
    <body class="d-flex flex-column h-100" <?php body_class();?>>
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav 
            class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                       
<?php  if (has_nav_menu('primary')) {
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'depth' => 2,
        'container' => false,
        'menu_class' => 'navbar-nav ml-auto',
        'fallback_cb' => false,
       'walker' => new Bootkit_Nav_Walker(),
    ));
}



class Bootkit_Nav_Walker extends Walker_Nav_Menu
{
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
        $output .= '<ul class="dropdown-menu dropdown-menu-right">';
    }

    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $item_html = '';
        parent::start_el($item_html, $item, $depth, $args);
        if ($item->is_dropdown && $depth === 0) {
            $item_html = str_replace('<a', '<a class="nav-link dropdown-toggle" data-toggle="dropdown"', $item_html);
            $item_html = str_replace('</a>', ' <b class="caret"></b></a>', $item_html);
        } elseif ($depth === 0) {
            $item_html = str_replace('<a', '<a class="nav-link"', $item_html);
        } elseif ($depth === 1) {
            $item_html = str_replace('<a', '<a class="dropdown-item"', $item_html);
        }
        $output .= $item_html;
    }

    public function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output)
    {
        if ($element->current) {
            $element->classes[] = 'active';
        }

        $element->is_dropdown = !empty($children_elements[$element->ID]);
        if ($element->is_dropdown) {
            if ($depth === 0) {
                $element->classes[] = 'nav-item dropdown';
            } elseif ($depth === 1) {
                $element->classes[] = 'dropdown-submenu';
            }
        } else {
            if ($depth === 0) {
                $element->classes[] = 'nav-item';
            }
        }

        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }

    public function end_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output .= '</li>';
    }

    public function end_lvl(&$output, $depth = 0, $args = [])
    {
        $output .= '</ul>';
    }
}










?>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">A Bootstrap 5 template for modern businesses</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                    </div>
                </div>
            </header>