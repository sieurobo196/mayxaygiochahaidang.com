<!-- header -->
<?php echo $this->element("article/header"); ?>
<!-- //header -->
<!-- navigation -->
<?php echo $this->element("article/navigation"); ?>
<!-- //navigation -->
<!-- news-original -->
<div class="news-original">
    <div class="container">
        <div class="agileinfo_news_original_grids">
            <div class="col-md-8 agileinfo_news_original_grids_left1">

                <?php foreach ($listType as $rowType): ?>
                    <div class="list-article-details">

                        <div class="row article-type"><?php echo $rowType->type;?></div>
                        <div class="row article-block">

                            <?php
                            foreach ($results as $row):
                                if ($row->type == $rowType->type) {
                                    ?>
                                    <div class="col-md-6  article-title">-<a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "view", $row->type, $row->map_url]); ?>" />
                                        <?php echo $row->title ?> </a></div>
                                    <?php
                                }
                            endforeach;
                            ?>

                        </div>
                    </div>
                    <?php
                endforeach;
                ?>


            </div>
            <div class="col-md-4 agileinfo_news_original_grids_right">
                <div class="w3layouts_add_market">
                    <!--<img src="<?php echo $this->request->webroot . "images" ?>/13.jpg" alt=" " class="img-responsive" />-->
                    <div class="articles-news-title">New</div>

                    <div class="articles-news">
                        <?php foreach ($listArticleNew as $row): ?>
                            <div class="col-md-12 article-line">
                                <div class="col-md-2 list-article-news"><?php echo $row->view; ?></div>
                                <div class="col-md-10"><a href="<?php echo $this->Url->build(["controller" => "Articles", "action" => "view", $row->type, $row->map_url]); ?>">
                                        <?php echo $row->title ?> </a></div>
                            </div>
                        <?php endforeach;
                        ?>

                    </div>

                </div>
                <div class="w3layouts_add_market">
                    <!--<img src="<?php echo $this->request->webroot . "images" ?>/13.jpg" alt=" " class="img-responsive" />-->
                </div>
                <div class="agileinfo_chat">
                    <!--<img src="<?php echo $this->request->webroot . "images" ?>/13.jpg" alt=" " class="img-responsive" />-->
                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //news-original -->
<!-- footer -->
<?php echo $this->element("article/footer"); ?>
<!-- //footer -->