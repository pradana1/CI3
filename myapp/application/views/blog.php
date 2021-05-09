<?php $this->load->view('partials/header'); ?>

    
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?php echo base_url();?>tamplate/assets/img/home-bg.jpg')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="site-heading">
                            <h1>Kumpulan Artikel Agoy</h1>
                            <span class="subheading">A Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">

                    <!-- form PEncarian -->
                    <form>
                        <input type="text" name='find'>
                        <button type="submit">Cari</button>
                    </form>

                    <!-- Perulangan -->
                    <?php foreach ($blogs as $key => $blog): ?>

                    <div class="post-preview">
                        <a href="<?php echo site_url('blog/detail/'.$blog['url']); ?>">
                            <h2 class="post-title">
                                <?php echo $blog['title']; ?>
                            </h2>
                            
                        </a>
                        <p class="post-meta">
                            Posted by on <?php echo $blog['date']; ?>
                            <a href="<?php echo site_url('blog/edit/'.$blog['id']); ?>">Edit Artikel</a>
                            <a href="<?php echo site_url('blog/delete/'.$blog['id']); ?>">Hapus Artikel</a>

                        </p>

                        <?php echo $blog['content']; ?>

                    </div>
                    <hr>  
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <hr />

<?php $this->load->view('partials/footer'); ?>


