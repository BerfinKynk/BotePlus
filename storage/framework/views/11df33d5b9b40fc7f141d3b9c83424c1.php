<?php echo $__env->make('_header', ['baslik' => 'Ana Sayfa'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">
        <?php if(session('hata')): ?>
        <div class="alert alert-danger">
          <?php echo e(session('hata')); ?>

        </div>
        <?php endif; ?>
        <?php if(session('basarili')): ?>
        <div class="alert alert-success">
          <?php echo e(session('basarili')); ?>

        </div>
        <?php endif; ?>
          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Welcome To Cyborg</h6>
                  <h4><em>Browse</em> Our Popular Games Here</h4>
                  <div class="main-button">
                    <a href="browse.html">Browse Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>En Popüler</em> Oyunlar</h4>
                </div>
                <div class="row">
                  <?php $__currentLoopData = $oyunlar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oyun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                    <div class="col-lg-3 col-sm-6">
                    <a href="/oyun/<?php echo e($oyun->id); ?>">
                      <div class="item">
                        <img src="storage/kapak/<?php echo e($oyun->kapak); ?>" style="width: 100%; height: 10vw; object-fit: cover;" alt="">
                        <h4><?php echo e($oyun->ad); ?><br><span><?php echo e($oyun->kategori); ?></span></h4>
                        <ul>
                          <li><i class="fa fa-star"></i> <?php echo e($oyun->yildiz); ?></li>
                          <li><i class="fa fa-download"></i> <?php echo e($oyun->indirilme_sayisi); ?></li>
                        </ul>
                      </div>
                    </a>
                    </div>
                  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-lg-12">
                    <div class="main-button">
                      <a href="browse.html">Discover Popular</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Most Popular End ***** -->

          <!-- ***** Gaming Library Start ***** -->
          <div class="gaming-library">
            <div class="col-lg-12">
              <div class="heading-section">
                <h4><em>Your Gaming</em> Library</h4>
              </div>
              <div class="item">
                <ul>
                  <li><img src="assets/images/game-01.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>Dota 2</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>24/08/2036</span></li>
                  <li><h4>Hours Played</h4><span>634 H 22 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
              <div class="item">
                <ul>
                  <li><img src="assets/images/game-02.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>Fortnite</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>22/06/2036</span></li>
                  <li><h4>Hours Played</h4><span>740 H 52 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button"><a href="#">Download</a></div></li>
                </ul>
              </div>
              <div class="item last-item">
                <ul>
                  <li><img src="assets/images/game-03.jpg" alt="" class="templatemo-item"></li>
                  <li><h4>CS-GO</h4><span>Sandbox</span></li>
                  <li><h4>Date Added</h4><span>21/04/2036</span></li>
                  <li><h4>Hours Played</h4><span>892 H 14 Mins</span></li>
                  <li><h4>Currently</h4><span>Downloaded</span></li>
                  <li><div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="profile.html">View Your Library</a>
              </div>
            </div>
          </div>
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>
<?php echo $__env->make('_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php /**PATH C:\Users\GEF-LAB2\Documents\laravel\boteplus\resources\views/index.blade.php ENDPATH**/ ?>