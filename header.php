<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex" />
    <meta name="viewport" content="with=device-with, initial-scale=1.0" />
    <title><?php echo wp_get_document_title();?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/reset.css" />
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url');?>/img/favicon.ico" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/responsive.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" />

    <!-- スクロールヒント -->
    <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
    <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>

    <!-- Adobe fonts -->
    <script>
    (function(d) {
        var config = {
                kitId: "xhq6bes",
                scriptTimeout: 3000,
                async: true,
            },
            h = d.documentElement,
            t = setTimeout(function() {
                h.className =
                    h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
            }, config.scriptTimeout),
            tk = d.createElement("script"),
            f = false,
            s = d.getElementsByTagName("script")[0],
            a;
        h.className += " wf-loading";
        tk.src = "https://use.typekit.net/" + config.kitId + ".js";
        tk.async = true;
        tk.onload = tk.onreadystatechange = function() {
            a = this.readyState;
            if (f || (a && a != "complete" && a != "loaded")) return;
            f = true;
            clearTimeout(t);
            try {
                Typekit.load(config);
            } catch (e) {}
        };
        s.parentNode.insertBefore(tk, s);
    })(document);
    </script>
</head>

<body <?php body_class();?>>
    <?php wp_body_open (); ?>
    <header>
        <div class="ly_header_inner hp_flex">
            <div class="ly_header_left hp_flex">
                <div class="el_logo">
                    <a href="<?php echo esc_url(home_url('/'));?>">
                        【デモサイト-プレミアム】
                    </a>
                </div>
                <nav class="bl_nav">
                    <ul class="bl_nav_list hp_flex">
                        <li class="bl_nav_item"><a href="<?php bloginfo('url');?>">ホーム</a></li>
                        <li class="bl_nav_item"><a href="<?php bloginfo('url');?>/news">お知らせ</a></li>
                        <li class="bl_nav_item"><a href="<?php bloginfo('url');?>/blog">ブログ</a></li>
                        <li class="bl_nav_item"><a href="<?php bloginfo('url');?>/price">コース・料金</a></li>
                    </ul>
                </nav>
            </div>
            <div class="ly_header_right hp_flex">
                <div class="bl_header_info">
                    <p>平日08:00〜20:00</p>
                    <div class="el_tel">
                        <img src="<?php bloginfo('template_url');?>/img/icon-phone.png" alt="" />
                        <p>0123-456-7890</p>
                    </div>
                </div>
                <div class="ly_cta">
                    <a class="el_btn" href="<?php bloginfo('url');?>/contact"><button>資料請求</button></a>
                    <a href="<?php bloginfo('url');?>/contact"><button class="el_contact">お問い合わせ</button></a>
                </div>
                <div class="bl_drawerBtn">
                    <span class="hambarg"></span>
                    <span class="hambarg"></span>
                    <span class="hambarg"></span>
                </div>
            </div>
        </div>
    </header>
    <div class="bl_drawer_wrap">
        <!-- 全画面をおおう -->
    </div>
    <ul class="bl_drawer_list">
        <a href="<?php bloginfo('url');?>">
            <li class="bl_drawer_item">ホーム
            </li>
        </a>
        <a href="<?php bloginfo('url');?>/news">
            <li class="bl_drawer_item">お知らせ
            </li>
        </a>
        <a href="<?php bloginfo('url');?>/blog">
            <li class="bl_drawer_item">ブログ
            </li>
        </a>
        <a href="<?php bloginfo('url');?>/price">
            <li class="bl_drawer_item">コース・料金
            </li>
        </a>
        <a href="<?php bloginfo('url');?>/contact">
            <li class="bl_drawer_item">資料請求
            </li>
        </a>
        <a href="<?php bloginfo('url');?>/contact">
            <li class="bl_drawer_item">お問い合わせ
            </li>
        </a>
    </ul>
    <!-- ヘッダー画像の条件分岐 -->
    <?php if(is_page('price')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/plan.jpg" alt="">
        <h2>コース・料金</h2>
    </div>
    <?php }else if(is_post_type_archive('news')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/news.jpg" alt="">
        <h2>お知らせ</h2>
    </div>
    <?php }else if(is_archive()){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/blog.jpg" alt="">
        <h2>ブログ</h2>
    </div>
    <?php }else if(is_page('contact')){?>
    <div class="ly_heading">
        <img src="<?php bloginfo('template_url');?>/img/cta.jpg" alt="">
        <h2>お問い合わせ・資料請求</h2>
    </div>
    <?php }else{}?>
    <!-- パンくずリスト -->
    <div class="ly_breadcrumbs <?php if ( is_single() ) { echo 'hp_mt80'; } ?>">
        <div class=" ly_inner">
            <div class="bl_breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
            </div>
        </div>
    </div>
    <?php wp_head(); ?>