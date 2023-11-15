<!DOCTYPE html>
<html>
<style>
    .heading {
        color: <?php echo $color->header_text_color; ?>;
    }

    article p {
        color: <?php echo $color->header_text_color; ?>;
    }

    footer .call_to_action {
        color: <?php echo $color->header_text_color; ?>;
        background-color: <?php echo $color->highlight_color; ?>;
    }

    footer .call_to_action:hover {
        color: <?php echo $color->header_text_color; ?>;
        border-color: <?php echo $color->header_text_color; ?>;
    }

    /* Navigation */
    #mainav li a {
        color: <?php echo $color->header_text_color; ?>;
    }

    #mainav .active a,
    #mainav a:hover,
    #mainav li:hover>a {
        color: <?php echo $color->highlight_color; ?>;
    }

    #mainav li li a,
    #mainav .active li a {
        color: <?php echo $color->header_text_color; ?>;
        background-color: <?php
        $out = $color->background_color_2 . 'e7';
        echo $out; ?>;
        border-color: <?php
        $out = $color->background_color_2 . 'e7';
        echo $out; ?>;
    }

    #mainav li li:hover>a
    #mainav .active .active>a {
        color: <?php echo $color->header_text_color; ?>;
    }

    #mainav form select {
        color: <?php echo $color->header_text_color; ?>;
        background-color: <?php echo $color->background_color_2 . 'e7'; ?>;
        border-color: <?php
        $out = $color->background_color_1 . '33';
        echo $out; ?>;
    }

    #header #logo {
        color: <?php echo $color->header_text_color; ?>;
    }

    /* CARD 1 */
    .container h3,
    .container .text-left {
        color: <?php echo $color->common_text_color; ?>;
    }

    #portfolio_card {
        background-color: <?php echo $color->card_color; ?>;
    }

    #portfolio_card:hover {
        box-shadow: 0 4px 8px <?php echo $color->card_color . '77'; ?>;
        /* Atur properti box-shadow sesuai kebutuhan */
    }

    /* KEUNGGULAN */
    .big_text {
        color: <?php echo $color->common_text_color; ?>;
    }

    .left_text {
        color: <?php echo $color->common_text_color; ?>;
    }

    /* CARD 2 */
    .image-text {
        color: <?php echo $color->header_text_color; ?>;
    }

    .image-container:hover {
        border-color: <?php echo $color->header_text_color; ?>;
    }

    /* CARD 3 */
    .services li figure {
        border-color: <?php echo $color->highlight_color; ?>;
    }

    .services li figure figcaption {
        color: <?php echo $color->header_text_color; ?>;
        background-color: <?php echo $color->highlight_color; ?>;
    }

    /* Testimonial */

    .testimonial blockquote {
        color: <?php echo $color->header_text_color . '77'; ?>;
        background-color: <?php echo $color->background_color_2 . '33'; ?>;
        border-color: <?php echo $color->background_color_2 . '77'; ?>;
    }

    .testimonial:hover blockquote {
        color: <?php echo $color->header_text_color; ?>;
        background-color: <?php echo $color->background_color_2; ?>;
        ;
    }

    .testimonial blockquote::after {
        border-top-color: <?php echo $color->background_color_2 . '77'; ?>;
    }

    .testimonial figure figcaption strong {
        color: <?php echo $color->header_text_color; ?>;

    }

    .testimonial figure figcaption br {
        color: <?php echo $color->header_text_color; ?>;

    }

    .testimonial figure figcaption em {
        color: <?php echo $color->header_text_color; ?>;

    }
    .carousel .carousel-indicators li  {
        border-color: <?php echo $color->header_text_color; ?>;
    }
    .carousel .carousel-indicators .active {
        background-color: <?php echo $color->header_text_color; ?>;
    }

    .carousel .carousel-control{
        color: <?php echo $color->header_text_color; ?>;

    }

    .carousel .carousel-control:hover{
        color: <?php echo $color->header_text_color; ?>;
    }

    
    .carousel .carousel-control:focus{
        color: <?php echo $color->header_text_color; ?>;
    }
    /* Blog */
    
	.one_half p {
        color: <?php echo $color->common_text_color; ?>;
	}

    .one_half a {
        border-color: <?php echo $color->common_text_color; ?>;
	}


    /* FOOTER */
    #footer .title,
    #footer .heading {
        color: <?php echo $color->header_text_color; ?>;
        border-color: <?php echo $color->background_color_1; ?>;
    }

    #footer .title {
        border-bottom: 1px solid <?php echo $color->background_color_1; ?>;
    }
    #copyright .fl_left{
        color: <?php echo $color->header_text_color; ?>;
        
    }

    #footer ul li,
    #footer address,
    #footer article h2,
    #footer article p {
        color: <?php echo $color->common_text_color; ?>;
    }

    #footer ul li a {
        color: <?php echo $color->header_text_color; ?>;
    }

    .row3 {
        color: <?php echo $color->common_text_color; ?>;
        background-color: <?php echo $color->background_color_1; ?>;
    }

    .row4 {
        color: <?php echo $color->common_text_color; ?>;
        background-color: <?php echo $color->background_color_2; ?>;
    }

    .box_social_media {
        background-color: <?php echo $color->highlight_color; ?>;
    }

    .box_social_media_no_active {
        background-color: grey;
        color: <?php echo $color->header_text_color; ?>;

    }

    .box_social_media a {
        color: <?php echo $color->header_text_color; ?>;

    }

    .box_social_media:hover {
        border: 2px solid <?php echo $color->header_text_color; ?>;
        color: <?php echo $color->header_text_color; ?>;
    }

    .box_social_media a:hover {
        color: <?php echo $color->header_text_color; ?>;
    }

    .row5 a {
        color: <?php echo $color->common_text_color; ?>;
        background-color: <?php echo $color->background_color_2; ?>;
    }
    .row5 {
        background-color: <?php echo $color->background_color_2.'ee'; ?>;
    }

    .btn {
        color: <?php echo $color->header_text_color; ?>;
        background-color: <?php echo $color->highlight_color; ?>;
        border-color: <?php echo $color->highlight_color; ?>;
        border-radius: 0px;
    }

    .btn.inverse:hover {
        color: <?php echo $color->header_text_color; ?>;
        background-color: <?php echo $color->highlight_color; ?>;
        border-color: <?php echo $color->highlight_color; ?>;
        border-radius: 0px;
    }

    .btn:hover {
        color: <?php echo $color->header_text_color; ?>;
        background-color: transparent;
        border-radius: 0px;
        border-color: <?php echo $color->header_text_color; ?>;
    }

    .btn.inverse {
        color: <?php echo $color->header_text_color; ?>;
        background-color: transparent;
        border-radius: 0px;
        border-color: <?php echo $color->header_text_color; ?>;
    }

    #backtotop {
        color: <?php echo $color->header_text_color; ?>;
        background-color: <?php echo $color->highlight_color; ?>;
    }
    /* Pagination */
    .pagination .page-link {
        color: <?php echo $color->highlight_color; ?>;
        
    }
    .pagination .page-item {
        color: <?php echo $color->header_text_color; ?>;
        border-color: <?php echo $color->highlight_color; ?>;
    }
    .pagination .page-item .page-link:hover {
        color: <?php echo $color->header_text_color; ?>;
        background-color: <?php echo $color->highlight_color; ?>;
        border-color: <?php echo $color->highlight_color; ?>;
    }
    
    .pagination .active .page-link {
        background-color: <?php echo $color->highlight_color; ?>;
        color: <?php echo $color->header_text_color; ?>;
        border-color: <?php echo $color->highlight_color; ?>;
    }

    .pagination .disabled .page-link {
        background-color: grey;
        color: <?php echo $color->header_text_color; ?>;
        border-color: <?php echo $color->highlight_color; ?>;
    }
    
    .pagination .page-item a{
        background-color: transparent;
        border-color: <?php echo $color->highlight_color; ?>;
        color: <?php echo $color->highlight_color; ?>;
    }
</style>

<head>
</head>

</html>
