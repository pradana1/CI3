<?php $this->load->view('partials/header'); ?>

     <!-- Page Header-->
     <header class="masthead" style="background-image: url('<?php echo base_url(); ?>tamplate/assets/img/post-bg.jpg')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="post-heading">
                            <h1>Edit Artikel </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md">

                    <h1>Edit Artikel</h1>
                    <form method="POST">
                        <div class="form-group">
                            <label>Judul</label>
                            <input class= "form-control" type="text" name="title" value='<?php echo $blog['title']; ?>'>
                        </div>
                        <div class="form-group">
                            <label>Konten</label>
                            <textarea class= "form-control" name="content" id="" cols="30" rows="10">
                                <?php echo $blog['content']; ?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Url</label>
                            <input class= "form-control" type="text" name = "url" value='<?php echo $blog['url']; ?>'>
                        </div>    
                            <button class="btn btn-primary" type="submit">Simpan Artikel</button> 
                    </form>

                 </div>
            </div>
        </div>

<?php $this->load->view('partials/footer'); ?>