<?php
include "header.php";
$habersor=$db->prepare("select * from icerik");
$habersor->execute();

?>
<div role="main" class="main col-md-12 " ">
    <div class="container" style="padding-left: 100px">
        <div class="row pt-xl">

            <div class="col-md-9">

                <h1 class="mt-xl mb-none">Duyurular</h1>
                <div class="divider divider-primary divider-small mb-xl">
                    <hr>
                </div>

                <?php
                foreach ($habersor as $haberCek)
                    if($haberCek['icerik_durum']=='1')
                    {


                {?>

                <div class="row">
                    <div class="col-md-12">

									<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
										<span class="thumb-info-side-image-wrapper p-none hidden-xs">
											<a title="" href="icerik_detay.php?icerik_id=<?php echo $haberCek['icerik_id']; ?>">
												<img src="../admin/<?php echo $haberCek['icerik_resimyol'] ?>" class="img-responsive" alt="<?php echo $haberCek['icerik_keyword'] ?>" style="width: 200px; height: 100px;">
											</a>
										</span>
										<span class="thumb-info-caption">
											<span class="thumb-info-caption-text">
												<h2 class="mb-md mt-xs"><a title="" class="text-dark" href="icerik_detay.php?icerik_id=<?php echo $haberCek['icerik_id']; ?>"><?php echo $haberCek['icerik_ad'] ?></a></h2>
												<span class="post-meta">
													<span><?php echo $haberCek['icerik_zaman'] ?>| <a href="#"><?php echo $haberCek['icerik_author'] ?></a></span>
												</span>
												<p class="font-size-md"><?php echo  substr($haberCek['icerik_detay'],0,800);?></p>
												<a class="mt-md" href="icerik_detay.php?icerik_id=<?php echo $haberCek['icerik_id']; ?>">Oku Beni<i class="fa fa-long-arrow-right"></i></a>
											</span>
										</span>
									</span>

                    </div>
                </div>
                                <?php
                                  }
                                      }
                                    ?>
                <br>
            </div>
            <!--SideBar-->
      
        </div>

    </div>
</div>
<?php
include 'footer.php'?>
