<?php
include 'header.php';
include 'slider.php';
$hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=:id");
$hakkimizdasor->execute(array("id"=>1));
$hakkimizde_cek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?>
<style>
.section-default section-no-border mt-none{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),
    url("img/background.jpg");
    background-size:cover;
    background-position: center;
}
</style>

  

           
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12 center">
                <h2 class="mt-xl mb-none">Son Duyurular</h2>
                <div class="divider divider-primary divider-small divider-small-center mb-xl">
                    <hr>
                </div>
            </div>
        </div>
        <div class="row mt-xl">
            <?php
            $habersor=$db->prepare("select * from icerik where icerik_durum='1' limit 2 ");
            $habersor->execute();

            foreach ($habersor as $haberCek)
            {
        ?>
            <div class="col-md-6">

							<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mb-xl">
								<span class="thumb-info-side-image-wrapper p-none hidden-xs">
									<a title="" href="icerik_detay.php?icerik_id=<?php echo $haberCek['icerik_id']; ?>">
										<img src="../admin/<?php echo $haberCek['icerik_resimyol'] ?>" class="img-responsive" alt="" style="width: 195px;">
									</a>
								</span>
								<span class="thumb-info-caption">
									<span class="thumb-info-caption-text">
										<h2 class="mb-md mt-xs"><a title="" class="text-dark" href="icerik_detay.php?icerik_id=<?php echo $haberCek['icerik_id']; ?>"><?php echo $haberCek['icerik_ad']; ?></a></h2>
										<span class="post-meta">
											<span><?php echo $haberCek['icerik_zaman']; ?> | <a href="icerik_detay.php?icerik_id=<?php echo $haberCek['icerik_id']; ?>"><?php echo $haberCek['icerik_author']; ?></a></span>
										</span>
										<p class="font-size-md"><?php echo substr($haberCek['icerik_detay'],0,250); ?></p>
										<a class="mt-md" href="icerik_detay.php?icerik_id=<?php echo $haberCek['icerik_id']; ?>">Okumak İçin <i class="fa fa-long-arrow-right"></i></a>
									</span>
								</span>
							</span>

            </div>
           <?php }?>
        </div>
    </div>

    <section class="section section-background section-footer" style="background-color: #FFFFFF; background-position: 50% 100%;">
        <div class="container">
            <div class="row">
              

            
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php';?>